@extends('template.bar')
@section('title')
    Inventory
@endSection()
@section('css')
    <link rel="stylesheet" href="{{ asset('css/inventory.css') }}">
@endsection
@section('content')
@section('bodyclass')
    class="c-app flex-row align-items-center"
@endsection
<div class="c-wrapper c-fixed-components">
    @include('template/header')

    <main class="container c-main">
        <div class="fit-layout">

            <div class="card col-lg-12">
                <div class="card-header">Formulir {{ $titleBar }}</div>
                <div class="card-body">

                    {{-- Field nama produk --}}
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label" for="namaProduk">Nama Produk</label>
                        <div class="col-md-10">
                            <input class="form-control" id="namaProduk" type="text" name="namaProduk"
                                placeholder="Masukkan nama produk">
                            <span class="help-block">This is a help text</span>
                        </div>
                    </div>

                    {{-- Field jenis produk --}}
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Jenis Produk</label>
                        <div class="col-md-10 col-form-label">
                            <div class="form-check">
                                <input class="form-check-input" id="bahan" type="radio" value="bahan" name="jenis"
                                    class="jenis">
                                <label class="form-check-label" for="bahan">Bahan Dasar</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" id="hm" type="radio" value="hm" name="jenis"
                                    class="jenis">
                                <label class="form-check-label" for="hm">Home Made</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" id="hm2hm" type="radio" value="hm2hm" name="jenis"
                                    class="jenis">
                                <label class="form-check-label" for="hm2hm">Home Made to Home Made</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" id="barang" type="radio" value="barang" name="jenis"
                                    class="jenis">
                                <label class="form-check-label" for="barang">Barang</label>
                            </div>
                        </div>
                    </div>

                    {{-- Tambah field baru disini --}}
                    <div class="addField"></div>

                    {{-- Button tambah field --}}
                    <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 offset-md-2" id="addNew" style="display: none;">
                        <button class="btn btn-ghost-primary" type="button">
                            <svg class="c-icon">
                                <use xlink:href="{{ asset('node_modules/@coreui/icons/sprites/free.svg#cil-plus') }}">
                                </use>
                            </svg> Tambah Bahan
                        </button>
                    </div>

                    {{-- Field jumlah produk --}}
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label" for="jumlahProduk">Jumlah</label>
                        <div class="col-md-3">
                            <input class="form-control" id="jumlahProduk" type="number" name="jumlahProduk"
                                placeholder="Masukkan jumlah produk">
                            <span class="help-block">This is a help text</span>
                        </div>
                    </div>

                    {{-- Field harga produk --}}
                    <div class="form-group row" id="harga" style="display: none;">
                        <label class="col-md-2 col-form-label" for="namaProduk">Harga Produk</label>
                        <div class="col-md-1">
                            <h5>Rp</h5>
                        </div>
                        <div class="col-md-3">
                            <input class="form-control" id="hargaProduk" type="number" name="hargaProduk"
                                placeholder="Masukkan harga produk">
                            <span class="help-block">This is a help text</span>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <button class="btn btn-sm btn-primary" type="submit"> Submit</button>
                </div>
            </div>

        </div>
    </main>
</div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('js/field.js') }}">
</script>
@endsection
