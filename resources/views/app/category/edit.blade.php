@extends('layouts.app')

@section('content')

	<div class="container">

		@if ($errors->count() > 0)
			<div class="alert alert-danger">
				@foreach ($errors as $e)
					<p>- {{ $e }}</p>
				@endforeach
			</div>
		@endif

		<div class="row">
			<div class="col-md-12">
				
				<form class="form-horizontal" action="{{ url("/categories/$category->id") }}" method="post" enctype="multipart/form-data">
					{{ csrf_field() }}
					<input type="hidden" name="_method" value="put">

					<div class="form-group{{ $errors->has('name_en') ? ' has-error' : '' }}">
					    <label for="name_en" class="col-md-4 control-label">English Name</label>

					    <div class="col-md-6">
					        <input id="name_en" type="text" class="form-control" name="name_en" value="{{ $category->name_en }}" required>

					        @if ($errors->has('name_en'))
					            <span class="help-block">
					                <strong>{{ $errors->first('name_en') }}</strong>
					            </span>
					        @endif
					    </div>
					</div>

					<div class="form-group{{ $errors->has('name_es') ? ' has-error' : '' }}">
					    <label for="name_es" class="col-md-4 control-label">Spanish Name</label>

					    <div class="col-md-6">
					        <input id="name_es" type="text" class="form-control" name="name_es" value="{{ $category->name_es }}" required>

					        @if ($errors->has('name_es'))
					            <span class="help-block">
					                <strong>{{ $errors->first('name_es') }}</strong>
					            </span>
					        @endif
					    </div>
					</div>

					@if ($category->picture)
						<div class="row">
							<div class="col-md-1 col-md-offset-4">
								<a href="{{ url(Storage::url($category->picture->path)) }}">
									<img style="width: 100%;" src="{{ Storage::url($category->picture->path) }}">
								</a>
							</div>
						</div>
						<br>
					@endif

					<div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
					    <label for="image" class="col-md-4 control-label">Image</label>

					    <div class="col-md-6">
					        <input id="image" type="file" class="form-control" name="image" value="{{ old('image') }}">

					        @if ($errors->has('image'))
					            <span class="help-block">
					                <strong>{{ $errors->first('image') }}</strong>
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