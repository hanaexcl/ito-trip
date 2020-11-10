<!DOCTYPE html>

<html lang="zh-tw">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>細旅遊</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset("/adminlte/plugins/fontawesome-free/css/all.min.css")}}">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset("/adminlte/dist/css/adminlte.min.css")}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <link href="{{ asset("/custom.css")}}" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset("/favicon.ico")}}">
</head>

<body class="layout-top-nav">
<div class="wrapper">

    <!-- Navbar<span class="brand-text font-weight-light">細旅遊</span> -->
    <nav class="main-header2 navbar navbar-expand-md navbar-light navbar-white">
        <div class="container">
            <a href="index3.html" class="navbar-brand">
                <img src="{{ asset("Logo.png")}}" alt="Logo" class="brand-image" style="opacity: .8">

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
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link">附近景點</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">每日旅遊</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">故事圖鑑</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <!-- /.navbar -->

    <div class="content-wrapper" style="min-height: 1158.48px;">


        <section class="content-header" style="background-image:url({{asset("/show.jpg")}});background-size: cover;background-position: center;background-repeat: no-repeat;">
            <div class="container"  style="min-height: 500px;">
                <div class="card special-card">
                    <div class="card-body d-flex justify-content-center align-items-center" style="min-height: 500px;">
                        <h2>細旅遊的細把中文細小與日文線(系ito)的意思結合，希望能把各地細小的故事，用線串連起來，編織出屬於台灣的故事網。</h2>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-block btn-default btn-lg">來趟細旅遊</button>
                    </div>
                </div>
                <!--
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="https://placehold.it/900x500/F08F90/ffffff&amp;text=Love+to+ito-trip" alt="First slide">
                        </div>
                    </div>
                </div>
                -->
            </div>
        </section>

    </div>

    <footer class="main-footer">
        <div class="container">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.0.0
            </div>
            <strong>Copyright © 2014-2019 <a href="http://adminlte.io">りしりこんさ小</a>.</strong> All rights
            reserved.
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
