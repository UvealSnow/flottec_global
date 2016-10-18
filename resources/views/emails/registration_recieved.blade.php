<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		@if ($user->locale == 'en')
			<h1>Hello {{ $user->name }}</h1>
			<p>We have created your account and you need only activate it to be a permanent member of our webpage.</p>
			<p>Please follow the link below to activate your account.</p>
			<p><a href="{{ url("/activate/$user->remember_token") }}">Activate account</a></p>
			<p>Please note that this link will expire in an hour.</p>
		@else
			<h1>Hola {{ $user->name }}</h1>
			<p>Hemos creado tu cuenta y ahora sólo necesitas activarla para ser un miembro permanente de nuestra página web.</p>
			<p>Por favor sigue el link de abajo para activar tu cuenta.</p>
			<p><a href="{{ url("/activate/$user->remember_token") }}">Activar cuenta</a></p>
			<p>Toma encuenta que esta URL expirará en una hora.</p>
		@endif
	</body>
</html>