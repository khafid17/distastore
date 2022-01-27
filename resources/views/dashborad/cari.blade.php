@extends('frontend.master')
@section('judul', 'Pencarian')
@section('content')

<section class="bg-success py-5">
    <div class="container">
        @foreach ($produk as $data)                    
        <div class="col-md-4">
            <div class="card mb-4 product-wap rounded-0">
                <div class="card rounded-0">
                    {{-- <img class="card-img rounded-0 img-fluid" src="assets/img/shop_01.jpg"> --}}
                    <img src="{{URL::to('/')}}/storage/produk/{{$data->file}}" class="card-img rounded-0  img-fluid" style="width:100%">
                    <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                        <ul class="list-unstyled">
                            <li><a class="btn btn-success text-white" href=""><i class="far fa-heart"></i></a></li>
                            <li><a class="btn btn-success text-white mt-2" href=""><i class="far fa-eye"></i></a></li>
                            <li><a class="btn btn-success text-white mt-2" href=""><i class="fas fa-cart-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <a href="" class="h3 text-decoration-none">{{$data->nama}}</a>
                    <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                        <li>Harga Dinamis</li>
                        <li class="pt-2">
                            <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                            <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                            <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                            <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                            <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                        </li>
                    </ul>
                    <ul class="list-unstyled d-flex justify-content-center mb-1">
                        <li>
                            <i class="text-warning fa fa-star"></i>
                            <i class="text-warning fa fa-star"></i>
                            <i class="text-warning fa fa-star"></i>
                            <i class="text-warning fa fa-star"></i>
                            <i class="text-muted fa fa-star"></i>
                        </li>
                    </ul>
                    <p class="text-center mb-0">Rp. {{$data->harga}}</p>
                    <a class="btn btn-success text-white" href="/shop/{{$data->id}}">Details</a> 
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
<!-- Close Banner -->

@endsection