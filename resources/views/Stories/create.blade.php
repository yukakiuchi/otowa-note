@extends('layout')

@section('content')

<div class="createStoryForm">
	<br>
{{ Form::open(['url' => "/stories/store", 'method' => 'post']) }}
			<div class="Snewtitle">新規小説作成</div>

			<div class="Sbox">

				<input type="text" name="title" placeholder="タイトルを入れてください(40文字)" maxlength="40" required class="Stitle">
				<textarea name="text" placeholder="紹介文を入力してください(100文字)" cols="80" rows="10" required class="	Sintroduction" maxlength="100"></textarea>
				<input type="radio" name="status" value="0" checked="checked" class="publish"><label class="goo">公開しない</label>
				<input type="radio" name="status" value="1" class="private"><label class="noo">公開する</label><br>
				<input type="hidden" name="user_id" value="{{ Auth::user()->id }}"> 
	            <input type="submit" value="送信" class="Ssend">
            </div>

{{ Form::close() }}

</div>
@endsection