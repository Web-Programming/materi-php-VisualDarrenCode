<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    //jika nama tabel tidak sesuai dengan konvensi
    //maka kita bisa bisa mendefinisikan naa tabel secara eksplisit
    protected $table = 'products';
    //
}
