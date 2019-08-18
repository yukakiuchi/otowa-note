@extends('layout')

@section('content')

<p class="resetdone">⬇︎⬇︎パスワードを以下のように変更しました⬇︎⬇︎</p>

<p class="resetdones">{{ $password }}</p>

<p class="warning">⬆︎⬆︎次回は忘れないようメモを取ってください⬆︎⬆︎</p>

<a href="/login" class="storegotop"><div>ログイン</div></a>

@endsection