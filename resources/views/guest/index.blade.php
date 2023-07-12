@extends('layouts.guest.master')

@section('content')

    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 550px; ">
                    <div class="position-relative h-100">
                        <img class="position-absolute rounded" src="{{ asset('guest/assets/img/mekanik.png') }}" 
                        style="object-fit: cover; " width="100%">
                    </div> 
                </div>
                <div class="col-lg-7" style="text-align:justify;color:black;">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-uppercase border-bottom border-5">Tentang Kami</h5>
                        <h1 class="display-4" style="color:black;">DIAGTORSI</h1>
                    </div>
                    <b>
                    <p>
                        Merupakan sistem pakar atau program yang bertujuan untuk mengenal suatu masalah 
                        yang begitu spesifik hingga proses analisis matematis dari permasalahan 
                        yang dialami.
                    </p>
                    <p>
                        Website ini memiliki layanan untuk menyediakan macam informasi 
                        seperti diagnosa kerusakan, berita atau informasi, spare parts untuk kendaraan 
                        sepeda motor injeksi.
                    </p>
                    <p>
                        Pada halaman Diagnosa pengguna dapat melakukan diagnosa terhadap kerusakan 
                        yang dialami. Pada halaman terdapat 20 gejala kerusakan yang dapat dipilih 
                        oleh pengguna untuk dapat menemukan kerusakan yang belum diketahui.  
                    </p>
                    <p>
                        Pada halaman Statistik Kerusakan pengguna dapat melihat statistik data terkait 
                        kerusakan apa saja yang dialami oleh pengguna lainnya.
                    </p>
                    <p>
                        Pada halaman Berita atau informasi pengguna dapat membaca artikel tentang 
                        kendaraan sepeda motor matic injeksi mulai dari berita yang sudah lama hingga 
                        perkembangan yang terbaru. 
                    </p>
                    <p>
                        Pada halaman Spare Parts pengguna dapat melihat spare part apa saja yang 
                        berhubungan dengan kendaraan sepeda motor injeksi sesuai dengan yang program
                        berikan.
                    </p>
                    </b>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    
    <!-- Appointment Start -->
    <div class="container-fluid my-5 py-5" style="background-color:#354F8E;">
        <div class="container py-5">
            <div class="row gx-5">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h1 class="display-4 text-white " >Diagnosa Kerusakan Sepeda Motor Matic Injeksi</h1>
                    </div>
                    <p class="text-white mb-5" style="text-align:justify;">
                        Memberikan informasi mengenai kerusakan <b>sepeda motor matic injeksi</b> 
                        berdasarkan gejala yang dialami pengguna. Terdapat 20 gejala kerusakan 
                        yang dapat dipilih oleh pengguna untuk dapat menemukan kerusakan yang 
                        belum diketahui
                    </p>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('guest/assets/img/diagnosa3.png') }}" width="100%">
                </div>
                <a class="btn rounded-pill py-3 px-5 me-3" href="{{ route('guest.diagnoses') }}" style="margin-top:45px;background-color:white;color:#354F8E;">Selengkapnya</a>
            </div>
        </div>
    </div>
    <!-- Appointment End -->

    <!-- Pricing Plan Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h1 class="display-4">SPART PARTS</h1>
            </div>
            <div style="text-align:right;">
                <a class="btn btn-dark py-2 px-3" href="{{ route('guest.sparepart') }}" style="color:white;margin-bottom:15px;margin-right:4%;">Lebih Banyak</a>
            </div>
            <div class="owl-carousel price-carousel position-relative" style="padding: 0 45px 45px 45px;">
                @foreach($newsparepart as $ns)
                <div class="bg-light rounded text-center">
                    <div class="position-relative">
                        <img class="img-fluid rounded-top" src="{{asset('storage/'.$ns->image)}}" alt="">
                    </div>
                    <div class="py-5">
                        <h5 style="padding-left:10%;text-align:left;">{!! Str::limit($ns->name, 40) !!}</h5>
                        <a class="btn btn-dark py-1 px-3" style="color:white;margin-top:15px;" href="{{ route('guest.sparepart.detail', $ns->id) }}">Selengkapnya</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->

    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h1 class="display-4">BERITA / INFORMASI</h1>
            </div>
            <div style="text-align:right;">
                <a class="btn btn-dark py-2 px-3" href="{{ route('guest.article') }}" style="color:white;margin-bottom:15px;">Lebih Banyak</a>
            </div>
            <div class="row g-5">
                @foreach($newarticle as $a)
                    <div class="col-xl-4 col-lg-6">
                        <div class="bg-light rounded overflow-hidden text-center">
                            <img class="img-fluid w-100" src="{{asset('storage/'.$a->image)}}" alt="">
                            <div class="p-4">
                                <h5>{{ $a->title }}</h5>
                                <a class="btn btn-dark py-1 px-3" style="color:white;margin-top:15px;" href="{{ route('guest.article.detail', $a->id) }}">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Blog End -->

@endsection