@extends('layout')

@section('content')
<div class="post">

	<div class="topSaku">作品一覧</div>

	@foreach($story as $story)

		@if($story->category == 1)

			<a href="/stories/{{ $story->id }}/show" class="storiesLink">
				
				<div class="topStories" style="background-image: url(/storiesPictures/{{ $story->image }});">
			
					<div class="iyayo">
						<p class="topTitle">{{ $story->title }}</p>
						<p class="topIntroduction">{{ $story->introduction }}</p>
					</div>
		
				</div>
			</a>
	
		@endif
	@endforeach

</div>


<!-- ---------------------右の範囲------------------------  -->

	<div class="information">
	<p class="new">最新の個人投稿</p>

	<a href="/show/alluser" class="yuza"><i class="far fa-address-book"></i>  ユーザー一覧へ</a>

	@foreach( $episode as $episode)

@if($episode->story->status == 1)

	<a href="/episodes/show/{{$episode->id}}" class="informationBox">

		<div class="informationName">{{ $episode->user->name }}</div>
		<div class="informationImage" style="background-image: url(/images/{{ $episode->user->image }});"></div>
		<div class="informationText">{{ $episode->text }}</div>

	</a>

@endif

	@endforeach




	</div>

@endsection