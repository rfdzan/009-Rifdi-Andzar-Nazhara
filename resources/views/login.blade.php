@extends('layout.default')
@section('content')
<link rel="stylesheet" href="{{asset('css/registration/registration.css')}}">
<section class="registration-section">
    <div class="registration-container">
        <div class="form-div">
            <h1>Login</h1>
            <form action="{{route('verify')}}" method="POST">
                @csrf
                <div class="username">
                    <label for="username" class="form-label">Username: </label>
                    <input type="text" value="" name="username" class="form-control">
                    <p class=user-exist style="color: red">{{$userExist}}</p>
                </div>
                <div class="password">
                    <label for="password" class="form-label">Password: </label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="login-button">
                    <button name="submit" type="submit" class="btn btn-primary">Login</button>
                </div>
                <p style="color: white">or <a href="{{route('registration')}}">register</a></p>
            </form>
        </div>
    </div>
</section>
@endsection