@extends('layout')

@section('content')
<div class="contents row">
    <h2 class="loginlogin">ログイン画面</h2>

    {{ Form::open() }}

                @foreach ($errors->all() as $error)
                  <div class="loginerror">{{ $error }}</div>
                @endforeach
    
        <div class="field">
            <label>Email</label><br>
            <input type="email" name="email" autofocus="autofocus" class="ddd">
        </div>

        <div class="field">
            <label>Password</label><br>
            <input type="password" name="password" autocomplete="off">
        </div>


        <div class="actions">
            <input type="submit" value="ログイン" class="loginloginButton loginHover">
        </div>
    {{ Form::close() }}

    <div class="touroku">---------------------まだ登録していない方は---------------------</div>
    <a href="/register" class="tourokuButton loginHover">新規登録</a>


    <a href="/pass/reset/menu" class="passwordReset">パスワードを忘れた</a>


</div>

@endsection