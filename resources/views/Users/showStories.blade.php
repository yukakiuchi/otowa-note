@extends('layout')

@section('content')
<div class="postQ">
	<div class="topSakuQ">作品一覧</div>


<!-- 	@foreach( $allStory as $allStory)

		@if($allStory->category == 1)

			<a href="/stories/{{ $allStory->id }}/show" class="storiesLinkQ">

				<div class="topStoriesQ" style="background-image: url(/storiesPictures/{{ $allStory->image }});">

					<div class="iyayoQ">
						<p class="topTitleQ">{{ $allStory->title }}</p>
						<p class="topIntroductionQ">{{ $allStory->introduction }}</p>
					</div>

				</div>
			</a>

		@endif

	@endforeach -->



	@foreach($story as $story)

	<a href="/stories/{{ $story->id }}/show" class="storiesLinkQ">

		<div class="topStoriesQ" style="background-image: url(/storiesPictures/{{ $story->image }});">

			<div class="iyayoQ">
				<p class="topTitleQ">{{ $story->title }}</p>
				<p class="topIntroductionQ">{{ $story->introduction }}</p>
			</div>

		</div>
	</a>

	@endforeach


	@if(Auth::check() && $myuser->id == Auth::user()->id)
	<a href="/stories/create" class="addButtonQ">
	<div class="plusQ">
		+
	</div>
	<div class="addMoreQ">新規作成</div>
	</a>

	@endif
</div>




<div class="subZone">
	<p class="settings">プロフィール設定</p>


	<div class="imageSetting" style="background-image: url(/images/{{ $myuser->image}})">
		@if( Auth::check() && Auth::user()->id == $myuser->id)
			<div class="changepix">画像変更</div>
		@endif
	</div>

		<div class="imageSettingForm">
			{{ Form::open(['url' => "/user/update/image", 'method' => 'patch', 'files' => 'true', 'enctype' => 'multipart/form-data']) }}

				<input type="file" name="image" class="imageEdit">
				<input type="hidden" name="url" value="{{ Request::path() }}">
				<input type="hidden" name="user_id" value="{{ $myuser->id }}">
	            <input type="submit" value="送信" class="imageSend">

			{{ Form::close() }}
		</div>




	<div class="proNameBox">
		<div class="proName">名前

			@if( Auth::check() && Auth::user()->id == $myuser->id)
			<i class="fas fa-pencil-alt penName"></i>
			@endif

		</div>


		<div class="proName1">{{ $myuser->name }}</div>
	</div>

	<div class="FormProNameBox">
	{{ Form::open(['url' => "/users/edit/name", 'method' => 'patch']) }}

				<div class="proName">名前</div>
				<input type="text" name="name" class="editUserName" value="{{ $myuser->name }}">
				<input type="hidden" name="url" value="{{ Request::path() }}">
				<input type="hidden" name="user_id" value="{{ $myuser->id }}">
	            <input type="submit" value="送信" class="userNameSend">

	{{ Form::close() }}
	</div>

	<div class="proEmailBox">
		<div class="proEmail">メアド

			@if( Auth::check() && Auth::user()->id == $myuser->id)
			<i class="fas fa-pencil-alt penEmail"></i>
			@endif
		</div>
		<div class="proEmail1">{{ $myuser->email }}</div>
	</div>

	<div class="FormProEmailBox">
	{{ Form::open(['url' => "/users/edit/email", 'method' => 'patch']) }}

				<div class="proName">メアド</div>
				<input type="email" name="email" class="editUserName" value="{{ $myuser->email }}">
				<input type="hidden" name="url" value="{{ Request::path() }}">
				<input type="hidden" name="user_id" value="{{ $myuser->id }}">
	            <input type="submit" value="送信" class="userNameSend">

	{{ Form::close() }}
	</div>

</div>



@endsection
