@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Choose your language</div>

                        <div class="row">
                            <div class="col-md-4 col-md-offset-2">
                                <p><a href="{{ url('/lang/en') }}">English</a></p>
                            </div>

                            <div class="col-md-4 ">
                                <p><a href="{{ url('/lang/es') }}">Espanish</a></p>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
@endsection
