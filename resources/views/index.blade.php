@extends('layouts.index')

@section('title', '首頁')
@section('home', 'active')

@section('nav')
    @parent

    <ul class="navbar-nav">
        <li class="nav-item @yield('near')">
            <a href="{{ route('near') }}" class="nav-link">附近景點</a>
        </li>
        <li class="nav-item @yield('daily')">
            <a href="{{ route('daily') }}" class="nav-link">每日旅遊</a>
        </li>
        <li class="nav-item @yield('story')">
            <a href="{{ route('story.index') }}" class="nav-link">故事圖鑑</a>
        </li>
    </ul>
@endsection


@section('content')
    <section class="content-header">
        <div class="home-card">
            <div class="bg bg-blur"></div>

            <div class="home-card2">
                <header class="text-center text-white">
                    <div class="content-front">
                        <h2>將各地細小的故事串連起來，編織出屬於台灣的故事網。</h2>
                    </div>
                    <div class="content-btn">
                        <a href="{{ route('near') }}" class="btn btn-block btn-outline-light btn-lg">來趟細旅遊</a>
                    </div>
                </header>
            </div>
        </div>
    </section>
@endsection
