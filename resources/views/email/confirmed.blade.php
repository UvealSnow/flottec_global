@extends('layouts.email')

@section('content')

	@if ($pending->locale == 'en')
		<p>Your email account has been confirmed. We are currently reviewing your application, please expect an answer shortly.</p>
	@else
		<p>Tu correo ha sido confirmado. Estamos revisando tu solicitud, nos pondremos en contacto pronto.</p>
	@endif
	
@endsection