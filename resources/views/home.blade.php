@extends('layouts.app')

@section('content')
<div class="card-header">
    @guest
        <h2>Laravel~マッチングアプリ~ いくつかの質問に回答することで他のユーザーとの回答の一致数を知ることができ、自分と近い人を探すことができます。</h2>
    @else
        ようこそ！素敵な出会いを見つけてください！{{ Auth::user()->name }} !!
    @endguest
</div>
<div class="card-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">heroku run php artisan migrate
            {{ session('status') }}
        </div>
    @endif
    <div class="links">
        @guest
            <a href="{{ route('login') }}"><h1>ログイン</h1></a>
            <a href="{{ route('register') }}" disabled="disabled"><h1>登録(現在は休止中)</h1></a>
            
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
