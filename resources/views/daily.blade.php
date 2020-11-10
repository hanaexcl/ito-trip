@extends('layouts.index')

@section('title', '每日旅遊')
@section('daily', 'active')

@section('nav')
    @parent

    <ul class="navbar-nav">
        <li class="nav-item @yield('near')">
            <a href="{{ route('near') }}" class="nav-link">
                附近景點
            </a>
        </li>
        <li class="nav-item @yield('daily')">
            <a href="{{ route('daily') }}" class="nav-link">
                <i class="ea ea-reman"></i> 每日旅遊
            </a>
        </li>
        <li class="nav-item @yield('story')">
            <a href="{{ route('story.index') }}" class="nav-link">
                故事圖鑑
            </a>
        </li>
    </ul>
@endsection


@section('content')

@endsection
