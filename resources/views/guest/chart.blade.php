@extends('layouts.guest.master')

@section('content')

<!-- Hero Start -->
<div class="container-fluid py-5 mb-5">
    <div class="container py-5">
        <div class="row justify-content-start">
            <div class="col-lg-12 text-center text-lg-start">
                <h1 class="display-4 mb-md-4 text-center">Halaman Statistik Diagnosa Kerusakan</h1>
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
                @foreach ($getAllChart as $gkey => $gval)
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$gkey}}" aria-expanded="false" aria-controls="collapse{{$gkey}}">
                            {{$gval->title}}
                        </button>
                        </h2>
                        <div id="collapse{{$gkey}}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <canvas id="chart{{$gkey}}" class="rounded shadow" height="100px"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Appointment End -->

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<!-- CHARTS -->
@foreach ($getAllChart as $gkey => $gval)
<script>
    console.log('message','chart{{$gkey}}')
    var ctx = document.getElementById('chart{{$gkey}}').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'pie',
// The data for our dataset
        data: {
            labels:  {!!json_encode($gval->labels)!!} ,
            datasets: [
                {
                    label: 'Jumlah Kendaraan',
                    backgroundColor: {!! json_encode($gval->colours)!!} ,
                    data:  {!! json_encode($gval->dataset)!!} ,
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
@endforeach

@endsection