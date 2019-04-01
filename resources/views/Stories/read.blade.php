@extends('layout')

@section('content')

<div class="readBox">



	@foreach($episode as $episodes)


			
				<div class="readTitle">{{ $episodes->title }}</div>
				<div class="readOneBox">{!! nl2br(e($episodes->text)) !!}</div>

		
	@endforeach

	<div class="render">{{ $episode->render() }}</div>

	<a href="/" class="readTop">トップページへ</a>
	

</div>



@endsection