@extends('template')

@section('title', 'ini halaman detail')

@section('navbar')
    @parent
    <b> ini bisa di isi navbar tambahan</b>
@endsection
@section('content')
<div class="container-fluid">
    <h1 class="mb-4">{{ $title }}</h1>
</div>

<h2> Ini halaman detail produk</h2>

Nama Produk : <b>{{ $product['name'] }}</b>
ID Produk : <b>{{ $product['id'] }}</b>
Warna : <b>{{ $product['color'] }}</b>
Stok : <b>{{ $product['stock'] }}</b>
<p>Price : Rp {{ number_format($product['price'], 2, ',', '.') }}</p>
@endsection

