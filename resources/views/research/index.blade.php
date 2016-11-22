@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div>
            <div><br>
                <div><font color="#1966cb" size="6"><b>RESEARCH AND <br>DEVELOPMENT</b></font><br>
                <font color="#424242"><br>Here you will be able to find the latest<br>
                content in Flottec’s site.</font> <br><br></div>
                <div>

                    @if (session('success'))
                        <div class="alert alert-warning">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (Auth::user() && Auth::user()->type == 'admin')
                       <br> <a class="btn btn-primary" href="{{ url("/research/create") }}">New post</a> <hr>
                    @endif
                    
                    @if (count($posts) > 0)
                        @foreach ($posts as $post)
                            <!-- <a href="{{ url("/research/$post->id") }}"> -->
                                <div>
                                   <font color="black" size="4"><b>{{ $post->title }}</b></font><br>
                                   <font color="#424242">{{ $post->body }} </font><br><br>
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
    <br><br><div style="margin-left: 1000px;"><font color="#1966cb" size="4"><b>VIEW MORE</b></font></div>
</div>
@endsection

