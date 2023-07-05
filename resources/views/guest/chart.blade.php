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
                <div class="bg-white rounded p-5">
                    <h1 class="mb-4" style="text-align:center;">Statistik Diagnosa Kerusakan</h1>
                    <div class="col-lg-12" style="padding-bottom:20px;">
                        <h5 class="mb-4">Total Diagnosa Kerusakan</h5>
                        <canvas id="damageChart" class="rounded shadow" height="100%"></canvas>
                    </div>
                    <div class="col-lg-12" style="padding-bottom:20px;">
                        <h5 class="mb-4">Total Diagnosa Kerusakan Busi</h5>
                        <canvas id="busiChart" class="rounded shadow" height="100%"></canvas>
                    </div>
                    <div class="col-lg-12" style="padding-bottom:20px;">
                        <h5 class="mb-4">Total Diagnosa Kerusakan ECU</h5>
                        <canvas id="ecuChart" class="rounded shadow" height="100%"></canvas>
                    </div>
                    <div class="col-lg-12" style="padding-bottom:20px;">
                        <h5 class="mb-4">Total Diagnosa Kerusakan Filter Fuel Pump</h5>
                        <canvas id="filterFuelPumpChart" class="rounded shadow" height="100%"></canvas>
                    </div>
                    <div class="col-lg-12" style="padding-bottom:20px;">
                        <h5 class="mb-4">Total Diagnosa Kerusakan Filter Udara</h5>
                        <canvas id="filterUdaraChart" class="rounded shadow" height="100%"></canvas>
                    </div>
                    <div class="col-lg-12" style="padding-bottom:20px;">
                        <h5 class="mb-4">Total Diagnosa Kerusakan Injektor</h5>
                        <canvas id="injektorChart" class="rounded shadow" height="100%"></canvas>
                    </div>
                    <div class="col-lg-12" style="padding-bottom:20px;">
                        <h5 class="mb-4">Total Diagnosa Kerusakan Kampas Kopling</h5>
                        <canvas id="kampasKoplingChart" class="rounded shadow" height="100%"></canvas>
                    </div>
                    <div class="col-lg-12" style="padding-bottom:20px;">
                        <h5 class="mb-4">Total Diagnosa Kerusakan Piston</h5>
                        <canvas id="pistonChart" class="rounded shadow" height="100%"></canvas>
                    </div>
                    <div class="col-lg-12" style="padding-bottom:20px;">
                        <h5 class="mb-4">Total Diagnosa Kerusakan Roller</h5>
                        <canvas id="rollerChart" class="rounded shadow" height="100%"></canvas>
                    </div>
                    <div class="col-lg-12" style="padding-bottom:20px;">
                        <h5 class="mb-4">Total Diagnosa Kerusakan V - Belt</h5>
                        <canvas id="vbeltChart" class="rounded shadow" height="100%"></canvas>
                    </div>
                </div>
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
<script>
    var ctx = document.getElementById('damageChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',
// The data for our dataset
        data: {
            labels:  {!!json_encode($damageChart->labels)!!} ,
            datasets: [
                {
                    label: 'Jumlah Kendaraan',
                    backgroundColor: {!! json_encode($damageChart->colours)!!} ,
                    data:  {!! json_encode($damageChart->dataset)!!} ,
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

<script>
    var ctx = document.getElementById('busiChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',
// The data for our dataset
        data: {
            labels:  {!!json_encode($busiChart->labels)!!} ,
            datasets: [
                {
                    label: 'Jumlah Kendaraan',
                    backgroundColor: {!! json_encode($busiChart->colours)!!} ,
                    data:  {!! json_encode($busiChart->dataset)!!} ,
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

<script>
    var ctx = document.getElementById('ecuChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',
// The data for our dataset
        data: {
            labels:  {!!json_encode($ecuChart->labels)!!} ,
            datasets: [
                {
                    label: 'Jumlah Kendaraan',
                    backgroundColor: {!! json_encode($ecuChart->colours)!!} ,
                    data:  {!! json_encode($ecuChart->dataset)!!} ,
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

<script>
    var ctx = document.getElementById('filterFuelPumpChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',
// The data for our dataset
        data: {
            labels:  {!!json_encode($filterFuelPumpChart->labels)!!} ,
            datasets: [
                {
                    label: 'Jumlah Kendaraan',
                    backgroundColor: {!! json_encode($filterFuelPumpChart->colours)!!} ,
                    data:  {!! json_encode($filterFuelPumpChart->dataset)!!} ,
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

<script>
    var ctx = document.getElementById('filterUdaraChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',
// The data for our dataset
        data: {
            labels:  {!!json_encode($filterUdaraChart->labels)!!} ,
            datasets: [
                {
                    label: 'Jumlah Kendaraan',
                    backgroundColor: {!! json_encode($filterUdaraChart->colours)!!} ,
                    data:  {!! json_encode($filterUdaraChart->dataset)!!} ,
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

<script>
    var ctx = document.getElementById('injektorChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',
// The data for our dataset
        data: {
            labels:  {!!json_encode($injektorChart->labels)!!} ,
            datasets: [
                {
                    label: 'Jumlah Kendaraan',
                    backgroundColor: {!! json_encode($injektorChart->colours)!!} ,
                    data:  {!! json_encode($injektorChart->dataset)!!} ,
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

<script>
    var ctx = document.getElementById('kampasKoplingChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',
// The data for our dataset
        data: {
            labels:  {!!json_encode($kampasKoplingChart->labels)!!} ,
            datasets: [
                {
                    label: 'Jumlah Kendaraan',
                    backgroundColor: {!! json_encode($kampasKoplingChart->colours)!!} ,
                    data:  {!! json_encode($kampasKoplingChart->dataset)!!} ,
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

<script>
    var ctx = document.getElementById('pistonChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',
// The data for our dataset
        data: {
            labels:  {!!json_encode($pistonChart->labels)!!} ,
            datasets: [
                {
                    label: 'Jumlah Kendaraan',
                    backgroundColor: {!! json_encode($pistonChart->colours)!!} ,
                    data:  {!! json_encode($pistonChart->dataset)!!} ,
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

<script>
    var ctx = document.getElementById('rollerChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',
// The data for our dataset
        data: {
            labels:  {!!json_encode($rollerChart->labels)!!} ,
            datasets: [
                {
                    label: 'Jumlah Kendaraan',
                    backgroundColor: {!! json_encode($rollerChart->colours)!!} ,
                    data:  {!! json_encode($rollerChart->dataset)!!} ,
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

<script>
    var ctx = document.getElementById('vbeltChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',
// The data for our dataset
        data: {
            labels:  {!!json_encode($vbeltChart->labels)!!} ,
            datasets: [
                {
                    label: 'Jumlah Kendaraan',
                    backgroundColor: {!! json_encode($vbeltChart->colours)!!} ,
                    data:  {!! json_encode($vbeltChart->dataset)!!} ,
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