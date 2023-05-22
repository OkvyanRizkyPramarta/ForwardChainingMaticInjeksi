@extends('layouts.guest.master')

@section('content')

    <!-- Hero Start -->
    <div class="container-fluid py-5 mb-5">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-12 text-center text-lg-start">
                    <h1 class="display-4 mb-md-4 text-center">HALAMAN SPARE PART </h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
            @foreach($sparepart as $s)
                <div class="col-xl-4 col-lg-6">
                    <div class="bg-light rounded overflow-hidden text-center">
                        <img class="img-fluid w-100" src="{{asset('storage/'.$s->image)}}" alt="">
                        <div class="p-4">
                            <h5>{{ $s->name }}</h5>
                            <a class="btn btn-dark py-1 px-3" style="color:white;margin-top:15px;" href="{{ route('guest.sparepart.detail', $s->id) }}">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
    <!-- Blog End -->

@endsection