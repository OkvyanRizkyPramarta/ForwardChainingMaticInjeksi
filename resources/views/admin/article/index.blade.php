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
                                        <h3>Tabel Data Berita / Informasi</h3>
										<button class="btn btn-default btn-icon-notika" style="margin-top:5%; width:100%; background-color:#354F8E; ">
                                            <a href="{{ route('article.create') }}" style="color:white;"> Buat Data Baru  <i class="notika-icon notika-up-arrow"></i><a>
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
                                        <th width="15%">Judul</th>
                                        <th width="10%">Penulis</th>
                                        <th width="25%">Deskripsi</th>
                                        <th width="25%">Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($article as $a)
                                    <tr>
                                        <td>{{ $a->title }}</td>
                                        <td>{{ $a->writer }}</td>
                                        <td>{!! $a->description !!}</td>
                                        <td>
                                            <img width="250px" src="{{asset('storage/'.$a->image)}}">
                                        </td>
                                        <td>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <a href="{{ route('article.edit', $a->id) }}" class="btn btn-warning notika-btn-warning">
                                                    Ganti Data 
                                                </a>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <form action="{{ route('article.destroy', $a->id) }}" method="POST" class="d-inline">
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
                                        <th>Judul</th>
                                        <th>Penulis</th>
                                        <th>Deskripsi</th>
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