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
                        <a href="{{ url("/products/create") }}">Create new</a> <hr>
                    @endif
                    
                    @if (count($products) > 0)
                        @foreach ($products as $product)
                            <a href="{{ url("/products/$product->id") }}">
                                <div class="col-md-4" style="border: 1px solid black;">
                                    <p>{{ $product->name }}</p>
                                    <p>{{ $product->mineral }}</p>
                                </div>
                            </a>
                        @endforeach
                    @else
                        <p>There are no registered products yet</p>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
