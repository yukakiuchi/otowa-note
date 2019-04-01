@extends('layout')

@section('content')
<div class="contents row">
    <h2 class="loginlogin">登録</h2>

    {{ Form::open(['id'=>'my-form']) }}


    <div class="error">パスワードが一致していません</div>

        <div class="field">
            <label>name<label><br>
            <input type='text' name="name" autofocus="autofocus" required>
        </div>

        <div class="field">
            <label>Email</label><br>
            <input type="email" name="email" autocomplete="off" required>
        </div>

        <div class="field">
            <label>DOB(生年月日)</label><br>
            <input type="tel" name="birth" autocomplete="off" placeholder="例1992年3月9日→19920309" pattern="^[0-9]{8,8}$" required>
        </div>


        <div class="field">
            <label>Password</label>
            @if (false)
                <em>(6 characters minimum)</em>
            @endif
            <br />
            <input type="password" name="password" autocomplete="off" class="passwords" required>
        </div>

        <div class="field">
            <label>password confirmation</label><br>
            <input type="password" name="password_confirmation" autocomplete="off" id="password" class="passwordConfirm" required>
        </div>

        <div class="actions">
            <input type="submit" value="登録" class="loginloginButton loginHover signButton" id="passwordConfirm" required>
        </div>
    {{ Form::close() }}
</div>
@endsection
