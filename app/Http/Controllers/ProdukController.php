<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index()
    {
        return response()->json(Produk::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'category' => 'required|string|max:50',
            'image' => 'required|string|max:100',
            'stock' => 'required|string|max:5',
            'price' => 'required|string|max:50',
            'description' => 'required|string',
        ]);

        $produk = Produk::create($request->all());
        return response()->json($produk, 201);
    }

    public function show($id)
    {
        return response()->json(Produk::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);
        $produk->update($request->all());
        return response()->json($produk);
    }

    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();
        return response()->json(['message' => 'Deleted successfully']);
    }
}

