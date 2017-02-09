@extends('layouts.email')

@section('content')

	@if ($pending->locale == 'en')
		<p>Your account has been declined. If you have any questions please confirm with out admin at <a href="mailto:admin@flottec.com?Subject=Account%20Declined">this email</a>.</p>
	@else
		<p>Tu solicitus ha sido declinada. Si tienes dudas por favor contactanos en <a href="mailto:admin@flottec.com?Subject=Account%20Declined">este correo</a>.</p>
	@endif
	
@endsection