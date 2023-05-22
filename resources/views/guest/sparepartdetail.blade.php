@extends('layouts.guest.master')

@section('content')

    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12">
                    <h1 class="mb-md-4 text-center">{{ $sparepart->name }}</h1>
                </div>
                <div class="col-xl-7 col-lg-12">
                    <img class="img-fluid center" style="display:block;width:70%;margin-top:10%;margin-left:10%;" src="{{asset('storage/'.$sparepart->image)}}" alt="">
                </div>
                <div class="col-xl-5 col-lg-12">
                    <h3 class="" style="font-size:20px;text-align:justify;color:black;margin-top:10%;">Informasi Lengkap</h3>
                    <h3 class="" style="font-size:20px;text-align:justify;color:black;">Merk : {{ $sparepart->merk }}</h3>
                    <h3 class="" style="font-size:20px;text-align:justify;color:black;">Harga : Rp.{{ $sparepart->price }}</h3>
                    <h3 class="" style="font-size:20px;text-align:justify;color:black;">description :</h3>
                    <h3 class="" style="font-size:18px;text-align:justify;color:black;">{!! $sparepart->description !!}</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->

    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
            <h1 class="mb-md-4 text-center">Spare Part Terbaru</h1>
            @foreach($newsparepart as $ns)
                <div class="col-xl-4 col-lg-6">
                    <div class="bg-light rounded overflow-hidden text-center">
                        <img class="img-fluid w-100" src="{{asset('storage/'.$ns->image)}}" alt="">
                        <div class="p-4">
                            <h5>{{ $ns->name }}</h5>
                            <a class="btn btn-dark py-1 px-3" style="color:white;margin-top:15px;" href="{{ route('guest.sparepart.detail', $ns->id) }}">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
    <!-- Blog End -->
    
@endsection