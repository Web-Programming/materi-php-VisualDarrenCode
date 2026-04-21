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