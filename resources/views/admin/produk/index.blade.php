@extends('backend.master')
@section('title', 'Admin - Produk Detail')
@section('content')

    @if(Session::has('success'))
  	<div class="alert alert-success" role="alert">
      {{ Session('success') }}
	</div> 
	@endif
<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
			<a href="{{ route('produk.create') }}" class="btn btn-dark float-right"><i class="fa fa-plus-circle"></i> Tambah Produk</a>

		<h4 class="m-0 font-weight-bold text-dark">Produk</h4>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Diskripsi</th>
					<th>Harga</th>
					<th>Kategori</th>
					<th>File</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			@php
				$no = 1;
			@endphp
				@foreach ($produk as $result => $hasil)
				<tr>
					<td>{{ $no++ }}</td>
					<td>{{ $hasil->nama }}</td>
					<td>{{ $hasil->diskripsi }}</td>
					<td>{{ $hasil->harga }}</td>
					
					<td>
						<span class="badge badge-info">{{$hasil->kategoriproduk->nama}}</span>
					</td>

					<td><img src="{{asset($hasil->file)}}" class="img-fluid" style="width:100px"></td>
					{{-- <td><img src="{{ asset( $hasil->gambar ) }}" class="img-fluid" style="width:100px"></td> --}}

					{{-- @if (auth()->user()->level==1)
					<td><label class="badge  {{ ($hasil->draft == 1) ? 'badge-success' : 'badge-danger'}}">{{ ($hasil->draft == 1) ? 'Tampil' : 'Tidak Tampil' }}</label></td>
					<td>
					@if ($hasil->draft == 1)
						<a href="{{ url('produk/draft/'.$hasil->id)}}" class="btn btn-sm btn-danger"><i class="fas fa-fw fa-power-off"></i></a>
					@else
						<a href="{{ url('produk/draft/'.$hasil->id)}}" class="btn btn-sm btn-success"><i class="fas fa-fw fa-power-off"></i></a>
					@endif --}}
					<td>
				<form action="{{ route('produk.destroy', $hasil->id )}}" method="POST">
				@csrf
				@method('delete')
					<a href="{{ route('produk.edit', $hasil->id ) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
					<button type="submit" class="btn btn-danger btn-sm"
					onclick="return confirm('apa kamu yakin akan menghapus data?')"><i class="fa fa-trash"></i></button>
				</form>
					</td>   
					
					</tr>
				@endforeach
			</tbody>
			</table>
			{{-- {{ $produk->links() }} --}}
		</div>
	</div>
</div>
@endsection