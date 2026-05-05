<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        

       $title = "Daftar Produk";
        // 1. Bikin data dummy (array multidimensi)
        $products = DB::select('SELECT * FROM products');

        // 2. Return view sekaligus melempar data $products ke Blade
        return view('product.index', compact('products'));
    }

    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('produk.detail', ['id' => $id]);

        $title = "Detail Produk";
        $product = [
            'id' => 4,
            "name" => "Laptop",
            "price" => 15000000];
            return view('produk.detail', compact('title', 'product', 'id'));


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('produk.edit', ['id' => $id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    function search(Request $request)
    {
        return view('produk.search');
    }
}