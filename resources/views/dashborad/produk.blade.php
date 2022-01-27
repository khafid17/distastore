@extends('frontend.master')
@section('judul', 'Produk')
@section('content')
   

  <main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">
    <ol>
      <li><a href="/shop">Home</a></li>
      <li>Produk</li>
    </ol>
    <h2>Produk</h2>
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
            @foreach ($produk as $item)
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
                <!-- <ul class="pagination pagination-lg justify-content-end"> -->
                    {{$produk->links()}}
                <!-- </ul> -->
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

@endsection