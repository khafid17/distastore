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
            <h6 class="m-0 font-weight-bold text-dark">Tambah Produk</h6>
        </div>
    <div class="card-body">
  <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
  @csrf

  <div class="row">

    <div class="col-md-12 form-group">
        <label>Nama</label>
        <input type="text" class="form-control" name="nama" value="{{old('nama')}}">
    </div>
    <div class="col-md-12 form-group">
      <label>Harga</label>
      <input type="number" class="form-control" name="harga" value="{{old('harga')}}">
    </div>
    <div class="col-md-12 form-group">
      <label>Kategori Produk</label>
      <select class="form-control" name="kategori_produk_id">
        <option value="{{old('kategori_produk_id')}}" holder>Pilih Kategori Produk</option>
        @foreach($kategori as $result)
        <option value="{{ $result->id }}">{{  $result->nama }}</option>
        @endforeach
      </select>
    </div> 
    <div class="col-md-12 form-group">
      <label>Diskripsi</label>
      <textarea type="text" class="form-control" name="diskripsi" id="editor1"  value="" cols="30" rows="10">{{old('diskripsi')}}</textarea>
    </div>
  </div>
  
    <div class="form-group">
      {{-- <label>Dokumen</label> --}}
      <input type="file" name="file">
    </div>
    <div class="form-group">
        <button class="btn btn-dark btn-block">Simpan Produk</button>
    </div>
  </form>
    </div>
  </div>
</div>

@endsection