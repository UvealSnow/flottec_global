@extends('layouts.public')

@section('content')

    <div class="interface">
		
    	<h1>Research &<br>Development</h1>
		<p>
			Here you will be able to find the latest content in Flottec’s site.
		</p>	

		<div class="post-previews-container">
			@if ($research->count() > 0)
				<div class="post-preview">
					<div class="preview__image">
						@if ($research->picture)
							<img src="{{ Storage::url($research->picture->path) }}" alt="">
						@else
							<img src="https://images.pexels.com/photos/39553/industry-sunrise-clouds-fog-39553.jpeg?w=1260&h=750&auto=compress&cs=tinysrgb" alt="">
						@endif
					</div>
					<div class="preview__info">
						
						<div class="preview__title">
							@if (App::isLocale('en'))
							@elseif (App::isLocale('es'))
							@endif
						</div>
						<div class="preview__description">
							@if (App::isLocale('en'))
							@elseif (App::isLocale('es'))
							@endif
						</div>
						<a href="" class="preview__link">@lang('messages.request_research')</a>
					</div>
				</div>
			@else
				<p>@lang('messages.no_rnd')</p>
			@endif
		</div>
    </div>


@endsection