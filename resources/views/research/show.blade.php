@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $post->title }}</div>
                <div class="panel-body">

                    @if (Auth::user() && Auth::user()->type == 'admin')
                        <a class="btn btn-xs btn-warning" href="{{ url("/research/$post->id/edit") }}">Edit</a>
                        <form action="{{ url("/research/$post->id") }}" method="post" style="display: inline-block;">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="delete">
                            <button class="btn btn-xs btn-danger">Delete</button>
                        </form>
                        <hr>
                    @endif
                    
                    <p>
                        {{ $post->body }}
                    </p>

                    <h3>Downloads</h3> <hr>
                    @if (Auth::user())
                        @if (count($post->files) > 0)
                            @foreach ($post->files as $file)
                                <p>
                                    <a href="{{ url("/download/$file->file") }}">{{ $file->original_name }}</a>
                                </p>
                            @endforeach
                        @endif
                    @else
                        <p>To see the download section please <a href="{{ url("/login") }}">login</a></p>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
