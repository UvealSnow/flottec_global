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
				<a class="btn btn-primary pull-right" href="{{ url("/categories/create") }}">Create</a>
				<hr>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				@if ($categories->count() > 0)
					<table class="table table-striped">
						<tr>
							<th>Name</th>
							<th>Products</th>
							<th>Options</th>
						</tr>
						@foreach ($categories as $category)
							<tr>
								<td><a href="{{ url("/categories/$category->id") }}">{{ $category->name_en }}</a></td>
								<td><a href="{{ url("categories/$category->id/products") }}">{{ $category->products->count() }}</a></td>
								<td>
									<a class="btn btn-xs btn-primary" href="{{ url("/categories/$category->id/products/create") }}">Add Product</a>
									<a class="btn btn-xs btn-warning" href="{{ url("/categories/$category->id/edit") }}">Edit</a>
									<form style="display: inline-block;" action="{{ url("/categories/$category->id") }}" method="post">
										{{ csrf_field() }}
										<input type="hidden" name="_method" value="delete">
										<button class="btn btn-xs btn-danger">Delete</button>
									</form>
								</td>
							</tr>
						@endforeach
					</table>

				@endif
			</div>
		</div>
	</div>

@endsection