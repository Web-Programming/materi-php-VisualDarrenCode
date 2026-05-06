@extends('app.master')
@section('title', $title)
@section('sidebar')
    @parent
@section('submenu-produk')
    <a href="/produk/create"
        class="list-group-item list-group-item-action ps-4 
        {{ request()->is('produk/create') ? 'active' : '' }}">Tambah
        Produk</a>
    <a href="/produk/search"
        class="list-group-item list-group-item-action ps-4 
        {{ request()->is('produk/search') ? 'active' : '' }}">Cari
        Produk</a>
@endsection
@endsection

@section('content')
<div class="container-fluid">
    <h1 class="mb-4">{{ $title }}</h1>

    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                {{-- @for ($i = 0; $i < count($products); $i++)
                    <tr>
                        <td>{{ $i + 1 }}</td>
                        <td>{{ $products[$i]['name'] }}</td>
                        <td>Rp {{ number_format($products[$i]['price'], 2, ',', '.') }}</td>
                        <td>
                            <a href="{{ url('/produk/' . $products[$i]['id']) }}" class="btn btn-sm btn-info">Detail</a>
                            <a href="{{ url('/produk/' . $products[$i]['id'] . '/edit') }}"
                                class="btn btn-sm btn-primary">Edit</a>
                        </td>
                    </tr>
                @endfor --}}
                @foreach (suppliers as $index => $supplier)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $supplier->name }}</td>
                        <td> {{ $supplier->phone }}</td>
                        <td> {{ $supplier->address }}</td>
                        <td>
                            <a href="{{ url('/supplier/' . $supplier->id) }}" class="btn btn-sm btn-info">Detail</a>
                            <a href="{{ url('/supplier/' . $supplier->id . '/edit') }}"
                                class="btn btn-sm btn-primary">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection