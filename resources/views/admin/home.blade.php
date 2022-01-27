@extends('backend.master')
@section('title', 'Admin - Home')

@section('content')
<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
        <div class="x_title">
            <h2>Dashboard Dista Store</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>                
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="text-center">
            <h1> Selamat Datang di Website Dista Store</h1>
            <img src="{{asset('backend/production/images/dista.png')}}" alt="" srcset="" width="30%">
            <div class="row">
                <div class="col-md-6">
                    <h3><i class="fa fa-warning"></i><br> Disclaimer</h3>
                    <p>
                        Serdadu merupakan pusat galeri gift yang berdiri sejak tahun 2020, banyak aneka ragam dan kategori yang bisa di order, siantaranya Frame 2D, Frame 3D, Hammpers, Akrilik Wisuda dll.
                        hal yang paling menggesankan dapat anda dapatkan disini, segera cek dan dan dapatkan penawaran terbaik
                    </p>
                </div>
                <div class="col-md-6">
                    <h3><i class="fa fa-map-marker"></i><br> Lokasi</h3>
                    <p>
                        Grobogan, Semarang, Jawa Tengah
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection