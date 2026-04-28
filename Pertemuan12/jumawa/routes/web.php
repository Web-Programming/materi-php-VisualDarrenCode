<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo "hallo, aku derren";
    //return view('welcome');
});

Route::get('/path1/path2/detail', function () {
    echo "jalan rajawali";
    echo "<br>";
    echo "kecamatan alanag alang lebar";
    echo "<br>";
    echo "kota palembang";
    echo "<br>";
    echo "provinsi sumatera selatan";
});

Route::get('/user/{nama}', function ($nama = 'Tamu') {
    echo "User name: " . $nama;
});
Route::get('/user2/{nama}', function ($nama = 'Tamu') {
    echo "User name: " . $nama;
});
Route::get('/user3/{nama?}', function ($nama = 'Tamu') {
    echo "User name: " . $nama;
});

Route::get('/user4/{id}/{nama?}', function ($id, $nama = 'Tamu') {
    echo "User ID: " . $id;
    echo "<br>";
    echo "User Name: " . $nama;
});
//router dengan metode POST
Route::post('/simpan', function () {
    echo "Data berhasil disimpan";
});

Route::put('/update/{id}', function ($id) {
    echo "Data berhasil diupdate dengan id: " . $id;
});

Route::patch('/update2/{id}', function ($id) {
    echo "Data berhasil diupdate dengan id: " . $id;
});

Route::delete('/hapus/{id}', function ($id) {
    echo "Data berhasil dihapus dengan id: " . $id;
});

Route::get('/test-method/{id}', function ($id) {
    return view('test-method');
});

Route::get('/profil', function () {
    return view('profile');
});

// Route::get('/detailproduk', function () {
//     return view('produk.detail');
// });

// Route::get('/detailproduk/{name}', function ($name) {
//     return view('produk.detail', ['product_name' => $name,
//     'id' => 123,
//     'color' => 'red',
//     'stock' => 10]);
// });

route::get('/produk/', function () {
    return view('produk.index');
});

route::get('/produk/create', function () {
    return view('produk.create');
});

route::get('/produk/search', function () {
    return view('produk.search');
});

route::get('/produk/detail', function () {
    return view('produk.detail');
});
use app\Http\Controllers\ProdukController;
//php artisan make:controller ProdukController --resource
route::resource('/produk', ProdukController::class);


route::get('/produk/search', [ProdukController::class, '@search');

//php artisan make:controller SupplierController --resource
route::get('/supplier', function () {
    return view('supplier.index');
});
