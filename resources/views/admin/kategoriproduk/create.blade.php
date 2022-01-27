@extends('backend.master')
@section('title', 'Admin - Kategori-Produk')
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
            <h6 class="m-0 font-weight-bold text-dark">Tambah Kategori</h6>
        </div>
    <div class="card-body">
  <form action="{{ route('kategori-produk.store') }}" method="POST">
  @csrf
  <div class="form-group">
      <label>Kategori</label>
      <input type="text" class="form-control" name="nama">
  </div>

  <div class="form-group">
      <button class="btn btn-dark btn-block">Simpan Kategori</button>
  </div>

  </form>
    </div>
  </div>
</div>

@endsection