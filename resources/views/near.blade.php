@extends('layouts.index')

@section('title', '附近店家')
@section('near', 'active')

@section('nav')
    @parent

    <ul class="navbar-nav">
        <li class="nav-item @yield('near')">
            <a href="{{ route('near.index') }}" class="nav-link">
                <i class="ea ea-reman"></i> 附近店家
            </a>
        </li>
{{--        <li class="nav-item @yield('daily')">--}}
{{--            <a href="{{ route('daily') }}" class="nav-link">--}}
{{--                每日旅遊--}}
{{--            </a>--}}
{{--        </li>--}}
        <li class="nav-item @yield('story')">
            <a href="{{ route('story.index') }}" class="nav-link">
                拉麵圖鑑
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

            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="content-btn">
                            <a id="positioning" href="#" class="btn btn-block btn-lg"><i class="fa fa-compass" aria-hidden="true"></i>  尋找附近</a>
                        </div>
                    </div>

                    @if (count($nearList) >= 1)
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">您的附近</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <ul class="nav nav-pills flex-column">
                                @foreach($nearList as $near)
                                <li class="nav-item">
                                    <a href="{{ route('near.index', ['mode=2', 'id=' . $near['id']]) }}" class="nav-link">
                                        <i class="fas fa-utensils"></i> {{ $near['title'] }}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- /.card-body -->
                    </div>

                    @else

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">推薦店家</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <ul class="nav nav-pills flex-column">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-utensils"></i> 麵屋祥 東京醬油拉麵
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    @endif
                </div>

                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">{{ $title }}</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-8">
                                    <p class="card-text">
                                        {!! nl2br(e($context)) !!}
                                    </p>
                                </div>
                                <div class="col-sm-4">
                                    <img style="padding: 5px;border: 1px solid #021a40;" src="{{ $image }}" class="product-image" alt="Product Image">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card">
                        <div id="map" style="min-height: 500px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        var map;
        var markers = [];

        function initMap() {
            navigator.geolocation.watchPosition((position) => {
                lat = position.coords.latitude;
                lng = position.coords.longitude;
                document.getElementById("positioning").href = "\\near?mode=1&x=" + lat + "&y=" +lng;
            });

            var haightAshbury = {lat: parseFloat("{{ $coordinate_x }}"), lng: parseFloat("{{ $coordinate_y }}")};

            map = new google.maps.Map(document.getElementById('map'), {
                zoom: 18,
                center: haightAshbury,
                mapTypeId: 'terrain'
            });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD14Fte97VMx7uALdzOiABn4nPGragfFtI&callback=initMap"></script>
@endsection
