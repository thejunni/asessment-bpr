<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriProduk extends Model
{
	protected $table = 'kategori_produks';
	protected $fillable = [
		'id',
		'nama_kategori',
		'jenis',
	];
	public function produk()
	{
	    return $this->hasMany(Produk::class, 'category_id');
	}
}
