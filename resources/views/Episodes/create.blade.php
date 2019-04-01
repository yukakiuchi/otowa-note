@extends('layout')

@section('content')


<div class="createTitle">{{ $story->title }}</div>
<div class="createEpisodeForm">
{{ Form::open(['url' => "/stories/$story->id/episode/store", 'method' => 'post']) }}

            <input type="text" name="title" placeholder="タイトルを入れてください" class="createTitles" maxlength="40" required>
            <textarea name="text" placeholder="文章を入れてください" class="createText" cols="158" rows="25" required></textarea>
            <input name="user_id" type="hidden" value=" {{ Auth::user()->id }} ">
            <input type="submit" value="送信" class="episodeSend">

            

{{ Form::close() }}
</div>
@endsection