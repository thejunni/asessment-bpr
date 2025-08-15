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
		dd($request->all());
		$request->validate([
			'nama_kategori' => 'required',
			'jenis'=> 'required',
		]);
		$addKategory = KategoriProduk::create($request->all());
		return response()->json($addKategory, 200);
	}
	public function edit($id)
	{
		return view('');
	}

	public function update($id, Request $request)
	{
		$kategoriProduk = KategoriProduk::findOrFail($id);
		$request->validate([
			'nama' => 'required',
			'jumlah'=> 'required',
			'kategori' => 'required'
		]);
		$kategoriProduk->update($request->all());
	}
	public function destroy($id)
	{
	
	}
}
