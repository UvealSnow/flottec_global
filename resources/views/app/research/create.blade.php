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

				<form class="form-horizontal" action="{{ url("/rnd") }}" method="post" enctype="multipart/form-data">
					{{ csrf_field() }}

					<div class="form-group{{ $errors->has('name_en') ? ' has-error' : '' }}">
					    <label for="name_en" class="col-md-4 control-label">Name English</label>

					    <div class="col-md-6">
					        <input id="name_en" type="text" class="form-control" name="name_en" value="{{ old('name_en') }}" required autofocus>

					        @if ($errors->has('name_en'))
					            <span class="help-block">
					                <strong>{{ $errors->first('name_en') }}</strong>
					            </span>
					        @endif
					    </div>
					</div>

					<div class="form-group{{ $errors->has('name_es') ? ' has-error' : '' }}">
					    <label for="name_es" class="col-md-4 control-label">Name Spanish</label>

					    <div class="col-md-6">
					        <input id="name_es" type="text" class="form-control" name="name_es" value="{{ old('name_es') }}" required>

					        @if ($errors->has('name_es'))
					            <span class="help-block">
					                <strong>{{ $errors->first('name_es') }}</strong>
					            </span>
					        @endif
					    </div>
					</div>

					<div class="form-group{{ $errors->has('desc_en') ? ' has-error' : '' }}">
					    <label for="desc_en" class="col-md-4 control-label">Description English</label>

					    <div class="col-md-6">
						    <textarea name="desc_en" class="form-control">{{ old('desc_en') }}</textarea>

					        @if ($errors->has('desc_en'))
					            <span class="help-block">
					                <strong>{{ $errors->first('desc_en') }}</strong>
					            </span>
					        @endif
					    </div>
					</div>

					<div class="form-group{{ $errors->has('desc_es') ? ' has-error' : '' }}">
					    <label for="desc_es" class="col-md-4 control-label">Description Spanish</label>

					    <div class="col-md-6">
						    <textarea name="desc_es" class="form-control">{{ old('desc_es') }}</textarea>

					        @if ($errors->has('desc_es'))
					            <span class="help-block">
					                <strong>{{ $errors->first('desc_es') }}</strong>
					            </span>
					        @endif
					    </div>
					</div>

					<div class="form-group{{ $errors->has('images') ? ' has-error' : '' }}">
					    <label for="images" class="col-md-4 control-label">Pictures</label>

					    <div class="col-md-6">
					        <input id="images" type="file" class="form-control" name="images[]" multiple>

					        @if ($errors->has('images'))
					            <span class="help-block">
					                <strong>{{ $errors->first('images') }}</strong>
					            </span>
					        @endif
					    </div>
					</div>

					<div class="form-group{{ $errors->has('documents') ? ' has-error' : '' }}">
					    <label for="documents" class="col-md-4 control-label">Documents</label>

					    <div class="col-md-6">
					        <input id="documents" type="file" class="form-control" name="documents[]" multiple>

					        @if ($errors->has('documents'))
					            <span class="help-block">
					                <strong>{{ $errors->first('documents') }}</strong>
					            </span>
					        @endif
					    </div>
					</div>

					<div class="form-group">
					    <div class="col-md-6 col-md-offset-4">
					        <button type="submit" class="btn btn-primary">
					            Create
					        </button>
					    </div>
					</div>

				</form>

			</div>
		</div>

	</div>
	
@endsection