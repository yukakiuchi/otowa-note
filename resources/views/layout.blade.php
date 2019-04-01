<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>WOTOWA-NOTE</title>
	<link rel="stylesheet" href="/css/otowa.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.0.10/font-awesome-animation.css" type="text/css" media="all" />
<!-- 	<link rel="stylesheet" href="/jspt/jquery.confirm/jquery.confirm.css" type="text/css" /> -->
	<script src="{{asset('jspt/jquery-3.3.1.js')}}"></script>
	<script src="{{asset('jspt/wotowa.js')}}"></script>
	<script src="{{asset('jspt/autosize.js')}}"></script>
	<script src="{{asset('jspt/autosize.min.js')}}"></script>
	<!-- <script type="text/javascript" src="{{asset('jspt/jquery.confirm/jquery.confirm..js')}}" charset="utf-8"></script> -->

</head>
<body>
<div id="wrapper">
<!-- ヘッダー -->
	<header>
		<div class="gogo">
		
			<a href="/" class="faa-parent animated-hover headAll"><i class="fas fa-dove faa-shake headIcon"></i><div class="headName">WOTOWA-NOTE</div>
			</a>
		</div>

		@if (Auth::check())
  		
  		<a href="/users/{{Auth::user()->id}}" class="loginName"><i class="fas fa-egg NameEgg"></i>{{ Auth::user()->name }}さん</a>

		<a href="/logout" class="logoutbutton"><i class="fas fa-egg egg"></i>ログアウト</a>


		@else
		<a href="/login" class="loginbutton"><i class="fas fa-egg egg"></i>ログイン</a>
		
		@endif


		
	</header>


<div class="basic">
	



	@yield('content')






</div>




<!-- フッター -->
	<footer>サイト管理人　垣内　優</footer>

</div>

</body>

</html>