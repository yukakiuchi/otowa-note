@extends('layout')

@section('content')

<div class="episodesZone">

	<a href="/stories/{{ $story->id }}/read" class="episodesTitle"><div>エピソード一覧</div></a>

	@if( $story->category == 1 || (Auth::check() && $story->user_id == Auth::user()->id))
	<a href="/stories/{{ $story->id }}/episode/create" class="addEpisodeBox"><div class="addEpisode">+</div></a>
	@endif


	<div class="episodeBox">

	@foreach($episodes as $episode)

	<div class="oneBox">
	<a href="/episodes/show/{{$episode->id}}" class="episodeTitle">{{ $episode->title}}</p></a>


	@if( Auth::check() && Auth::user()->id == $episode->user_id)
	<p class="episodeText1">{{ $episode->text }}</p>
	<a href="/episodes/{{ $episode->id }}/edit" class="episodeEdit"><div>編集</div></a>
	<a href="/episodes/{{ $episode->id }}/delete?url={{ Request::path() }}" class="episodeDelete" id="alertButton"><div>削除</div></a>

	@else
	<p class="episodeText">{{ $episode->text }}</p>

	@endif

	</div>


	@endforeach

	</div>

	<div>{{ $episodes->render() }}</div>

</div>

<div class="subZone">
	<p class="settings">表紙設定</p>

	<div class="imageSetting" style="background-image: url(/storiesPictures/{{ $story->image }});">


		@if(Auth::check() && Auth::user()->id == $story->user_id)
		<div class="changepix">画像変更</div>
		@endif

	</div>

		<div class="imageSettingForm">
			{{ Form::open(['url' => "/stories/update/image", 'method' => 'patch', 'files' => 'true', 'enctype' => 'multipart/form-data']) }}

				<input type="file" name="image" class="imageEdit">
				<input type="hidden" name="url" value="{{ Request::path() }}">
				<input type="hidden" name="story_id" value="{{ $story->id }}">
	            <input type="submit" value="送信" class="imageSend">

			{{ Form::close() }}
		</div>

		<div class="introductionSetting">{{ $story->introduction}}</div>


		@if(Auth::check() && Auth::user()->id == $story->user_id)
			<div href="" class="introductionEditButton">編集</div>
		@endif



	<div class="introductionEdit">
	{{ Form::open(['url' => "/stories/$story->id/introductionEdit", 'method' => 'patch']) }}

            <textarea name="introduction" cols="30" rows="6" maxlength="100" class="introductionFillBox" required>{{ $story->introduction }}</textarea>
	        <input type="hidden" name="url" value="{{ Request::path() }}">
	</div>

	        <input type="submit" value="送信" class="introductionSendButton">

	{{ Form::close() }}


	@if(Auth::check() && Auth::user()->id == $story->user_id)
	<div class="click">・    ・    ・</div>
	<a href="/stories/{{ $story->id}}/delete" class="deleteStory">作品を削除</a>
	@endif

</div>
@endsection
