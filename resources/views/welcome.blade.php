@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Landing page</div>

                    <div class="row">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @elseif (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}    
                            </div>
                        @endif
                    </div>

                    <div class="panel-body">
                        <p>{{ trans('welcome.selected_language') }}: {{ App::getLocale() }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
