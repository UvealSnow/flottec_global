@extends('layouts.app')

@section('content')
	
	<div class="container">

		<div class="row">
			<div class="col-md-12">
				<h2>{{ $paper->name_en }}</h2>

				<h3>Images</h3>
				@if ($paper->pictures->count() > 0) 
					<div class="row">
						@foreach ($paper->pictures as $picture)
							<div class="col-md-2">
								<img style="width: 100%; margin-bottom: 15px;" src="{{ Storage::url($picture->path) }}">
								<a class="btn btn-default" target="_blank"  href="{{ Storage::url($picture->path) }}">
									<span class="glyphicon glyphicon-download" aria-hidden="true"></span> Download 
								</a>
								<form style="display: inline-block;" action="{{ url("/picture/$picture->id") }}" method="post">
									{{ csrf_field() }}
									<input type="hidden" name="_method" value="delete">
									<button class="btn btn-danger">
										<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
									</button>
								</form>
							</div>
						@endforeach
					</div>
				@else
					<p>No images for this paper.</p>
				@endif

				<h3>Documents</h3>
				@if ($paper->documents->count() > 0) 
					<div class="row">
						@foreach ($paper->documents as $document)
							<div class="col-md-2">
								<a class="btn btn-default" target="_blank"  href="{{ Storage::url($document->path) }}">
									<span class="glyphicon glyphicon-download" aria-hidden="true"></span> Download 
								</a>
								<form style="display: inline-block;" action="{{ url("/document/$document->id") }}" method="post">
									{{ csrf_field() }}
									<input type="hidden" name="_method" value="delete">
									<button class="btn btn-danger">
										<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
									</button>
								</form>
							</div>
						@endforeach
					</div>
				@else
					<p>No documents for this paper.</p>
				@endif
			</div>
		</div>
		
	</div>

@endsection