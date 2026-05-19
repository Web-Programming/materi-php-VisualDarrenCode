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
        // $products = [
        //     ['id' => 1, 'name' => 'Laptop', 'price' => 7500000],
        //     ['id' => 2, 'name' => 'Mouse', 'price' => 150000],
        //     ['id' => 3, 'name' => 'Keyboard', 'price' => 300000],
        //     ['id' => 4, 'name' => 'Monitor', 'price' => 2500000],
        // ];

        //$products = Product::all(); //cara 1
        //$products = DB::select('SELECT * FROM products'); //cara 2
        //$products = DB::table('products')->get(); //cara 3
        $products = Product::paginate(10); //cara 4 dengan pagination
        return view('products.index', compact('title', 'products'));

        //return view('produk.index', [
        //    'products' => $products, 
        //    'title' => $title
        //]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Produk";
        return view('products.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'status' => 'required|in:new,used',
            'is_active' => 'nullable|boolean',
            'release_date' => 'nullable|date',]
        ,[
            'name.required' => 'Nama produk wajib diisi.',
            'name.max' => 'Nama produk tidak boleh lebih dari 100 karakter.',
            'price.required' => 'Harga produk wajib diisi.',
            'price.numeric' => 'Harga produk harus berupa angka.',
            'price.min' => 'Harga produk tidak boleh negatif.',
            'status.required' => 'Status produk wajib diisi.',
            'status.in' => 'Status produk harus bernilai "new" atau "used".',
            'release_date.date' => 'Format tanggal rilis tidak valid.',
        ]);
    $validated['is_active'] = $request->has('is_active') ? 1 : 0;
        Product::create($validated);
        return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan.');

    }
        
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $title = "Detail Produk";
        $product = Product::findorfail($id);
        return view('products.detail', compact('id', 'product', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = "Edit Produk";
        $product = Product::findorfail($id);
        return view('products.edit', compact('title', 'product'));
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