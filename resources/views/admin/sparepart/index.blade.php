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
									<div class="breadcomb-ctn">
                                        <h3>Tabel Data Spare Part</h3>
										<button class="btn btn-default btn-icon-notika" style="margin-top:5%; width:100%; background-color:#354F8E; ">
                                            <a href="{{ route('sparepart.create') }}" style="color:white;"> Buat Data Baru  <i class="notika-icon notika-up-arrow"></i><a>
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
    <!-- Data Table area Start-->
    <div class="data-table-area" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th width="15%">Nama Spare Part</th>
                                        <th width="10%">Merk</th>
                                        <th width="25%">Deskripsi</th>
                                        <th width="10%">Harga</th>
                                        <th width="15%">Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($sparepart as $s)
                                    <tr>
                                        <td>{{ $s->name }}</td>
                                        <td>{{ $s->merk }}</td>
                                        <td>{!! $s->description !!}</td>
                                        <td>{{ $s->price }}</td>
                                        <td>
                                            <img width="250px" src="{{asset('storage/'.$s->image)}}">
                                        </td>
                                        <td>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <a href="{{ route('sparepart.edit', $s->id) }}" class="btn btn-warning notika-btn-warning">
                                                    Ganti Data 
                                                </a>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <form action="{{ route('sparepart.destroy', $s->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                                <button class="btn btn-danger notika-btn-danger">
                                                    Hapus Data 
                                                </button>
                                            </form>
                                            </div>
                                        </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Nama Spare Part</th>
                                        <th>Merk</th>
                                        <th>Deskripsi</th>
                                        <th>Harga</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->

@endsection