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
                                        <h3>Ubah Data Rule</h3>
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
                        <form action="{{ route('rule.update', $rule->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                            <div class="basic-tb-hd">
                                <h4>Nama Kerusakan</h4>
                                <!-- <select class="form-control select2" name="damage_id" id="damage_id">
                                <option value="" disabled hidden selected>{{ $rule->damage->name }}</option>
                                    @foreach($damage as $d)
                                    <option value="{{$d->id}}">{{$d->name}}</option>
                                    @endforeach
                                </select> -->
                                <select class="form-control select2" name="damage_id" id="damage_id">
                                    @foreach($damage as $d)
                                    <option value="{{$d->id}}" {{ $rule->damage_id == $d->id ? 'selected' : '' }}>{{$d->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="basic-tb-hd">
                                <h4>Nama Gejala</h4>
                                <!-- <select class="form-control select2" name="symptom_id" id="symptom_id">
                                <option value="" disabled hidden selected>{{ $rule->symptom->name }}</option>
                                    @foreach($symptom as $s)
                                    <option value="{{$s->id}}">{{$s->name}}</option>
                                    @endforeach
                                </select> -->
                                <select class="form-control select2" name="symptom_id" id="symptom_id">
                                    @foreach($symptom as $s)
                                    <option value="{{$s->id}}" {{ $rule->symptom_id == $s->id ? 'selected' : '' }}>{{$s->name}}</option>
                                    @endforeach
                                </select>
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