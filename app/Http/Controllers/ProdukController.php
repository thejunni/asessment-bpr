<?php

namespace App\Http\Controllers;

use App\Models\KategoriProduk;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
	public function index ()
	{
		$data = Produk::all();
		$produks = json_decode($data);
		return view('produk.index', compact('produks'));
	}
	public function create()
	{
		return view();
	}
	public function store (Request $request)
	{
		$request->validate([
			'nama' => 'required',
			'jumlah'=> 'required',
			'kategori' => 'required'
		]);
		$addKategory = Produk::create($request->all());
		return response()->json($addKategory, 200);
	}
	public function edit($id)
	{
		return view('');
	}

	public function update($id, Request $request)
	{
		$produk = Produk::findOrFail($id);
		$request->validate([
			'nama' => 'required',
			'jumlah'=> 'required',
			'kategori' => 'required'
		]);
		$produk->update($request->all());
	}
	public function destroy($id)
	{
	
	}
}
