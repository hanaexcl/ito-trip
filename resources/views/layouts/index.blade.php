<!DOCTYPE html>

<html lang="zh-tw">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title>拉麵旅路 - @yield('title')</title>

        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="{{ asset("/adminlte/plugins/fontawesome-free/css/all.min.css")}}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset("/adminlte/dist/css/adminlte.min.css")}}">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        <link href="{{ asset("/custom.css")}}" rel="stylesheet">
        <link rel="shortcut icon" href="{{ asset("/favicon.ico")}}" type="image/x-icon">
        <link rel="icon" type="image/png" href="/favicon.png" sizes="32x32">
        <link rel="stylesheet" href="{{ asset("/custom_font/font.css")}}">
    </head>

    <body class="layout-top-nav">
        <div class="wrapper">
            <!-- Navbar<span class="brand-text font-weight-light">細旅遊</span> -->
            <nav class="main-header2 navbar navbar-expand-md navbar-light navbar-white">
                <div class="container">
                    <a href="{{ route('index') }}" class="navbar-brand">
                        <img src="{{ asset("Logo.png")}}" alt="Logo" class="brand-image logo-size" style="opacity: .8">
                    </a>

                    <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fab fa-facebook fa-2x"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fab fa-instagram fa-2x"></i></a>
                        </li>
                    </ul>

                    <button class="navbar-toggler order-1 collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </nav>
            <!-- /.navbar -->

            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand-md navbar-light navbar-light">
                <div class="container">
                    <div class="navbar-collapse order-3 collapse" id="navbarCollapse" style="">
                        @section('nav')
                        @show
                    </div>
                </div>
            </nav>
            <!-- /.navbar -->

            <div class="content-wrapper" style="min-height: 1158.48px;">
                @yield('content')
            </div>

            <footer class="main-footer">
                <div class="container">
{{--                    <div class="float-right d-none d-sm-block">--}}
{{--                        <b>Version</b> 3.0.0--}}
{{--                    </div>--}}
{{--                    <strong>Copyright © 2014-2019 <a href="http://adminlte.io">りしれ＃さ小</a>.</strong> All rights--}}
{{--                    reserved.--}}
                </div>
            </footer>
        </div>
        <!-- ./wrapper -->

        <!-- REQUIRED SCRIPTS -->

        <!-- jQuery -->
        <script src="{{ asset("/adminlte/plugins/jquery/jquery.min.js")}}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset("/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset("/adminlte/dist/js/adminlte.min.js")}}"></script>
    </body>
</html>
