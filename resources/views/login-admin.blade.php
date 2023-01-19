@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('main')
<div class="login-container">
    <div class="form-container">
        <div class="ui two column grid">
            <div class="column left-column">
                <img src="{{ asset('images/login/adminLogin.png') }}" alt="doctorVectLogin" srcset="">
            </div>
            <div class="column right-column">
                <h1>Masuk Admin</h1>
                <form class="ui large form" action="{{ route('login-attempt-admin') }}" method="post">
                    @csrf
                    <div class="field">
                        <p>Username</p>
                        <input type="text" name="email" placeholder="Masukkan username anda">
                    </div>
                    <div class="field">
                        <p>Password</p>
                        <input type="password" name="password" placeholder="Masukkan password anda">
                    </div>
                    <button class="ui fluid large blue submit button" type="submit" onclick="location.href='{{ route('admin.index') }}'">Lanjutkan</button>
                    <div class="login-admin">
                        <a href="{{ route('login') }}">Masuk sebagai institusi</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection