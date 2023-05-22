@extends('layouts.guest.master')

@section('content')

    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12">
                    <h1 class="mb-md-4 text-center">{{ $article->title }}</h1>
                    <img class="img-fluid center" style="display:block;margin-left:auto;margin-right:auto;width:70%;" src="{{asset('storage/'.$article->image)}}" alt="">
                    <h5 class="text-primary" style="font-size:14px;margin-top:50px;">{{ $article->writer }}, {{ $article->created_at }}</h5>
                    <h5 class="" style="font-size:18px;text-align:justify;">{!! $article->description !!}</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->

    

    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
            <h1 class="mb-md-4 text-center">Artikel Terbaru</h1>
            @foreach($newarticle as $a)
                <div class="col-xl-4 col-lg-6">
                    <div class="bg-light rounded overflow-hidden">
                        <img class="img-fluid w-100" src="{{asset('storage/'.$a->image)}}" alt="">
                        <div class="p-4">
                            <a class="h3 d-block mb-3" href="{{ route('guest.article.detail', $a->id) }}">{!! Str::limit($a->title, 50) !!} </a>
                            <p class="m-0">{!! Str::limit($a->description, 100) !!} </p> 
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
    <!-- Blog End -->
    
@endsection