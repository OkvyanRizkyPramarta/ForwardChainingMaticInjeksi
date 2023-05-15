@extends('layouts.guest.master')

@section('content')

    <!-- Hero Start -->
    <div class="container-fluid py-5 mb-5">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-12 text-center text-lg-start">
                    <h1 class="display-4 mb-md-4 text-center">HALAMAN BERITA / INFORMASI </h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
            @foreach($article as $a)
                <div class="col-xl-4 col-lg-6">
                    <div class="bg-light rounded overflow-hidden">
                        <img class="img-fluid w-100" src="{{asset('storage/'.$a->image)}}" alt="">
                        <div class="p-4">
                            <a class="h3 d-block mb-3" href="">{{ $a->title }}</a>
                            <p class="m-0">{!! Str::limit($a->description, 100) !!} </p> 
                        </div>
                        <div class="d-flex justify-content-between border-top p-4">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-2" src="img/user.jpg" width="25" height="25" alt="">
                                <small>{{ $a->writer }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
    <!-- Blog End -->
    
@endsection