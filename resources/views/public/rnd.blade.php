@extends('layouts.public')

@section('content')

    <div class="interface">
		
    	<h1>Research &<br>Development</h1>
		<p>
			Here you will be able to find the latest content in Flottec’s site.
		</p>	

		<div class="post-previews-container">
			@if ($research->count() > 0)
				@foreach ($research as $paper)
					<div class="post-preview">
						<div class="preview__image">
							@if ($paper->pictures->count() > 0 && isset($paper->pictures[0]))
								<img src="{{ Storage::url($paper->pictures[0]->path) }}" alt="">
							@else
								<img src="https://images.pexels.com/photos/39553/industry-sunrise-clouds-fog-39553.jpeg?w=1260&h=750&auto=compress&cs=tinysrgb" alt="">
							@endif
						</div>
						<div class="preview__info">
							
							<div class="preview__title">
								@if (App::isLocale('en')) {{ $paper->name_en }}
								@elseif (App::isLocale('es')) {{ $paper->name_es }}
								@endif
							</div>
							<div class="preview__description">
								@if (App::isLocale('en')) {{ $paper->desc_en }}
								@elseif (App::isLocale('es')) {{ $paper->desc_es }}
								@endif
							</div>
							<a href="mailto:service@flottec.com" class="preview__link">@lang('messages.request_research')</a>
						</div>
					</div>
				@endforeach
			@else
				<p>@lang('messages.no_rnd')</p>
			@endif
		</div>
    </div>


@endsection