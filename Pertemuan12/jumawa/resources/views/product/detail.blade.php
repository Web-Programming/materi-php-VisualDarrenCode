@extends('template')

@section('title', 'ini halaman detail')

@section('navbar')
    @parent
    <b> ini bisa di isi navbar tambahan</b>
@endsection
@section('content')
    

<h2> Ini halaman detail produk</h2>

Nama Produk : <b>{{ $product_name }}</b>
ID Produk : <b>{{ $id }}</b>
Warna : <b>{{ $color }}</b>
Stok : <b>{{ $stock }}</b>
@endsection