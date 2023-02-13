@extends('layouts.app')

@section('content')
<div class="card-header">
    @guest
        Laravel
    @else
        Hello, {{ Auth::user()->name }} !!
    @endguest
</div>
<div class="card-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="links">
        @guest
            <a href="{{ route('login') }}"><h1>ログイン</h1></a>
            <a href="{{ route('register') }}"><h1>登録</h1></a>
            <a href="">検索</a>
        @else
            <a href="home/edit"><h1>ユーザー情報編集</h1></a>
            <a href="home/search"><h1>ユーザー検索</h1></a>
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
                <h1>ログアウト</h1>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @endguest
    </div>
</div>
@endsection
