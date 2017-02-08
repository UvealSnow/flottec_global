@extends('layouts.public')

@section('content')

	<h1>Select language</h1>

	<div class="row">
		<div class="col-md-6">
			<a href="{{ url("/lang/en") }}">Go to Flottec USA</a>
		</div>
		<div class="col-md-6">
			<a href="{{ url("/lang/es") }}">Ir a Flottec México</a>
		</div>
	</div>

@endsection