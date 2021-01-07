@extends("template/bar")
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
<div class="c-wrapper c-fixed-components">
    @include('template/header')
    <main class="c-main">
        <div class="layout-container">
        @foreach ($collection as $item)
                    <div class="card" style="width: 15rem;">
                        <img src="https://i0.wp.com/images-prod.healthline.com/hlcmsresource/images/AN_images/eggs-breakfast-avocado-1296x728-header.jpg?w=1155&h=1528" alt="" style="width: 15rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{$item->name}}</h5>
                            <p class="card-text">Quick sample text to create the card title and make up the body of the card's content.</p>
                            <a id="button-click" href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
            @endforeach
  
        </div>
    </main>
</div>

@endsection
