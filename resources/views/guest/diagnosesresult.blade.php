@extends('layouts.guest.master')

<style>
.large-2 {
  float: left;
  height: 300px;
  overflow-y: scroll;
  margin-bottom: 25px;
  width: 90%;
  background: #354F8E;
}

.force-overflow {
  min-height: 450px;
}

.large-2::-webkit-scrollbar-track {
  border: 1px solid #000;
  padding: 2px 0;
  background-color: #404040;
}

.large-2::-webkit-scrollbar {
  width: 0.5px;
}

.large-2::-webkit-scrollbar-thumb {
  border-radius: 10px;
  background-color: #737272;
  border: 1px solid #000;
}
</style>

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
                    <div class="custom">
                        <div id="front_videos">
                            <div class="large-2">
                                <div class="force-overflow">
                                @foreach ($temp_damage as $td)
                                    {!! $td->solution !!}
                                @endforeach
                                </div>
                            </div>
                        </div>
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