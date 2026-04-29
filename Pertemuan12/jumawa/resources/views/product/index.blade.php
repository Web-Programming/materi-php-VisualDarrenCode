@extends('app.master')

@section('title', 'Produk Index')

@section('sidebar')
    @parent
    @section('submenu-produk')
        <a href="/produk/create" class="list-group-item list-group-item-action ps-4 
        {{ request()->is('produk/create') ? 'active' : '' }}">Tambah Produk</a>
        <a href="/produk/search" class="list-group-item list-group-item-action ps-4 
        {{ request()->is('produk/search') ? 'active' : '' }}">Cari Produk</a>
    @endsection
@endsection

@section('content')
<div class="container-fluid"></div>
    <h1 class="mb-4">({$title})</h1>

    <div class="table-responsive"></div>
        <table class="table table-striped table-bordered table-hover"></table>
            <thead class="table-dark"></thead>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>harga</th>
                    <th>Action </th>
                    

                </tr>
            </thead>
            <tbody>
                @for ($i = 1; $i <= count($products); $i++)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $products[$i-1]['name'] }}</td>
                        <td>{{ $products[$i-1]['price'] }}</td>
                        <td>
                            <a href="/produk/{{ $products[$i-1]['id'] }}/edit" class="btn btn-sm btn-primary">Edit</a>
                            <form action="/produk/{{ $products[$i-1]['id'] }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</button>
                                <a href="{{ url('/produk/' . $products[$i]['id']) }}" class="btn btn-sm btn-info">Detail</a>
                                <a href="{{ url('/produk/' . $products[$i]['id'] . '/edit') }}" class="btn btn-sm btn-primary">Edit</a>
                            </form>
                        </td>
                    </tr>
                @endfor
            </tbody>
        </table>
    </div>
@endsection



    
