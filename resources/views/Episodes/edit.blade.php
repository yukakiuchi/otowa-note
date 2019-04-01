@extends('layout')

@section('content')


<div class="createTitle">{{ $story->title }}</div>
<div class="createEpisodeForm">
{{ Form::open(['url' => "/episodes/$episode->id", 'method' => 'PATCH']) }}

            <input type="text" name="title" placeholder="タイトルを編集してください" class="createTitles" maxlength="40" required value="{{ $episode->title}}">
            <textarea name="text" placeholder="文章を編集してください" class="createText" cols="158" rows="25" required>{{ $episode->text}}</textarea>
            <input type="hidden" name="story_id" value="{{ $story->id }}">
            <input type="submit" value="送信" class="episodeSend">

{{ Form::close() }}
</div>
@endsection