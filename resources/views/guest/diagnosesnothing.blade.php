@extends('layouts.guest.master')

@section('content')

<!-- Hero Start -->
    <div class="container-fluid py-5 mb-5">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-12 text-center text-lg-start">
                    <h1 class="display-4 mb-md-4 text-center">Hasil Diagnosa Kerusakan Sepeda Motor Matic Injeksi</h1>
                </div>
            </div>
        </div>
    </div>
<!-- Hero End -->

<!-- Appointment Start -->
    <div class="container-fluid my-1 py-1" style="background-color:#354F8E;">
        <div class="container py-5">
            <div class="row gx-5">
                <div class="col-lg-6">
                    <img src="{{ asset('guest/assets/img/diagnosa3.png') }}" width="100%">
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <!-- <h5 class="text-white mb-5" style="text-align:justify;">
                        Nama : Pramarta Rizky
                    </h5>
                    <h5 class="text-white mb-5" style="text-align:justify;">
                        Jenis Sepeda Motor : Vespa Matic
                    </h5> -->
                    <h5 class="text-white mb-5" style="text-align:justify;">
                        Mohon Maaf Hasil Diagnosa Kerusakan Belum Ditemukan Berdasarkan Gejala Yang Dimasukkan
                    </h5>
                </div>
                
                <a class="btn rounded-pill py-3 px-5 me-3" 
                    style="margin-top:45px;background-color:white;color:#354F8E;" 
                    href="{{ route('guest.diagnoses') }}">
                    Kembali
                </a>
            </div>
        </div>
    </div>
<!-- Appointment End -->

@endsection