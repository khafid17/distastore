@extends('backend.master')
@section('title', 'Admin - Kategori-Produk')
@section('content')

    @if(Session::has('success'))
  	<div class="alert alert-success" role="alert">
      {{ Session('success') }}
	</div> 
	@endif
<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<a href="{{ route('kategori-produk.create') }}" class="btn btn-dark float-right"><i class="fa fa-plus-circle"></i> Tambah Kategori</a>
		<h4 class="m-0 font-weight-bold text-dark">Kategori</h4>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Kategori</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			@php
				$no = 1;
			@endphp
				@foreach ($data as $result => $hasil)
				<tr>
					<td>{{ $no++ }}</td>
					<td>{{ $hasil->nama }}</td>
					<td>
				<form action="{{ route('kategori-produk.destroy', $hasil->id )}}" method="POST">
				@csrf
				@method('delete')
					<a href="{{ route('kategori-produk.edit', $hasil->id ) }}" class="btn btn-primary btn-sm">Edit</a>
					<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('apa kamu yakin akan menghapus data?')">Delete</button>
				</form>
					</td>
					</tr>
				@endforeach
			</tbody>
			</table>
		</div>
	</div>
</div>
@endsection