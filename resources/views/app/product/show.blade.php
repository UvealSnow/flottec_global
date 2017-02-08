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

				<h1>{{ $product->name }}</h1>

				<div class="row">
					<div class="col-md-12">
						<a class="btn btn-xs btn-warning" href="{{ url("/categories/$category_id/products/$product->id/edit") }}">Edit</a>
						<form style="display: inline-block;" action="{{ url("/categories/$category_id/products/$product->id") }}" method="post">
							{{ csrf_field() }}
							<input type="hidden" name="_method" value="delete">
							<button class="btn btn-xs btn-danger">Delete</button>
						</form>
					</div>
				</div>

				<br><br>

				<div class="row">
					<div class="col-md-12">
						<h3>Images</h3>
						@if ($product->pictures->count() > 0)
							<div class="row">
								@foreach ($product->pictures as $picture)
									<div class="col-md-3">
										<img style="width: 100%;" src="{{ Storage::url($picture->path) }}">
									</div>
								@endforeach
							</div>
						@endif
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<h3>Safety Sheets</h3>
						@if ($product->getSafetySheets($product->id)->count() > 0)
							@foreach ($product->getSafetySheets($product->id) as $i => $safety_sheet)
								<div>
									<a class="btn btn-primary" target="_blank" href="{{ Storage::url($safety_sheet->path) }}">Download SH {{ $i + 1 }}</a>
									<form style="display: inline-block;" action="{{ url("/document/$safety_sheet->id") }}" method="post">
										{{ csrf_field() }}
										<input type="hidden" name="_method" value="put">
										<button class="btn btn-danger">Delete</button>
									</form>
								</div>
								<br>
							@endforeach
						@else
							<p>No tech sheets for this product</p>
						@endif
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<h3>Tech Sheets</h3>
						@if ($product->getTechSheets($product->id)->count() > 0)
							@foreach ($product->getTechSheets($product->id) as $i => $tech_sheet)
								<div>
									<a class="btn btn-primary" target="_blank" href="{{ Storage::url($tech_sheet->path) }}">Download TS {{ $i + 1 }}</a>
									<form style="display: inline-block;" action="{{ url("/document/$tech_sheet->id") }}" method="post">
										{{ csrf_field() }}
										<input type="hidden" name="_method" value="put">
										<button class="btn btn-danger">Delete</button>
									</form>
								</div>
								<br>
							@endforeach
						@else
							<p>No safety sheets for this product</p>
						@endif
					</div>
				</div>

			</div>
		</div>
	</div>

@endsection