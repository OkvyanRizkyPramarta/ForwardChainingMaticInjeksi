@extends('layouts.guest.master')
<style>

.left {
  padding: 60px;
  border-bottom: 3px solid rgba(255, 165, 0, 0.1);
}

.left img {
  width: 100%;
}

.left .fa {
  cursor: pointer;
  position: absolute;
  top: 40px;
  color: #eaeaea;
  font-size: 18pt;
  transition: all .6s;
}

.left .fa:hover {
 color: #ccc; 
}

.left .fa-arrow-left {
  left: 40px;
}

.left .fa-arrow-right {
  right: 40px;
}

.right {
  border-left: 2px solid rgba(255, 165, 0, 0.1);
  padding: 40px;
  padding-bottom: 0;
  background: white;
}

.categorie {
  margin-top: 10px;
  font-size: 16pt;
  text-transform: uppercase;
  font-family: "Montserrat";
  font-weight: 300;
  color: black;
}

.product {
  font-size: 25pt;
  margin-top: 10px;
  font-weight: 500;
  color: black;
  font-family: "Montserrat";
}

.desc {
  margin-top: 20px;
  color: #777;
}

.desc li {
  font-size: 10pt;
  font-family: "Montserrat";
  margin: 15px -5px;
}

.title-colour {
  margin-top: 25px;
  font-size: 13pt;
  font-family: "Montserrat";
}

.color-black {
  display: inline-block;
  cursor: pointer;
  padding: 14px;
  background-color: #000;
  color: #fff;
  border-radius: 30px;
}

.color-white {
  cursor: pointer;
  display: inline-block;
  padding: 14px;
  background-color: #fff;
  color: #fff;
  margin-left: 10px;
  border-radius: 30px;
  border: 1px solid #ddd;
}

.price {
  margin-top: 20px;
  margin-bottom: 30px;
  font-size: 28px;
  font-family: "Montserrat";
  font-weight: 400;
  display: inline-flex;
  color:black;
}

</style>
@section('content')

    <div class="container">
        <div class="row">
            <div class="left col-md-5">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                <img class="headset" src="{{asset('storage/'.$sparepart->image)}}">
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </div>
            <div class="right col-md-6">
                <h3 class="product">{{ $sparepart->name }}</h3>
                <h4 class="product" style="font-size:20px;">Merk  : {{ $sparepart->merk }}</h4>
                <h5 class="product" style="font-size:20px;">Harga : Rp.{{ $sparepart->price }}</h5>
                <h5 class="product" style="font-size:20px;">Deskripsi</h5>
                <ul class="desc">
                {!! $sparepart->description !!}
                </ul>
            </div>
        </div>
    </div>

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