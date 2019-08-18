@extends('layout')

@section('content')


<p class="readTitle">{{ $episode->title }}</p>
<p class="readOneBox">{!! nl2br(e($episode->text)) !!}</p>


@endsection