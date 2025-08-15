<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produks';
	protected $fillable = [
		'id',
		'nama',
		'jumlah',
		'category_id',
	];
	public function kategori()
	{
	    return $this->belongsTo(KategoriProduk::class, 'category_id');
	}
}
