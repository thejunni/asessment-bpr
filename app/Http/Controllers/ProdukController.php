<?php

namespace App\Http\Controllers;

use App\Models\KategoriProduk;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
	public function index ()
	{
		$produks = Produk::with('kategori')->get();
		return view('produk.index', compact('produks'));
	}
	public function create()
    {
        $kategori = KategoriProduk::all();
        return view('produk.create', compact('kategori'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama'  => 'required|string',
            'category_id'  => 'required',
            'jumlah'        => 'required|numeric',
        ]);

        Produk::create([
            'nama' => $validated['nama'],
            'category_id' => $validated['category_id'],
            'jumlah'       => $validated['jumlah'],
        ]);

        return redirect()
            ->route('produk.index')
            ->with('success', 'Produk berhasil ditambahkan.');
    }
	public function edit($id)
	{
	    $produk = Produk::findOrFail($id);
	    $kategori = KategoriProduk::all();
	    return view('produk.edit', compact('produk', 'kategori'));
	}

	public function update(Request $request, $id)
	{
	    $request->validate([
	        'nama' => 'required|string',
	        'jumlah' => 'required|integer',
	        'category_id' => 'required',
	    ]);

	    $produk = Produk::findOrFail($id);
	    $produk->update([
	        'nama' => $request->nama,
	        'jumlah' => $request->jumlah,
	        'category_id' => $request->category_id,
	    ]);

	    return redirect()->route('produk.index')->with('success', 'Produk berhasil diperbarui.');
	}
	public function destroy($id)
	{
	
	}
}
