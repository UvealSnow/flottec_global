@extends('layouts.app')

@section('content')

	<div class="container">

		@if ($errors->count() > 0)
			<div class="alert alert-danger">
				@foreach ($errors->all() as $e)
					<p>- {{ $e }}</p>
				@endforeach
			</div>
		@endif

		<div class="row">
			<div class="col-md-12">
				
				<form class="form-horizontal" action="{{ url("/categories/$category_id/products/$product->id") }}" method="post" enctype="multipart/form-data">
					{{ csrf_field() }}
					<input type="hidden" name="_method" value="put">

					<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
					    <label for="name" class="col-md-4 control-label">Product name</label>

					    <div class="col-md-6">
					        <input id="name" type="text" class="form-control" name="name" value="{{ $product->name }}" required autofocus>

					        @if ($errors->has('name'))
					            <span class="help-block">
					                <strong>{{ $errors->first('name') }}</strong>
					            </span>
					        @endif
					    </div>
					</div>

					<div class="form-group{{ $errors->has('mineral') ? ' has-error' : '' }}">
					    <label for="mineral" class="col-md-4 control-label">Mineral</label>

					    <div class="col-md-6">
					        <input id="mineral" type="text" class="form-control" name="mineral" value="{{ $product->mineral }}" required>

					        @if ($errors->has('mineral'))
					            <span class="help-block">
					                <strong>{{ $errors->first('mineral') }}</strong>
					            </span>
					        @endif
					    </div>
					</div>

					<div class="form-group{{ $errors->has('classification_en') ? ' has-error' : '' }}">
					    <label for="classification_en" class="col-md-4 control-label">Classification English</label>

					    <div class="col-md-6">
					        <input id="classification_en" type="text" class="form-control" name="classification_en" value="{{ $product->classification_en }}" required>

					        @if ($errors->has('classification_en'))
					            <span class="help-block">
					                <strong>{{ $errors->first('classification_en') }}</strong>
					            </span>
					        @endif
					    </div>
					</div>

					<div class="form-group{{ $errors->has('classification_es') ? ' has-error' : '' }}">
					    <label for="classification_es" class="col-md-4 control-label">Classification Spanish</label>

					    <div class="col-md-6">
					        <input id="classification_es" type="text" class="form-control" name="classification_es" value="{{ $product->classification_es }}" required>

					        @if ($errors->has('classification_es'))
					            <span class="help-block">
					                <strong>{{ $errors->first('classification_es') }}</strong>
					            </span>
					        @endif
					    </div>
					</div>

					<div class="form-group{{ $errors->has('chemical_description_en') ? ' has-error' : '' }}">
					    <label for="chemical_description_en" class="col-md-4 control-label">Chemical Description Eng</label>

					    <div class="col-md-6">
						    <textarea class="form-control" name="chemical_description_en">{{ $product->chemical_description_en }}</textarea>

					        @if ($errors->has('chemical_description_en'))
					            <span class="help-block">
					                <strong>{{ $errors->first('chemical_description_en') }}</strong>
					            </span>
					        @endif
					    </div>
					</div>

					<div class="form-group{{ $errors->has('chemical_description_es') ? ' has-error' : '' }}">
					    <label for="chemical_description_es" class="col-md-4 control-label">Chemical Description Es</label>

					    <div class="col-md-6">
						    <textarea class="form-control" name="chemical_description_es">{{ $product->chemical_description_es }}</textarea>

					        @if ($errors->has('chemical_description_es'))
					            <span class="help-block">
					                <strong>{{ $errors->first('chemical_description_es') }}</strong>
					            </span>
					        @endif
					    </div>
					</div>

					<div class="form-group{{ $errors->has('chemical_family_en') ? ' has-error' : '' }}">
					    <label for="chemical_family_en" class="col-md-4 control-label">Chemical Family English</label>

					    <div class="col-md-6">
					        <input id="chemical_family_en" type="text" class="form-control" name="chemical_family_en" value="{{ $product->chemical_family_en }}" required>

					        @if ($errors->has('chemical_family_en'))
					            <span class="help-block">
					                <strong>{{ $errors->first('chemical_family_en') }}</strong>
					            </span>
					        @endif
					    </div>
					</div>

					<div class="form-group{{ $errors->has('chemical_family_es') ? ' has-error' : '' }}">
					    <label for="chemical_family_es" class="col-md-4 control-label">Chemical Family Spanish</label>

					    <div class="col-md-6">
					        <input id="chemical_family_es" type="text" class="form-control" name="chemical_family_es" value="{{ $product->chemical_family_es }}" required>

					        @if ($errors->has('chemical_family_es'))
					            <span class="help-block">
					                <strong>{{ $errors->first('chemical_family_es') }}</strong>
					            </span>
					        @endif
					    </div>
					</div>

					<div class="form-group{{ $errors->has('safety_sheets') ? ' has-error' : '' }}">
					    <label for="safety_sheets" class="col-md-4 control-label">Safety Sheets</label>

					    <div class="col-md-6">
					        <input id="safety_sheets" type="file" class="form-control" name="safety_sheets[]" value="{{ $product->safety_sheets }}" multiple>

					        @if ($errors->has('safety_sheets'))
					            <span class="help-block">
					                <strong>{{ $errors->first('safety_sheets') }}</strong>
					            </span>
					        @endif
					    </div>
					</div>

					<div class="form-group{{ $errors->has('tech_sheets') ? ' has-error' : '' }}">
					    <label for="tech_sheets" class="col-md-4 control-label">Tech Sheets</label>

					    <div class="col-md-6">
					        <input id="tech_sheets" type="file" class="form-control" name="tech_sheets[]" value="{{ $product->tech_sheets }}" multiple>

					        @if ($errors->has('tech_sheets'))
					            <span class="help-block">
					                <strong>{{ $errors->first('tech_sheets') }}</strong>
					            </span>
					        @endif
					    </div>
					</div>

					<div class="form-group{{ $errors->has('images') ? ' has-error' : '' }}">
					    <label for="images" class="col-md-4 control-label">Images</label>

					    <div class="col-md-6">
					        <input id="images" type="file" class="form-control" name="images[]" value="{{ $product->images }}" multiple>

					        @if ($errors->has('images'))
					            <span class="help-block">
					                <strong>{{ $errors->first('images') }}</strong>
					            </span>
					        @endif
					    </div>
					</div>

					<div class="form-group">
					    <div class="col-md-6 col-md-offset-4">
					        <button type="submit" class="btn btn-primary">
					            Register
					        </button>
					    </div>
					</div>

				</form>

			</div>
		</div>
	</div>

@endsection