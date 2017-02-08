@extends('layouts.app')

@section('content')

	<div class="container">

		@if (session('success'))
			<div class="alert alert-success">
				<p>{{ session('success') }}</p>
			</div>
		@endif

		<div class="row">
			<div class="col-md-12">

				<h1>{{ $category->name_en }} | {{ $category->name_es }}</h1>

				<div class="row">
					<div class="col-md-12">
						<a class="btn btn-xs btn-warning" href="{{ url("/categories/$category->id/edit") }}">Edit</a>
						<form style="display: inline-block;" action="{{ url("/categories/$category->id") }}" method="post">
							{{ csrf_field() }}
							<input type="hidden" name="_method" value="delete">
							<button class="btn btn-xs btn-danger">Delete</button>
						</form>
					</div>
				</div>

				<br><br>

				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						@if ($category->picture)
							<img style="width: 100%;" src="{{ Storage::url($category->picture->path) }}">
						@else
							No image set for this product category
						@endif
					</div>
				</div>

				<br><br>

				@if ($category->products->count() > 0)
					@foreach ($category->products as $product)
						<p>
							<a href="{{ url("/categories/$category->id/products/$product->id") }}">{{ $product->name }}</a>
						</p>
					@endforeach
				@else
					<p>No products yet!</p>
				@endif

			</div>
		</div>
	</div>

@endsection