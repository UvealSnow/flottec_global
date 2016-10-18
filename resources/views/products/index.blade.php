@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Products</div>
                <div class="panel-body">

                    @if (Auth::user()->type == 'admin')
                        <a href="{{ url("/products/create") }}">Create new</a> <hr>
                    @endif
                    
                    @if (count($products) > 0)
                        @foreach ($products as $product)
                            <div class="col-md-4">
                                <p>{{ $product->name }}</p>
                                <p>{{ $product->mineral }}</p>
                                
                                @if ($product->safety_sheet)
                                    <p>Safety information</p>
                                    @if ($product->safety_sheet->english_sheet)
                                        <a href="{{ url($product->safety_sheet->english_sheet) }}">Download</a>
                                    @elseif ($product->safety_sheet->spanish_sheet)
                                        <a href="{{ url($product->safety_sheet->spanish_sheet) }}">Download</a>
                                    @endif
                                @endif

                                @if ($product->tech_sheet)
                                    <p>Technical information</p>
                                    <a href="{{ url($product->tech_sheet->tech_sheet) }}">Download</a>
                                @endif

                            </div>
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
