@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $product->name }}</div>
                <div class="panel-body">

                	@if (Auth::user() && Auth::user()->type == 'admin')
                		<a class="btn btn-xs btn-warning" href="{{ url("/products/$product->id/edit") }}">Edit</a>
                		<form action="{{ url("/products/$product->id") }}" method="post" style="display: inline-block;">
                			{{ csrf_field() }}
                			<input type="hidden" name="_method" value="delete">
                			<button class="btn btn-xs btn-danger">Delete</button>
                		</form>
                		<hr>
                	@endif

                    <p>Category: {{ $product->category }}</p>
                    <p>Classification: {{ $product->classification }}</p>
                    <p>Mineral: {{ $product->mineral }}</p>
                    <p>Chemical description: {{ $product->chemical_description }}</p>
                    <p>Chemical family: {{ $product->chemical_family }}</p>

                    @if ($product->safety_sheets->english_sheet)
                    	<p>English safety sheet: <a class="btn btn-xs btn-primary" target="_blank" href="{{ url('download/'.$product->safety_sheets->english_sheet) }}">download</a></p>
                    @endif
                    @if ($product->safety_sheets->spanish_sheet)
                    	<p>Spanish safety sheet: <a class="btn btn-xs btn-primary" target="_blank" href="{{ url('download/'.$product->safety_sheets->spanish_sheet) }}">download</a></p>
                    @endif

                    <p>Tech sheet: <a class="btn btn-xs btn-primary" target="_blank" href="{{ url('/download/'.$product->tech_sheet->tech_sheet) }}">download</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
