@extends('layouts.public')

@section('content')

	    <div class="interface">
			@if (App::getLocale('en')) <h1>{{ $category->name_en }}</h1>
			@elseif (App::getLocale('es')) <h1>{{ $category->name_es }}</h1>
			@endif
			<p>
				Please click on the product your are interested in for further information.
			</p>	

			@if ($products->count() > 0)
				<div class="categories-container">
					@foreach ($products->sortBy('id') as $product)
						<a class="category" href="{{ url("products/$category->uri/$product->uri") }}">
							<div class="category__image">
								@if ($product->picture)
									<img src="{{ Storage::url($product->picture->path) }}" alt="">
								@else
									<img src="https://images.pexels.com/photos/290678/pexels-photo-290678.jpeg?w=1260&h=750&auto=compress&cs=tinysrgb" alt="">
								@endif
							</div>
							<div class="category__title">
								{{ $product->name }}
							</div>
						</a>
					@endforeach
				</div>
			@else
				<p>We could not find any documents</p>
			@endif
	    </div>  

@endsection