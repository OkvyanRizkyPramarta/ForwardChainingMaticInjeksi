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
                                        <h3>Tabel Data History Diagnosis</h3>
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
                                        <th>Nama Sepeda Motor</th>
                                        <th>Nama Kerusakan</th>
                                        <th>Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($history as $h)
                                    <tr>
                                        <td>{{$h->motorcycle->name}}</td>
                                        <td>
                                            @foreach($h->history_damages as $damage)
                                            <ul style="list-style-type:disc;">
                                            <li>{{$damage->damage}}</li>
                                            </ul>
                                            @endforeach
                                        </td>
                                        <td>{{date('d-m-Y : h:m', strtotime($h->created_at));}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Nama Sepeda Motor</th>
                                        <th>Nama Kerusakan</th>
                                        <th>Tanggal</th>
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