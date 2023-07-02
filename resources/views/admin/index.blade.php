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
                                <a href="{{ route('guest.article.detail', $na->id) }}">
                                    <div class="recent-post-flex">
                                        <div class="recent-post-img">
                                            <img src="img/post/2.jpg" alt="" />
                                        </div>
                                        <div class="recent-post-it-ctn">
                                            <h2>Judul : {!! Str::limit($na->title, 40) !!}</h2>
                                            <p>{!! Str::limit($na->description, 70) !!}</p><br>
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

    <!-- Start chart area-->
    <div class="notika-email-post-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="recent-items-wp notika-shadow sm-res-mg-t-30">
                        <div class="rc-it-ltd">
                            <div class="recent-items-ctn">
                                <div class="recent-items-title">
                                    <h2>Statistik Diagnosa Kerusakan Berdasarkan Kendaraan</h2>
                                </div>
                            </div>
                            <div class="bg-white rounded p-5">
                                <div class="col-lg-12">
                                    <canvas id="userChart" class="rounded shadow" style="width: 100%;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End chart area-->

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<!-- CHARTS -->
<script>
    var ctx = document.getElementById('userChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',
// The data for our dataset
        data: {
            labels:  {!!json_encode($chart->labels)!!} ,
            datasets: [
                {
                    label: 'Jumlah Kendaraan',
                    backgroundColor: {!! json_encode($chart->colours)!!} ,
                    data:  {!! json_encode($chart->dataset)!!} ,
                },
            ]
        },
// Configuration options go here
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        callback: function(value) {if (value % 1 === 0) {return value;}}
                    },
                    scaleLabel: {
                        display: false
                    }
                }]
            },
            legend: {
                labels: {
                    // This more specific font property overrides the global property
                    fontColor: '#122C4B',
                    fontFamily: "'Muli', sans-serif",
                    padding: 25,
                    boxWidth: 25,
                    fontSize: 14,
                }
            },
            layout: {
                padding: {
                    left: 10,
                    right: 10,
                    top: 0,
                    bottom: 10
                }
            }
        }
    });
</script>
@endsection