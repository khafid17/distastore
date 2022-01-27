@extends('backend.master')
@section('title', 'Admin - Produk Detail')
@section('content')

  @if(count($errors)>0)
  	@foreach($errors->all() as $error)
  	<div class="alert alert-danger" role="alert">
      {{ $error }}
	  </div>  		
  	@endforeach
  @endif

  @if(Session::has('success'))
  	<div class="alert alert-success" role="alert">
      {{ Session('success') }}
	  </div> 
  @endif
  
  <div class="col-lg-12 order-lg-1">
    <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Produk</h6>
          </div>
          <div class="card-body">
    <form action="{{route('produk.update', $produk->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
      <div class="form-group">
        <div class="row">
          <div class="col-md-12 form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="nama" value="{{$produk->nama}}">
          </div>
          <div class="col-md-12 form-group">
            <label>Harga</label>
            <input type="number" class="form-control" name="harga" value="{{$produk->harga}}">
          </div>
          <div class="col-md-12 form-group">
            <label>Pilih Kategori Produk</label>
            <select class="form-control" name="kategori_produk_id">
              <option value="" holder>Pilih Kategori</option>
              @foreach($kategori as $result)
              <option value="{{ $result->id }}"
              @if($result->id == $produk->kategori_produk_id)
                selected
              @endif
                >{{  $result->nama }}</option>
              @endforeach
            </select>
          </div>
          <div class="col-md-12 form-group">
            <label>Diskripsi</label>
            <textarea type="text" class="form-control" name="diskripsi" id="editor1" name="" id="" cols="30" rows="10">{{$produk->diskripsi}}</textarea>
          </div>
          
          <div class="form-group">
              <label for="" class="text-right">Pilih File Ulang</label>
              <div class="col-md-8">
                  <input type="file" name="file" >
                  {{-- <div class="container embed-responsive embed-responsive-4by3">
                    <embed type="application/pdf" src="{{URL::to('/')}}/storage/jdih/{{$produkhukum->file}}" width="1000" height="500"></embed>
                </div> --}}
                  {{-- <iframe src="{{URL::to('/')}}/storage/jdih/{{$produkhukum->file}}" frameborder="0"></iframe> --}}
                  <img src="{{URL::to('/')}}/storage/produk/{{$produk->file}}" class="" width="100" alt="">
                  {{-- <input type="hidden" name="hidden_file" value="{{$produk->file}}"> --}}
              </div>
          </div>
          <div class="form-group">
            <input type="submit" name="edit" class="btn btn-dark btn-block" value="Update Produk">
          </div>
        </div>
      </div>
    </form>
  </div>
</div>

@endsection