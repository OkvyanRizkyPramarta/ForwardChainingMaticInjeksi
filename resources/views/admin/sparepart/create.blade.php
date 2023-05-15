@extends('layouts.admin.master')

<!-- include libraries(jQuery, bootstrap) -->
    
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


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
                                        <h3>Buat Data Baru Spare Part</h3>
                                        <button class="btn btn-default btn-icon-notika" style="margin-top:5%; width:100%; background-color:#354F8E;">
                                            <a href="{{ route('sparepart.index') }}" style="color:white;"> <i class="notika-icon notika-left-arrow"></i> Kembali </a>
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
                        <form action="{{ route('sparepart.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="basic-tb-hd">
                                <h4>Nama Spare Part</h4>
                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <input type="text" name="name" class="form-control" placeholder="Contoh V-Belt Vespa Matic">
                                    </div>
                                </div>
                            </div>
                            <div class="basic-tb-hd">
                                <h4>Merk</h4>
                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <input type="text" name="merk" class="form-control" placeholder="Contoh SSS">
                                    </div>
                                </div>
                            </div>
                            <div class="basic-tb-hd">
                                <h4>Description</h4>
                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <textarea name="description" class="form-control" id="summernote"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="basic-tb-hd">
                                <h4>Harga</h4>
                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <input type="number" name="price" class="form-control" placeholder="Contoh 100000">
                                    </div>
                                </div>
                            </div>
                            <div class="basic-tb-hd">
                                <h4>Image</h4>
                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                </div>
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

<!-- summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script type="text/javascript">
    $('#summernote').summernote({
        height: 150
    });
</script>
@endsection