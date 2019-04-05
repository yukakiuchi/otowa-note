@extends('layout')

@section('content')

<div class="usersBox">
	
@if(Auth::check() && Auth::user()->id == 1)

	@foreach( $users as $user)

	<div class="oneUser">
	<a href="/users/{{ $user->id }}" class="lolo">
		
		<div class="Userpic" style="background-image: url(/images/{{ $user->image }});"></div><div class="UserName">{{ $user->name }}</div>
	</a>

	@if(((Auth::check() && Auth::user()->id == 1) && $user->deleted_at == null) && $user->id != 1)

		<a href="/user/deledele/{{ $user->id }}" class="lolo">ユーザー削除</a>
	
	@endif


	@if((Auth::check() && Auth::user()->id == 1) && $user->deleted_at != null)

		<a href="/live/again/{{ $user->id }}" class="lolo">復活</a>

	@endif
	</div>
	
		@endforeach

@else

	@foreach( $userss as $userz)

	<div class="oneUser">
	<a href="/users/{{ $userz->id }}" class="lolo">
		
		<div class="Userpic" style="background-image: url(/images/{{ $userz->image }});"></div><div class="UserName">{{ $userz->name }}</div>
	</a>
	</div>
		@endforeach


@endif






@endsection