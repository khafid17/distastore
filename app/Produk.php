<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $fillable = ['nama','diskripsi','harga','kategori_produk_id','file'];

    public function KategoriProduk(){
    	return $this->belongsTo('App\KategoriProduk');
    }
}
