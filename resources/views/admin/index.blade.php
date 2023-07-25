@extends('layouts.admin.master')

<style>
a { 
    color: inherit; 
}
</style>
@section('content')

    <!-- Start Status area -->
    <div class="notika-status-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter">{{$damage}}</span></h2>
                            <p>Total Kerusakan</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter">{{$symptom}}</span></h2>
                            <p>Total Gejala</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter">{{$sparepart}}</span></h2>
                            <p>Total Spare Parts</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter">{{$article}}</span></h2>
                            <p>Total Berita / Informasi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Status area-->

    <!-- Start Email Statistic area-->
    <div class="notika-email-post-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="recent-post-wrapper notika-shadow sm-res-mg-t-30 tb-res-ds-n dk-res-ds">
                        <div class="recent-post-ctn">
                            <div class="recent-post-title">
                                <h2>Berita / Informasi Terbaru</h2>
                            </div>
                        </div>
                        <div class="recent-post-items">
                            @foreach($newarticle as $na)
                            <div class="recent-post-signle rct-pt-mg-wp">
                                <a href="{{ route('guest.article.detail', $na->id) }}" target="_blank">
                                    <div class="recent-post-flex">
                                        <div class="recent-post-img">
                                            <img src="img/post/2.jpg" alt="" />
                                        </div>
                                        <div class="recent-post-it-ctn">
                                            <h2>Judul : {!! Str::limit($na->title, 40) !!}</h2><br>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                            <div class="recent-post-signle">
                                <a href="#">
                                    <div class="recent-post-flex rc-ps-vw">
                                        <div class="recent-post-line rct-pt-mg">
                                            <a href="{{ route('article.index') }}" style="color:#354F8E;">Lebih Banyak</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="recent-items-wp notika-shadow sm-res-mg-t-30">
                        <div class="rc-it-ltd">
                            <div class="recent-items-ctn">
                                <div class="recent-items-title">
                                    <h2>Spart Parts Terbaru</h2>
                                </div>
                            </div>
                            <div class="recent-items-inn">
                                <table class="table table-inner table-vmiddle">
                                    <thead>
                                        <tr>
                                            <th width="50%">Nama Spare Part</th>
                                            <th>Merk</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($newsparepart as $ns)
                                        <tr>
                                            <td>{!! Str::limit($ns->name, 20) !!}</td>
                                            <td>{{ $ns-> merk }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="recent-post-signle">
                                    <a href="#">
                                        <div class="recent-post-flex rc-ps-vw">
                                            <div class="recent-post-line rct-pt-mg">
                                                <a href="{{ route('article.index') }}" style="color:#354F8E;">Lebih Banyak</a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Email Statistic area-->
@endsection