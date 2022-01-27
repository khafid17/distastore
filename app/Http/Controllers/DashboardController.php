<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use App\Posts;
use App\Category;
use App\Tags;
use App\KategoriProduk;
use App\Http\Controllers\DB;

class DashboardController extends Controller
{
    public function index(){
        $produk = Produk::orderby('created_at', 'desc')->paginate(9);
        return \view('dashborad.home', \compact('produk'));
    }
    public function shop(Request $request){
        $produk = Produk::orderby('created_at', 'desc')->paginate(6);
        $kategori = KategoriProduk::all();
        if($request->has('cari')){
            $data = \App\Produk::where('nama','LIKE','%'.$request->cari.'%')->get();
        }else{
            $data = \App\Produk::all();
        }
        return \view('dashborad.produk', \compact('produk', 'kategori', 'data'));
    }
    public function cari(Request $request){

        $query = $request->get('query');
        $produk =  Produk::where("nama", "like", "%".$query."%")->paginate(6);
        $kategori = KategoriProduk::all();

        return \view('dashborad.produk', \compact('produk', 'kategori'));

    }
    public function shopdetail($id){
        $data = Produk::where('id', '=', $id)->firstOrFail();
        $kategori = KategoriProduk::all();
        return \view('dashborad.produk_detail', \compact('data', 'kategori'));
    }
    public function shopkategori($kategori_produk_id){
        // $data = DB::table('produks')->where('kategori_produk_id','=',$id )->firstOrFail();
        $produk = Produk::where('kategori_produk_id', '=', $kategori_produk_id)->firstOrFail();
        $detail = Produk::where('kategori_produk_id', '=', $kategori_produk_id)->get();
        $kategori = KategoriProduk::all();
        return \view('dashborad.produk_kategori', \compact('produk', 'kategori', 'detail'));
    }
    public function berita(){
        $berita = Posts::orderby('created_at', 'desc')->paginate(6);
        return \view('dashborad.berita', \compact('berita'));
    }
    public function beritadetail($slug){
        $posts = Posts::where('slug', '=', $slug)->firstOrFail();
        $news = Posts::orderby('created_at', 'desc')->get();
        $tag = Tags::all();
        $kategori = Category::all();
        return \view('dashborad.berita_detail', \compact('posts', 'news', 'tag', 'kategori'));
    }
    public function kontak(){
        return \view('dashborad.kontak');
    }
    public function about(){
        return \view('dashborad.about');
    }
}
