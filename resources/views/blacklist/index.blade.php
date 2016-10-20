@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Email blacklist</div>
                <div class="panel-body">

                    @if (session('success'))
                        <div class="alert alert-warning">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (Auth::user()->type == 'admin')
                        <a href="{{ url("/blacklist/create") }}">Create new</a> <hr>
                    @endif

                    <table class="table table-striped table-condensed">
                        <tr>
                            <th>Email</th>
                            <th>Domain</th>
                            <th>Delete</th>
                        </tr>
                        @if (count($blacklisted) > 0)
                            @foreach ($blacklisted as $email)
                                <tr>
                                    @if ($email->name)
                                        <td>{{ $email->name }}</td>
                                    @else
                                        <td>-</td>
                                    @endif
                                    @if ($email->domain)
                                        <td>{{ $email->domain }}</td>
                                    @else
                                        <td>-</td>
                                    @endif
                                    <td>
                                        <form action="{{ url("/blacklist/$email->id") }}" method="post">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="delete">
                                            <button class="btn btn-xs btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else 
                            <tr >
                                <td colspan="4">Nothing has been blacklisted yet</td>
                            </tr>
                        @endif
                    </table>
                    {{ $blacklisted->links() }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
