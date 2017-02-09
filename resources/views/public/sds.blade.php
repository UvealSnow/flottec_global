@extends('layouts.public')

@section('content')

    <div class="interface">
    	<h1>Safety Data <br>Sheets / MSDS</h1>
		<p>
		Here you will be able to find the latest SDS in Flottec’s site.</p>

		<br>

		@if ($documents->count() > 0)
			<div class="sds-container">
				@foreach ($documents->sortBy('created_at') as $document)
					<div class="sds">
						<div class="sds__product-info">
							<label for="">Product Name:</label>
							<div class="sds__product-name">{{ $document->documentable->name }}</div>
							<label for="">Document Type:</label>
							@if ($document->type == 'safety_sheet')
								<div class="sds__product-type">Safety Sheet</div>
							@else
								<div class="sds__product-type">Tech Sheet</div>
							@endif
						</div>
						<a class="sds__download" href="{{ url("/") }}">Download</a>
					</div>
				@endforeach
			</div>
		@else
			<p>@lang('messages.no_docs')</p>
		@endif
    </div>

@endsection