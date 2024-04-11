@extends('layout.layout')
@section('view-main')
    <div id="userinfo">
        @auth
            Chào {{ Auth::user()->user_name }}!
            <a href="/thoat">Thoát</a>
        @endauth

        @guest
            Chào bạn!
            <a href="/dangnhap">Đăng nhập</a>
        @endguest
    </div>

    @if (session('message'))
        <div class="alert alert-success" role="alert">
            <h1>{{ session('message') }}</h1>
        </div>
    @endif
@endsection
