@extends('layouts.public')

@section('content')

	    <div class="interface">
			@if (App::getLocale('en')) <h1>{{ $category->name_en }} > {{ $product->name }}</h1>
			@elseif (App::getLocale('es')) <h1>{{ $category->name_es }} > {{ $product->name }}</h1>
			@endif
			
			@if (Auth::user()->type == 'admin')
				<div class="row">
					<div class="col-md-12">
						<form class="pull-right" style="display: inline-block; margin: 0 5px;" action="{{ url("/category/$category->id/products/$product->id") }}" method="post">
							{{ csrf_field() }}
							<input type="hidden" name="_method" value="delete">
							<button class="btn btn-danger">Delete</button>
						</form>
						<a class="btn btn-warning pull-right" href="{{ url("/categories/$category->id/products/$product->id/edit") }}">Edit</a>
					</div>
				</div>
			@endif

			<p>
				@if (App::getLocale('en')) {{ isset($product->chemical_description_en) ? $product->chemical_description_en : __('interface.unavailable_data') }}
				@elseif (App::getLocale('es')) {{ isset($product->chemical_description_es) ? $product->chemical_description_es : __('interface.unavailable_data') }}
				@endif
			</p>	

			<div class="row">
				<div class="col-md-4">
					<h3>Mineral:</h3> <p>{{ $product->mineral }}</p>					
				</div>
				<div class="col-md-4">
					<h3>@lang('interface.classification'):</h3> 
					@if (App::getLocale('en')) <p> {{ isset($product->classification_en) ? $product->classification_en : __('interface.unavailable_data') }} </p>
					@elseif (App::getLocale('es')) <p> {{ isset($product->classification_es) ? $product->classification_es : __('interface.unavailable_data') }} </p>
					@endif	
				</div>
				<div class="col-md-4">
					<h3>@lang('interface.family'):</h3> 
					@if (App::getLocale('en')) <p> {{ isset($product->chemical_family_en) ? $product->chemical_family_en : __('interface.unavailable_data') }} </p>
					@elseif (App::getLocale('es')) <p> {{ isset($product->chemical_family_es) ? $product->chemical_family_es : __('interface.unavailable_data') }} </p>
					@endif
				</div>
			</div>

			<h1>@lang('interface.safety_sheets')</h1>
			@if ($product->getSafetySheets($product->id)->count() > 0)
				<div class="sds-container">
					@foreach ($product->getSafetySheets($product->id) as $document)
						<div class="sds">
							<div class="sds__product-info">
								<label for="">@lang('interface.document_name')</label>
								<div class="sds__product-name">{{ isset($document->original_name) ? $document->original_name: $document->documentable->name }}</div>
								<label for="">@lang('interface.document_type')</label>
								<div class="sds__product-type">@lang('interface.safety_sheets')</div>
							</div>
							<a class="sds__download" href="{{ url("/download/$document->id") }}">@lang('interface.download')</a>
						</div>
					@endforeach
				</div>
			@else
				<p>Nothing was found in this section.</p>
			@endif

			<h1>@lang('interface.tech_sheets')</h1>
			@if ($product->getTechSheets($product->id)->count() > 0)
				<div class="sds-container">
					@foreach ($product->getSafetySheets($product->id) as $document)
						<div class="sds">
							<div class="sds__product-info">
								<label for="">@lang('interface.document_name')</label>
								<div class="sds__product-name">{{ isset($document->original_name) ? $document->original_name: $document->documentable->name }}</div>
								<label for="">@lang('interface.document_type')</label>
								<div class="sds__product-type">@lang('interface.tech_sheets')</div>
							</div>
							<a class="sds__download" href="{{ url("/download/$document->id") }}">@lang('interface.download')</a>
						</div>
					@endforeach
				</div>
			@else
				<p>Nothing was found in this section.</p>
			@endif

			<h1>@lang('interface.pictures')</h1>
			@if ($product->pictures->count() > 0)
				<div class="row">
					@foreach ($product->pictures as $picture)
						<div class="col-md-3">
							<img style="width: 100%;" src="{{ Storage::url($picture->path) }}">
						</div>
					@endforeach
				</div>
			@else
				<p>Nothing was found in this section.</p>
			@endif

	    </div>  

@endsection