@extends('layouts.public')

@section('content')

    <div class="interface">
		<h1>Product Categories</h1>
		<p>
			Flottec has specialty and commodity chemicals to meet your needs. Please click on the category of products your are interested in for further information.
		</p>	

		@if ($categories->count() > 0)
			<div class="categories-container">
				@foreach ($categories as $category)
					<a class="category" href="{{ url("products/$category->uri") }}">
						<div class="category__image">
							@if ($category->picture)
								<img src="{{ Storage::url($category->picture->path) }}" alt="">
							@else
								<img src="https://images.pexels.com/photos/290678/pexels-photo-290678.jpeg?w=1260&h=750&auto=compress&cs=tinysrgb" alt="">
							@endif
						</div>
						<div class="category__title">
							@if (App::isLocale('en')) {{ $category->name_en }}
							@elseif (App::isLocale('es')) {{ $category->name_es }}
							@endif
						</div>
					</a>
				@endforeach
			</div>
		@else
			<p>We could not find any documents</p>
		@endif
    </div>  

@endsection