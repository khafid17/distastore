@extends('frontend.master')
@section('judul', 'Home')
@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container" data-aos="fade-in">
      <h1>Welcome to Dista Store</h1>
      <h2>We are team of talented designers making websites with Bootstrap</h2>
      <!-- <div class="d-flex align-items-center">
        <i class="bx bxs-right-arrow-alt get-started-icon"></i>
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
      </div> -->
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">


      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= About Section ======= -->
    <section class="about section-bg">
      <div class="container">

      </div>
    </section><!-- End About Section -->

    <!-- ======= Team Section ======= -->
    <section class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-up">Kategori Produk</h2>
          <p data-aos="fade-up">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="member">
              <div class="member-img">
                <img src="{{asset('frontend')}}/assets/img/portfolio/accesories.jpeg" class="img-fluid" alt="">
                <div class="social">
                <a href="">Details</a>
                </div>
              </div>
              <div class="member-info">
                <h4>Accessories</h4>
                <!-- <span>Chief Executive Officer</span> -->
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="{{asset('frontend')}}/assets/img/portfolio/outfit.jpg" class="img-fluid" alt="">
                <div class="social">
                <a href="">Details</a>
                </div>
              </div>
              <div class="member-info">
                <h4>Outfit</h4>
                <!-- <span>Product Manager</span> -->
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="{{asset('frontend')}}/assets/img/portfolio/bags.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href="">Details</a>
                </div>
              </div>
              <div class="member-info">
                <h4>Bags</h4>
                <!-- <span>CTO</span> -->
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="{{asset('frontend')}}/assets/img/portfolio/skincare.jpg" class="img-fluid" alt="">
                <div class="social">
                <a href="">Details</a>
                </div>
              </div>
              <div class="member-info">
                <h4>Skincare</h4>
                <!-- <span>Accountant</span> -->
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

     <!-- ======= Portfolio Section ======= -->
     <section class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-up">Produk Terbaru</h2>
          <p data-aos="fade-up">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">

          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
        @foreach ($produk as $item)
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="{{asset($item->file)}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>{{$item->nama}}</h4>
              <p>{{$item->harga}}</p>
              <!-- <a href="{{asset('frontend')}}/assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"></a> -->
              <a href="/shop/{{$item->id}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        @endforeach

        </div>

      </div>
    </section><!-- End Portfolio Section -->


      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

        <!-- Start Featured Product -->
        <!-- <section class="bg-light">
            <div class="container py-5">
                <div class="row text-center py-3">
                    <div class="col-lg-6 m-auto">
                        <h1 class="h1">Produk Terbaru</h1>
                        <p>
                            beberapa produk dengan peminat paling banyak, segera pesan sebelum kehabisan
                        </p>
                    </div>
                </div>
                <div class="row">
                    @foreach ($produk as $item)
                        <div class="col-12 col-md-4 mb-4">
                            <div class="card h-100">
                                <a href="/shop/{{$item->id}}">
                                    <img src="{{asset($item->file)}}" class="card-img-top rounded-0  img-fluid" style="width:100%">
                                    {{-- <img src="{{asset('frontend')}}/assets/img/produk3.png" class="card-img-top" alt="..."> --}}
                                </a>
                                <div class="card-body">
                                    <ul class="list-unstyled d-flex justify-content-between">
                                        <li>
                                            <i class="text-warning fa fa-star"></i>
                                            <i class="text-warning fa fa-star"></i>
                                            <i class="text-warning fa fa-star"></i>
                                            <i class="text-warning fa fa-star"></i>
                                            <i class="text-warning fa fa-star"></i>
                                        </li>
                                        <li class="text-muted text-right">{{$item->harga}}</li>
                                    </ul>
                                    <a href="/shop/{{$item->id}}" class="h2 text-decoration-none text-dark">{{$item->nama}}</a>
                                    <p class="card-text">
                                        Pilih produk, pesan, langsung diantar
                                    </p>
                                    <p class="text-muted">Reviews (24)</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section> -->
        <!-- End Featured Product -->

@endsection