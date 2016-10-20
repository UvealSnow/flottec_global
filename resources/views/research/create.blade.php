@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">New Post</div>
                <div class="panel-body" ng-controller="postCtrl">

                    @if (count($errors->all()) > 0)
                        @foreach ($errors->all() as $error)
                            <li>
                                {{ $error }}
                            </li>
                        @endforeach
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/research') }}" enctype="multipart/form-data">
                        
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">Title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                            <label for="body" class="col-md-4 control-label">Body</label>

                            <div class="col-md-6">
                                <textarea id="body" type="text" class="form-control" name="body" required>{{ old('body') }}</textarea>

                                @if ($errors->has('body'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('body') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                            {{--
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <a class="btn btn-primary" href ng-click="addFile();">new file</a>
                            </div>
                        </div>
                            --}}

                        <div class="form-group{{ $errors->has('file_<% $index %>') ? ' has-error' : '' }}">
                            <label for="file_<% $index %>" class="col-md-4 control-label">File 1</label>

                            <div class="col-md-4">
                                <input id="file_<% $index %>" type="file" class="form-control" name="files[]" multiple>

                                @if ($errors->has('file_<% $index %>'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('file_<% $index %>') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-md-2">
                                <a class="btn btn-danger" href ng-click="deleteFile();">remove</a>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
