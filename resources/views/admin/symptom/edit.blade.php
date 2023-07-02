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
                                        <h3>Ubah Data Gejala</h3>
                                        <button class="btn btn-default btn-icon-notika" style="margin-top:5%; width:100%; background-color:#354F8E;">
                                            <a href="{{ route('symptom.index') }}" style="color:white;"> <i class="notika-icon notika-left-arrow"></i> Kembali </a>
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
                        <form action="{{ route('symptom.update', $symptom->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                            <div class="basic-tb-hd">
                                <h4>Kode Gejala</h4>
                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <input type="text" name="code" class="form-control" value="{{ $symptom->code }}">
                                    </div>
                                </div>
                            </div>
                            <div class="basic-tb-hd">
                                <h4>Nama Gejala</h4>
                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <input type="text" name="name" class="form-control" value="{{ $symptom->name }}">
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-default btn-icon-notika" style="margin-top:5%; width:100%; background-color:#354F8E; color:white;">
                            Ubah Data <i class="notika-icon notika-right-arrow"></i> 
                            </button>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Form Element area End-->

@endsection