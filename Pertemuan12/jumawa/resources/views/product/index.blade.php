@extends('app.master')

@section('title', 'product index')

@section('sidebar')
@parent
    
    


@section('submenu-produk')
    <a href="/produk/create" class="list-group-item list-group-item-action active">Tambah Product</a>
     <a href="/produk/search" class="list-group-item list-group-item-action active">cari produk</a>
    @endsection
@endsection

@section('content')
    <h1 class="h3 mb-3">Product Index</h1>
    <p class="text-muted">Halaman Daftar Product</p>

    <div class="card">
        <div class="card-body">
            konten produk bisa di tampilkan di sini
        </div>

    </div>
    @endsection