@extends('layout')

@section('content')

<div class="storeConfirmed">以下の内容で投稿しました！</div>

<div class="storeChoose">
<a href="/"><div>トップページ</div></a>
<a href="/stories/{{ $story_id }}/read"><div>エピソードを読む</div></a>	
</div>
<div class="line"></div>

<div class="storeText">{!! nl2br(e($text)) !!}</div>

@endsection