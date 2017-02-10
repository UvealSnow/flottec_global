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

				<div class="row">
					<div class="col-md-12">
						<a class="btn btn-primary pull-right" href="{{ url("rnd/create") }}">New Paper</a>
					</div>
				</div>
				
				@if ($research->count() > 0)
					<table class="table table-striped">
						<tr>
							<th>Name English</th>
							<th>Name Spanish</th>
							<th>Options</th>
						</tr>
						@foreach ($research as $paper)
							<tr>
								<td>{{ $paper->name_en }}</td>
								<td>{{ $paper->name_es }}</td>
								<td>
									<a class="btn btn-xs btn-warning" href="{{ url("rnd/$paper->id?edit") }}">Edit</a>
									<form style="display: inline-block;" action="{{ url("") }}" method="post">
										{{ csrf_field() }}
										<input type="hidden" name="_method" value="delete">
										<button class="btn btn-xs btn-danger">Delete</button>
									</form>
								</td>
							</tr>
						@endforeach
					</table>
				@else
					<p>No research papers were found.</p>
				@endif

			</div>
		</div>

	</div>
	
@endsection