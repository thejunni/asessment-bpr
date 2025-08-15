<?php

namespace App\Http\Controllers;

use App\Models\KategoriProduk;
use Illuminate\Http\Request;

class KategoriProdukController extends Controller
{
    public function index ()
	{
		$data = KategoriProduk::all();
		$kategori = json_decode($data);
		return view('kategoriProduk.index', compact('kategori'));
	}
	public function create()
	{
		return view('kategoriProduk.create');
	}
	public function store(Request $request)
	{
	    $validated = $request->validate([
	        'nama_kategori' => 'required|string',
	        'jenis'         => 'required|string',
	    ]);
	    KategoriProduk::create([
	        'nama_kategori' => $validated['nama_kategori'],
	        'jenis'         => $validated['jenis'],
	    ]);
	    return redirect()
	        ->route('kategori-produk.index')
	        ->with('success', 'Kategori berhasil ditambahkan.');
	}
	public function edit($id)
	{
	    $kategori = KategoriProduk::findOrFail($id);
	    return view('kategoriProduk.edit', compact('kategori'));
	}
	public function update(Request $request, $id)
	{
	    $validated = $request->validate([
	        'nama_kategori' => 'required|string',
	        'jenis'         => 'required|string',
	    ]);

	    $kategori = KategoriProduk::findOrFail($id);
	    $kategori->update([
	        'nama_kategori' => $validated['nama_kategori'],
	        'jenis'         => $validated['jenis'],
	    ]);

	    return redirect()
	        ->route('kategori-produk.index')
	        ->with('success', 'Kategori berhasil diperbarui.');
	}
	public function destroy($id)
	{
	    $kategori = KategoriProduk::findOrFail($id);
	    $kategori->delete();
	
	    return redirect()->route('kategori-produk.index')
	                     ->with('success', 'Kategori berhasil dihapus.');
	}
}
