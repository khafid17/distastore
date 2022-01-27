<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use App\KategoriProduk;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Produk::orderby('created_at', 'desc')->get();
        // $kategori = KategoriProduk::all();
        return view('admin.produk.index', compact('produk'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = KategoriProduk::all();   
        return view('admin.produk.create', \compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|min:3',
            'diskripsi' => 'required',
            'harga' => 'required',
            'kategori_produk_id' => 'required',
            'file' => 'required|max:2048'
        ]);
        
        $gambar = $request->file;
        $new_gambar = time().$gambar->getClientOriginalName();
        $produk = Produk::create([
            'nama' => $request->nama,
            'diskripsi' =>  $request->diskripsi,
            'harga' =>  $request->harga,
            'kategori_produk_id' =>  $request->kategori_produk_id,
            'file' => 'storage/produk/'.$new_gambar


        ]);

        $gambar->move('storage/produk/', $new_gambar);
        return redirect()->back()->with('success','Postingan anda berhasil disimpan'); 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $data = Produk::orderBy('created_at', 'desc')->paginate(5);
        // return view('admin.produk.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk = Produk::findorfail($id);
        $kategori = KategoriProduk::all();   
        return view('admin.produk.edit', compact('produk','kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required|min:3',
            'diskripsi' => 'required',
            'harga' => 'required',
            'kategori_produk_id' => 'required',           
         ]);

        $produk = Produk::findorfail($id);

        if ($request->has('file')) {
            $gambar = $request->file;
            $new_gambar = time().$gambar->getClientOriginalName();
            $gambar->move('storage/produk/', $new_gambar);

        $post_data = [
            'nama' => $request->nama,
            'diskripsi' =>  $request->diskripsi,
            'harga' =>  $request->harga,
            'kategori_produk_id' =>  $request->kategori_produk_id,
            'file' => 'storage/produk/'.$new_gambar
        ];
        }
        else{
        $post_data = [
            'nama' => $request->nama,
            'diskripsi' =>  $request->diskripsi,
            'harga' =>  $request->harga,
            'kategori_produk_id' =>  $request->kategori_produk_id,
        ];
        }
        $produk->update($post_data);

        return redirect()->back()->with('success','Produk anda berhasil diupdate'); 
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Produk::findorfail($id);
        $data->delete();

        return redirect()->back()->with('success','Data Berhasil Dihapus');
    }
}
