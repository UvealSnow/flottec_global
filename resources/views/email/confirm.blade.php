@extends('layouts.email')

@section('content')

	@if ($pending->locale == 'en')
		<a href="{{ url("/confirm/$pending->uid") }}">Confirm Email</a>
	@else
		<a href="{{ url("/confirm/$pending->uid") }}">Confirmar Email</a>
	@endif
	
@endsection