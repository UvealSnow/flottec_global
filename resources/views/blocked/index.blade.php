@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Blocked user requests</div>
                <div class="panel-body">

                    @if (session('success'))
                        <div class="alert alert-warning">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (count($blocked) > 0)
                        <table class="table table-condensed table-striped">
                            <tr>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Accept</td>
                                <td>Decline</td>
                            </tr>
                            @foreach($blocked as $request)
                                <tr>
                                    <td>{{ $request->name }}</td>
                                    <td>{{ $request->email }}</td>
                                    <td>
                                        <form action="{{ url("/blocked/$request->id") }}" method="post">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="put">
                                            <button class="btn btn-xs btn-primary">Accept</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{ url("/blocked/$request->id") }}" method="post">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="delete">
                                            <button class="btn btn-xs btn-danger">Decline</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </div>
                        {{ $blocked->links() }}
                    @else
                        <p>There are no blocked user requests.</p>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
