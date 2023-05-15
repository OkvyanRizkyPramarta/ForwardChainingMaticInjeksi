@extends('layouts.admin.master')

@section('content')

    <!-- Breadcomb area Start-->
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="">
                                        <h3>Buat Data Baru Rule</h3>
                                        <button class="btn btn-default btn-icon-notika" style="margin-top:5%; width:100%; background-color:#354F8E;">
                                            <a href="{{ route('rule.index') }}" style="color:white;"> <i class="notika-icon notika-left-arrow"></i> Kembali </a>
                                        </button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<!-- Breadcomb area End-->
    <!-- Form Element area Start-->
    <div class="form-element-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list">
                        <form action="{{ route('rule.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="basic-tb-hd">
                                <h4>Kode Rules</h4>
                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <input type="text" name="id" class="form-control" placeholder="Contoh R001">
                                    </div>
                                </div>
                            </div>
                            <div class="basic-tb-hd">
                                <h4>Nama Kerusakan</h4>
                                <select class="form-control select2" name="damage_id" id="damage_id">
                                <option value="" disabled hidden selected>Pilih Kerusakan</option>
                                    @foreach($damage as $d)
                                    <option value="{{$d->id}}">{{$d->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="basic-tb-hd">
                                <h4>Nama Gejala</h4>
                                <select class="form-control select2" name="symptom_id" id="symptom_id">
                                <option value="" disabled hidden selected>Pilih Gejala</option>
                                    @foreach($symptom as $s)
                                    <option value="{{$s->id}}">{{$s->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button class="btn btn-default btn-icon-notika" style="margin-top:5%; width:100%; background-color:#354F8E; color:white;">
                            Buat Data Baru <i class="notika-icon notika-right-arrow"></i> 
                            </button>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Form Element area End-->

@endsection