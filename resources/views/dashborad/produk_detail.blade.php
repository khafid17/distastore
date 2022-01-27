@extends('frontend.master')
@section('judul', 'Produk Detail')
@section('content')
<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">
    <ol>
      <li><a href="/shop">Home</a></li>
      <li>Details Produk</li>
    </ol>
    <h2>Details Produk</h2>
  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details">
  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-8">
        <div class="portfolio-details-slider swiper">
          <div class="swiper-wrapper align-items-center">

            <div class="shadow">
              <img src="{{asset($data->file)}}" alt="">
            </div>

          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="portfolio-info">
          <ul>
            <h5><li><strong>Nama</strong>: {{$data->nama}}</li></h5>
            <h5><li><strong>Harga</strong>: Rp. {{$data->harga}}</li></h5>
          </ul>
          <h5>Detail Produk</h5>
          <p class="text-justify">
            {!!$data->diskripsi!!}
          </p>
        </div>
        

      </div>

    </div>

  </div>
</section><!-- End Portfolio Details Section -->

</main><!-- End #main -->
<!-- <div class="container py-5">
    <div class="row">

        <div class="col-lg-3">
            <h1 class="h2 pb-4">Kategori Produk</h1>
            <ul class="list-unstyled">
                <li class="pb-3">
                    @foreach ($kategori as $item)
                    <a class="collapsed d-flex justify-content-between h3 text-decoration-none text-dark" href="/shop/kategori/{{$item->id}}">
                        {{$item->nama}}
                        <i class="fa fa-fw fa-chevron-circle-down mt-1"></i>
                    </a>
                    @endforeach
                    {{-- <ul class="collapse show list-unstyled pl-3">
                        <li><a class="text-decoration-none" href="#"></a></li>
                        <li><a class="text-decoration-none" href="#">Women</a></li>
                    </ul> --}}

            </ul>
        </div>

        <div class="col-lg-9">
            <div class="row">
                <div class="col-md-6">
                    <ul class="list-inline shop-top-menu pb-3 pt-1">
                        <li class="list-inline-item">
                            <a class="h3 text-dark text-decoration-none mr-3" href="#">Detail</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="h3 text-dark text-decoration-none mr-3" href="#">Produk</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 pb-4">
                    
                    <form class="d-flex" action="{{route('cari')}}" method="GET">
                        <input name="query" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-dark" type="submit">Search</button>
                    </form>
                   
                </div>
            </div>
            <div class="card mb-4 mt-4 mr-4 ml-4 product-wap rounded-0">
                <div class="row">                    
                    <div class="col-md-4">
                        <div class="card rounded-0">
                            {{-- <img class="card-img rounded-0 img-fluid" src="assets/img/shop_01.jpg"> --}}
                            <img src="{{asset($data->file)}}" class="card-img rounded-0  img-fluid" style="width:100%">
                            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled">
                                    <li><a class="btn btn-success text-white" href=""><i class="far fa-heart"></i></a></li>
                                    <li><a class="btn btn-success text-white mt-2" href=""><i class="far fa-eye"></i></a></li>
                                    <li><a class="btn btn-success text-white mt-2" href=""><i class="fas fa-cart-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h2 class="h3 text-decoration-none">{{$data->nama}}</h2>
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
                            <ul class="list-unstyled d-flex justify-content mb-1">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                            </ul>
                            <p class="mb-0">Rp. {{$data->harga}}</p>
                            <p class="list-unstyled d-flex justify-content">{!!$data->diskripsi!!}</p>
                                {{-- <a class="btn btn-success text-white" href="/shop/{{$data->id}}" >Details</a>  --}}
                        </div>
                    </div>
    
                </div>
            </div>
            <div div="row">
                <ul class="pagination pagination-lg justify-content-end">
                    {{-- {{$produk->links()}} --}}
                </ul>
            </div>
        </div>

    </div>
</div> -->
<!-- End Content -->

@endsection