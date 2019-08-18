@extends('layout')

@section('content')

<div class="usersBox">
	

	@foreach( $users as $user)


	<a href="/users/{{ $user->id }}" class="oneUser">
		
		<div class="Userpic" style="background-image: url(/images/{{ $user->image }});"></div><div class="UserName">{{ $user->name }}</div>


	</a>




	@endforeach



</div>

@endsection