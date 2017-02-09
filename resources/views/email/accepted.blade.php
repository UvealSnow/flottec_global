@extends('layouts.email')

@section('content')

	@if ($pending->locale == 'en')
		<p>Your account has been confirmed. You can now login!</p>
	@else
		<p>Tu cuenta ha sido confirmada. Ya puedes iniciar sesion.</p>
	@endif
	
@endsection