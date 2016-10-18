<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		@if ($user->locale == 'en')
			<h1>Hello {{ $user->name }}</h1>
			<p>We have created your account but a problem has emerged.</p>
			<p>You will need to contact an administration at <a href="mailto:admin@flottec.com">admin@flottec.com</a> to process your registration.</p>
		@else
			<h1>Hola {{ $user->name }}</h1>
			<p>Hemos creado tu cuenta pero ha surgido un problema.</p>
			<p>Tendrás que contactar a un administrador <a href="mailto:admin@flottec.com">admin@flottec.com</a> para que procese tu registro.</p>
		@endif
	</body>
</html>