@extends('layout')

@section('content')

<div class="passwordmainbox">
    
    <div class="passtitle">パスワードリセットフォーム</div>



    {{ Form::open(['url' => "/pass/done", 'method' => 'patch', 'class' => 'resetform']) }}

            <div class="reseterror">パスワードが一致していません</div>
            <div class="emailtitle">登録メールアドレスを入力してください</div>
            <input type="email" name="email" class="emailbox bb" required>
            <div>生年月日　例:1993年6月9日→19930609</div>
            <input type="tel" name="birth" class="birthbox bb" required>
            <div class="pass1">新しいパスワードを設定してください</div>
            <input type="password" name="password" class="passwordreset bb" required>
            <div class="pass1">再度パスワードを入力ください</div>
            <input type="password" class="passwordreset1 bb" required>

            <input type="submit" value="送信" class="passsend">

            

{{ Form::close() }}

</div>

@endsection