<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriProduk extends Model
{
    protected $fillable = ['nama'];

    // public function produk(){
    // 	return $this->hasMany('App\Produk');
    // }
}
