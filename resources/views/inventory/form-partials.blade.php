@extends("template/bar")
@section('title')
    Inventory
@endSection()
@section('css')
    <link rel="stylesheet" href="css/menu.css">
@endsection
@section('content')
@section('bodyclass')
    class="c-app flex-row align-items-center"
@endsection
<div class="c-wrapper c-fixed-components">
    @include('template/header')
    <div class="container top">
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" href="#">All</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Bahan</a></li>
            <li class="nav-item"><a class="nav-link" href="#">HM</a></li>
            <li class="nav-item"><a class="nav-link" href="#">HM to HM</a></li>
        </ul>

        <button class="btn btn-primary ml-auto" onclick="window.location.href='inventory/create';">New Item</button>
    </div>

    <main class=" c-main">
        <div class="fit-layout">
            <div class="layout-container food">
                <div class="card">
                    <img src="https://i0.wp.com/images-prod.healthline.com/hlcmsresource/images/AN_images/eggs-breakfast-avocado-1296x728-header.jpg?w=1155&h=1528"
                        alt="" style="width: 15rem;">
                    <div class="card-body">
                        <h5 class="card-title">Menu 1</h5>
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
                    <img src="https://i0.wp.com/images-prod.healthline.com/hlcmsresource/images/AN_images/eggs-breakfast-avocado-1296x728-header.jpg?w=1155&h=1528"
                        alt="" style="width: 15rem;">
                    <div class="card-body">
                        <h5 class="card-title">Menu 2</h5>
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
            <div class="layout-container drink">
                <div class="card">
                    <img src="https://i0.wp.com/images-prod.healthline.com/hlcmsresource/images/AN_images/eggs-breakfast-avocado-1296x728-header.jpg?w=1155&h=1528"
                        alt="" style="width: 15rem;">
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
                    <img src="https://i0.wp.com/images-prod.healthline.com/hlcmsresource/images/AN_images/eggs-breakfast-avocado-1296x728-header.jpg?w=1155&h=1528"
                        alt="" style="width: 15rem;">
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

    </main>
</div>

</div>
@endsection
