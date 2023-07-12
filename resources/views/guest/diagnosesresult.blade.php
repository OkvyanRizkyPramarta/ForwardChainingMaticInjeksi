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
                <div class="col-lg-4">
                    <img src="{{ asset('guest/assets/img/diagnosa3.png') }}" width="100%">
                </div>
                <div class="col-lg-5" style="padding-left: 10%; padding-top: 15px;">
                    <p style="text-align:justify; color:white; font-size:16px;">
                        Nama Kendaraan : {{ $temp_motorcycle->name }}
                    </p>
                    <p style="text-align:justify; color:white; font-size:16px;">
                        Kerusakan : </br>
                        @foreach ($temp_damage as $td)
                            {{ $td->name }} </br>
                        @endforeach
                    </p>
                    <p style="text-align:justify; color:white; font-size:16px;">
                        Kilo Meter : {{ $temp_km }}
                    </p>
                </div>                
                <div class="col-lg-12" style="padding-left: 10%; padding-top: 15px;">
                    <p style="text-align:justify; color:white; font-size:16px;">
                        Solusi Atau Saran : <br>
                    </p>
                    <div style="background-color:#354F8E; height:28%; overflow:scroll; border:none;">
                        @foreach ($temp_damage as $td)
                            {!! $td->solution !!}
                        @endforeach
                    </div>
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