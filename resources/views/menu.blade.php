@extends("template/bar")

<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>@yield('title')</title>
    @yield('css')
    <link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Main styles for this application-->
    <link href="dist/css/style.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        // Shared ID
        gtag('config', 'UA-118965717-3');
        // Bootstrap ID
        gtag('config', 'UA-118965717-5');
    </script>
</head>

@section('title')
Menu
@endSection()
@section('css')
<link rel="stylesheet" href="css/menu.css">
@endsection
@section('content')
@section('bodyclass')
class="c-app flex-row align-items-center"
@endsection
@include("template/bar_right")
<div class="c-wrapper c-fixed-components">
    @include('template/header')
    <div class="container top">
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" href="javascript:foodMenu();">Food</a></li>
            <li class="nav-item"><a class="nav-link" href="javascript:drinkMenu();">Drink</a></li>
        </ul>
    </div>
    <main class="c-main">
        <div class="fit-layout">
            <div class="layout-container food">
                <div class="card">
                    <img src="https://i0.wp.com/images-prod.healthline.com/hlcmsresource/images/AN_images/eggs-breakfast-avocado-1296x728-header.jpg?w=1155&h=1528" alt="" style="width: 15rem;">
                    <div class="card-body">
                        <h5 class="card-title">Menu 1</h5>
                        <p class="card-text">Quick sample text to create the card title and make up the body of the
                            card's content.</p>
                       @include("template/button_add_component")

                    </div>
                </div>
                <div class="card" style="width: 15rem;">
                    <img src="https://i0.wp.com/images-prod.healthline.com/hlcmsresource/images/AN_images/eggs-breakfast-avocado-1296x728-header.jpg?w=1155&h=1528" alt="" style="width: 15rem;">
                    <div class="card-body">
                        <h5 class="card-title">Menu 2</h5>
                        <p class="card-text">Quick sample text to create the card title and make up the body of the
                            card's content.</p>
                            @include("template/button_add_component")
                    </div>
                </div>

            </div>
            <div class="layout-container drink">
                <div class="card">
                    <img src="https://i0.wp.com/images-prod.healthline.com/hlcmsresource/images/AN_images/eggs-breakfast-avocado-1296x728-header.jpg?w=1155&h=1528" alt="" style="width: 15rem;">
                    <div class="card-body">
                        <h5 class="card-title">Menu 3</h5>
                        <p class="card-text">Quick sample text to create the card title and make up the body of the
                            card's content.</p>
                        <div class="add-button">
                            <button type="button" class="btn btn-pill btn-primary">-</button>
                            <div class="value">0</div>
                            <button type="button" class="btn btn-pill btn-primary">+</button>
                        </div>

                    </div>
                </div>
                <div class="card" style="width: 15rem;">
                    <img src="https://i0.wp.com/images-prod.healthline.com/hlcmsresource/images/AN_images/eggs-breakfast-avocado-1296x728-header.jpg?w=1155&h=1528" alt="" style="width: 15rem;">
                    <div class="card-body">
                        <h5 class="card-title">Menu 4</h5>
                        <p class="card-text">Quick sample text to create the card title and make up the body of the
                            card's content.</p>
                        <div class="add-button">
                            <button type="button" class="btn btn-pill btn-primary">-</button>
                            <div class="value">0</div>
                            <button type="button" class="btn btn-pill btn-primary">+</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="button-container">
            <button id="btn_side_right" class="c-header-toggler c-class-toggler" type="button" data-target="#sidebarright" data-class="c-sidebar-md-show">
                <img id="ic_shop" src="/assets/icon/ic_shop.svg" alt="">
            </button>
        </div>
  
    </main>
    <style>
    .c-main{
        justify-content: space-between;
    }
    .button-container{
        display: flex;
        flex-direction: row;
        position: relative;
        justify-content: flex-end;
    }
    #btn_side_right{
       
    }
    #ic_shop{
        width: 50px;
    }

    </style>
    <!-- <div class="container total">
        <div class="menu-infos">
            <p>
                <a class="btn btn-primary" data-toggle="collapse" href="#collapse-detail" role="button"
                    aria-expanded="false" aria-controls="collapseExample">
                    Detail Order
                </a>
            </p>
            <div class="collapse" id="collapse-detail">
            </div>

        </div>
    </div>
    <div class="menu-info">
        <div>Total</div>
        <div id="total">0</div>
        <button type="button" class="btn btn-success">Check out</button>
    </div> -->

</div>

</div>
<script src="js/food.js"></script>
<script type="module" src="js/total.js"></script>
@endsection