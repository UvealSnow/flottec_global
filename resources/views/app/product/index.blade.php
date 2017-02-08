@extends('layouts.app')

@section('content')

	<div class="container">

		@if (session('success'))
			<div class="alert alert-success">
				<p>{{ session('success') }}</p>
			</div>
		@endif
		
	</div>


@endsection