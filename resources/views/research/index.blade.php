@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Products</div>
                <div class="panel-body">

                    @if (session('success'))
                        <div class="alert alert-warning">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (Auth::user() && Auth::user()->type == 'admin')
                        <a class="btn btn-primary" href="{{ url("/research/create") }}">New post</a> <hr>
                    @endif
                    
                    @if (count($posts) > 0)
                        @foreach ($posts as $post)
                            <a href="{{ url("/research/$post->id") }}">
                                <div class="col-md-10 col-md-offset-1" style="border: 1px solid black; margin-top: 5px;">
                                    <p>{{ $post->title }}</p>
                                </div>
                            </a>
                        @endforeach
                    @else
                        <p>There are no registered posts yet</p>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
