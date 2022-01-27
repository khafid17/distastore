@extends('frontend.master')
@section('judul', 'Produk Kategori')
@section('content')
   

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">
    <ol>
      <li><a href="/shop">Home</a></li>
      <li>Kategori Produk</li>
    </ol>
    <h2>Kategori Produk</h2>
  </div>
</section><!-- End Breadcrumbs -->

<section id="blog portfolio" class="blog portfolio">
      <div class="container" data-aos="fade-up">
        <div class="row">


       <!-- <div class="section-title">
         <h2 data-aos="fade-up">Portfolio</h2>
         <p data-aos="fade-up">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
       </div> -->
      <div class="row">
        <div class="col-md-9">
            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
            @foreach ($detail as $item)
              <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <img src="{{asset($item->file)}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>{{$item->nama}}</h4>
                  <p>Rp. {{$item->harga}}</p>
                  <!-- <a href="{{asset('frontend')}}/assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"></a> -->
                  <a href="/shop/{{$item->id}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            @endforeach
    
            </div>
            <div class="pagination justify-content-center page-item.active">
   
            </div>
        </div>

          <div class="col-md-3">
            <div class="sidebar">
              <h3 class="sidebar-title">Search</h3>
              <div class="sidebar-item search-form">
                <form action="{{route('cari')}}" method="GET">
                  <input name="query" type="text" placeholder="Search">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->
              <h3 class="sidebar-title">Categories</h3>
              <div class="sidebar-item categories">
                <ul>
                @foreach ($kategori as $item)
                    <li><a href="/shop/kategori/{{$item->id}}"><span>{{$item->nama}}</span></a></li>
                @endforeach
                </ul>
              </div><!-- End sidebar categories-->
            </div><!-- End sidebar -->
          </div><!-- End blog sidebar -->
      </div>
    </div>
    </div>
    </section><!-- End Portfolio Section -->
<!-- <div class="container py-5">
    <div class="row">

        <div class="col-lg-3">
            <h1 class="h2 pb-4">Kategori Produk</h1>
            <ul class="list-unstyled">
                @foreach ($kategori as $item)
                <li class="pb-3">
                    <a class="collapsed d-flex justify-content-between h3 text-decoration-none text-dark" href="/shop/kategori/{{$item->id}}">
                        {{$item->nama}}
                        <i class="fa fa-fw fa-chevron-circle-right mt-1"></i>
                    </a>

                </li>
                @endforeach
            </ul>
        </div>

        <div class="col-lg-9">
            <div class="row">
                <div class="col-md-6">
                    <ul class="list-inline shop-top-menu pb-3 pt-1">
                        <li class="list-inline-item">
                            <a class="h3 text-dark text-decoration-none mr-3" href="#">All</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="h3 text-dark text-decoration-none mr-3" href="#">{{$produk->kategoriproduk->nama}}</a>
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
            <div class="row">

                @foreach ($detail as $item)                    
                <div class="col-md-4">
                    <div class="card mb-4 product-wap rounded-0">
                        <div class="card rounded-0">
                            {{-- <img class="card-img rounded-0 img-fluid" src="assets/img/shop_01.jpg"> --}}
                            <img src="{{asset($item->file)}}" class="card-img rounded-0  img-fluid" style="width:100%">
                            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled">
                                    <li><a class="btn btn-success text-white" href=""><i class="far fa-heart"></i></a></li>
                                    <li><a class="btn btn-success text-white mt-2" href=""><i class="far fa-eye"></i></a></li>
                                    <li><a class="btn btn-success text-white mt-2" href=""><i class="fas fa-cart-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="" class="h3 text-decoration-none">{{$item->nama}}</a>
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
                            <p class="text-center mb-0">Rp. {{$item->harga}}</p>
                            <a class="btn btn-success text-white" href="/shop/{{$item->id}}">Details</a> 
                        </div>
                    </div>
                </div>
                @endforeach

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