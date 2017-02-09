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
				<h2>Pending user requests</h2>

				@if ($pending->count() > 0)
					<table class="table table-striped table-condensed">
						<tr>
							<th>Name</th>
							<th>Company</th>
							<th>Telephone</th>
							<th>Email</th>
							<th>Options</th>
						</tr>
						@foreach ($pending as $user)
							<tr>
								<td>{{ $user->name }}</td>
								<td>{{ $user->company }}</td>
								<td>{{ $user->telephone }}</td>
								<td>{{ $user->email }}</td>
								<td>
									<form style="display: inline-block;" action="{{ url("/requests/accept/$user->id") }}" method="post">
										{{ csrf_field() }}
										<input type="hidden" name="_method" value="put">
										<button class="btn btn-xs btn-primary">Accept</button>
									</form>
									<form style="display: inline-block;" action="{{ url("/requests/decline/$user->id") }}" method="post">
										{{ csrf_field() }}
										<input type="hidden" name="_method" value="put">
										<button class="btn btn-xs btn-danger">Decline</button>
									</form>
								</td>
							</tr>
						@endforeach 
					</table>
				@else
					<p>No pending requests.</p>
				@endif
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<h2>Declined requests</h2>
				@if ($declined->count() > 0)
					<table class="table table-striped table-condensed">
						<tr>
							<th>Name</th>
							<th>Company</th>
							<th>Telephone</th>
							<th>Email</th>
							<th>Options</th>
						</tr>
						@foreach ($declined as $user)
							<tr>
								<td>{{ $user->name }}</td>
								<td>{{ $user->company }}</td>
								<td>{{ $user->telephone }}</td>
								<td>{{ $user->email }}</td>
								<td>
									<form style="display: inline-block;" action="{{ url("/requests/accept/$user->id") }}" method="post">
										{{ csrf_field() }}
										<input type="hidden" name="_method" value="put">
										<button class="btn btn-xs btn-primary">Accept</button>
									</form>
									<form style="display: inline-block;" action="{{ url("/requests/$user->id") }}" method="post">
										{{ csrf_field() }}
										<input type="hidden" name="_method" value="delete">
										<button class="btn btn-xs btn-danger">Delete</button>
									</form>
									<form style="display: inline-block;" action="{{ url("/blacklist") }}" method="post">
										{{ csrf_field() }}
										<input type="hidden" name="id" value="{{ $user->id }}">
										<button class="btn btn-xs btn-danger">Blacklist</button>
									</form>
								</td>
							</tr>
						@endforeach 
					</table>
				@else
					<p>No declined requests</p>
				@endif

			</div>
		</div>

	</div>

@endsection