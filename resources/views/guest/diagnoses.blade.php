      <style>
        @supports (-webkit-appearance: none) or (-moz-appearance: none) {
          .checkbox-wrapper-13 input[type=checkbox] {
            --active: #275EFE;
            --active-inner: #fff;
            --focus: 2px rgba(39, 94, 254, .3);
            --border: #BBC1E1;
            --border-hover: #275EFE;
            --background: #fff;
            --disabled: #F6F8FF;
            --disabled-inner: #E1E6F9;
            -webkit-appearance: none;
            -moz-appearance: none;
            height: 21px;
            outline: none;
            display: inline-block;
            vertical-align: top;
            position: relative;
            margin: 0;
            cursor: pointer;
            border: 1px solid var(--bc, var(--border));
            background: var(--b, var(--background));
            transition: background 0.3s, border-color 0.3s, box-shadow 0.2s;
          }
          .checkbox-wrapper-13 input[type=checkbox]:after {
            content: "";
            display: block;
            left: 0;
            top: 0;
            position: absolute;
            transition: transform var(--d-t, 0.3s) var(--d-t-e, ease), opacity var(--d-o, 0.2s);
          }
          .checkbox-wrapper-13 input[type=checkbox]:checked {
            --b: var(--active);
            --bc: var(--active);
            --d-o: .3s;
            --d-t: .6s;
            --d-t-e: cubic-bezier(.2, .85, .32, 1.2);
          }
          .checkbox-wrapper-13 input[type=checkbox]:disabled {
            --b: var(--disabled);
            cursor: not-allowed;
            opacity: 0.9;
          }
          .checkbox-wrapper-13 input[type=checkbox]:disabled:checked {
            --b: var(--disabled-inner);
            --bc: var(--border);
          }
          .checkbox-wrapper-13 input[type=checkbox]:disabled + label {
            cursor: not-allowed;
          }
          .checkbox-wrapper-13 input[type=checkbox]:hover:not(:checked):not(:disabled) {
            --bc: var(--border-hover);
          }
          .checkbox-wrapper-13 input[type=checkbox]:focus {
            box-shadow: 0 0 0 var(--focus);
          }
          .checkbox-wrapper-13 input[type=checkbox]:not(.switch) {
            width: 21px;
          }
          .checkbox-wrapper-13 input[type=checkbox]:not(.switch):after {
            opacity: var(--o, 0);
          }
          .checkbox-wrapper-13 input[type=checkbox]:not(.switch):checked {
            --o: 1;
          }
          .checkbox-wrapper-13 input[type=checkbox] + label {
            display: inline-block;
            vertical-align: middle;
            cursor: pointer;
            margin-left: 4px;
          }
      
          .checkbox-wrapper-13 input[type=checkbox]:not(.switch) {
            border-radius: 7px;
          }
          .checkbox-wrapper-13 input[type=checkbox]:not(.switch):after {
            width: 5px;
            height: 9px;
            border: 2px solid var(--active-inner);
            border-top: 0;
            border-left: 0;
            left: 7px;
            top: 4px;
            transform: rotate(var(--r, 20deg));
          }
          .checkbox-wrapper-13 input[type=checkbox]:not(.switch):checked {
            --r: 43deg;
          }
        }
      
        .checkbox-wrapper-13 * {
          box-sizing: inherit;
        }
        .checkbox-wrapper-13 *:before,
        .checkbox-wrapper-13 *:after {
          box-sizing: inherit;
        }
      </style>
      
@extends('layouts.guest.master')

@section('content')


    <!-- Hero Start -->
    <div class="container-fluid py-5 mb-5">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-12 text-center text-lg-start">
                    <h1 class="display-4 mb-md-4 text-center">Sistem Pakar Diagnosa Kerusakan Sepeda Motor Matic Injeksi</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Appointment Start -->
    <div class="container-fluid my-5 py-5" style="background-color:#354F8E;">
        <div class="container py-5">
            <div class="row gx-5">
                <div class="col-lg-12">
                    <div class="bg-white rounded p-5">
                        <h1 class="mb-4">Diagnosa Kerusakan Sepeda Motor Matic Injeksi</h1>
                        <form action="{{ route('guest.diagnoses.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="row g-3">
                                <!--<div class="col-12 col-sm-6">
                                    <select class="form-select bg-light border-0" style="height: 55px;">
                                        <option selected>Choose Department</option>
                                        <option value="1">Department 1</option>
                                        <option value="2">Department 2</option>
                                        <option value="3">Department 3</option>
                                    </select>
                                </div> -->
                                <!-- <div class="col-12 col-sm-12">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Silahkan Masukkan Nama Anda" style="height: 55px;">
                                </div> -->
                                <div class="col-12 col-sm-12">
                                    <input type="number" name="km" class="form-control bg-light border-0" placeholder="Silahkan Masukkan Kilo Meter Sepeda Motor" style="height: 55px;">
                                </div> 
                                <div class="col-12 col-sm-12">
                                  <select id="motorcycle" name="motorcycle_id" class="form-control bg-light border-0">
                                    @foreach($motorcycle as $m)
                                    <option value="{{ $m->id }}">{{ $m->name }}</option>
                                    @endforeach
                                  </select>
                                </div> 
                                <p>Centang data gejala sesuai dengan apa yang pengunjung 
                                  alami untuk memperoleh informasi yang benar. 
                                </p>
                                @foreach($symptom as $s)
                                <div class="col-12 col-sm-12 checkbox-wrapper-13">
                                    <input id="c1-13" type="checkbox" value="{{ $s->code }}" name="{{ $s->id }}">
                                    <label for="c1-13">{{ $s->name }}</label>
                                </div>
                                @endforeach
                                <button class="btn w-100 py-3" style="background-color:#354F8E;color:white;">
                                  Kirim 
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->

@endsection