@extends('layouts.index')

@section('title', '圖鑑')
@section('story', 'active')

@section('nav')
    @parent

    <ul class="navbar-nav">
        <li class="nav-item @yield('near')">
            <a href="{{ route('near.index') }}" class="nav-link">
                附近店家
            </a>
        </li>
{{--        <li class="nav-item @yield('daily')">--}}
{{--            <a href="{{ route('daily') }}" class="nav-link">--}}
{{--                每日旅遊--}}
{{--            </a>--}}
{{--        </li>--}}
        <li class="nav-item @yield('story')">
            <a href="{{ route('story.index') }}" class="nav-link">
                <i class="ea ea-reman"></i> 拉麵圖鑑
            </a>
        </li>
        <li class="nav-item @yield('nnear')">
            <a href="{{ route('nnear') }}" class="nav-link">
                拉麵文化
            </a>
        </li>
    </ul>
@endsection


@section('content')
    <section class="content-header">
        <div class="container">
            <!--篩選區-->
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{ route("story.store", [$type, $hashTag]) }}" method="post">
                                {{ csrf_field() }}
                                <div class="input-group search-input">
                                        <input type="text" name="search" class="form-control" placeholder="Search" value="{{ $searchName }}">

                                        <div class="input-group-append">
                                            <button type="submit" value="Submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                        </div>
                                </div>
                            </form>
{{--                            <div class="input-group">--}}
{{--                                <div class="col-md-2">--}}
{{--                                    <label>類型</label>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-10                   ">--}}
{{--                                    <a href="#" class="card-link">美食</a>--}}
{{--                                    <a href="#" class="card-link">景點</a>--}}
{{--                                    <a href="#" class="card-link">街頭藝人</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="input-group">
                                <div class="col-md-2">
                                    <label>地區</label>
                                </div>
                                <div class="col-md-10">
                                    <a href="{{ route('story.index', [null, $hashTag]) }}" class="card-link">全部</a>
                                    <a href="{{ route('story.index', ['type=北部', $hashTag]) }}" class="card-link">北部</a>
                                    <a href="{{ route('story.index', ['type=中部', $hashTag]) }}" class="card-link">中部</a>
                                    <a href="{{ route('story.index', ['type=南部', $hashTag]) }}" class="card-link">南部</a>
                                    <a href="{{ route('story.index', ['type=東部', $hashTag]) }}" class="card-link">東部</a>
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="col-md-2">
                                    <label>標籤</label>
                                </div>
                                <div class="col-md-10">
                                    <a href="{{ route('story.index', [$type, 'hashTag=橫濱家系']) }}" class="card-link">橫濱家系</a>
                                    <a href="{{ route('story.index', [$type, 'hashTag=博多']) }}" class="card-link">博多</a>
                                    <a href="{{ route('story.index', [$type, 'hashTag=北海道']) }}" class="card-link">北海道</a>
                                    <a href="{{ route('story.index', [$type, 'hashTag=鷹流']) }}" class="card-link">鷹流</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!--篩選資料區-->
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        @if ($searchName == '')
                            熱門
                        @else
                            搜尋
                        @endif
                    </h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        @if (count($times) >= 1)
                            @foreach($times as $time)
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <img src="{{ $time['url'] }}" class="img-fluid" style="width:160px;height:140px;">
                                                </div>
                                                <div class="col-md-8">
                                                    <h1 class="info-box-text"> {{ $time['title'] }}</h1>
                                                    <span class="info-box-text ellipsis-context">{{ $time['context'] }}</span>
                                                </div>
                                            </div>
                                            <a href="{{ route('near.index', ['mode=2', 'id=' . $time['id']]) }}" class="stretched-link"></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            找不到相關的資料
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
