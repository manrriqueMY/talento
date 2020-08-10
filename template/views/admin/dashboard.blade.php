@extends('layouts.app')
@section('content')

<div id="content-wrapper">
    <div class="container">
        <div class="dashboard">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <b>N° de Ofertas</b>
                                    <span class="btn btn-danger"><i class="fas fa-archive"></i></span>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4"><h6><b>156</b></h6></div>
                                    <div class="col-md-8"><h6>En el año</h6></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4"><h6><b>39</b></h6></div>
                                    <div class="col-md-8"><h6>En el mes</h6></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4"><h6><b>0</b></h6></div>
                                    <div class="col-md-8"><h6>En la semana</h6></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <b>N° de Postulaciones</b>
                                    <span class="btn btn-primary"><i class="fas fa-hand-point-up"></i></span>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4"><h6><b>156</b></h6></div>
                                    <div class="col-md-8"><h6>En el año</h6></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4"><h6><b>39</b></h6></div>
                                    <div class="col-md-8"><h6>En el mes</h6></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4"><h6><b>0</b></h6></div>
                                    <div class="col-md-8"><h6>En la semana</h6></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <b>N° de Empresas</b>
                                    <span class="btn btn-secondary"><i class="fas fa-school"></i></span>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4"><h6><b>156</b></h6></div>
                                    <div class="col-md-8"><h6>En el año</h6></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4"><h6><b>39</b></h6></div>
                                    <div class="col-md-8"><h6>En el mes</h6></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4"><h6><b>0</b></h6></div>
                                    <div class="col-md-8"><h6>En la semana</h6></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <b>N° de Usuarios Nuevos</b>
                                    <span class="btn btn-light"><i class="fas fa-graduation-cap"></i></span>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4"><h6><b>156</b></h6></div>
                                    <div class="col-md-8"><h6>En el año</h6></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4"><h6><b>39</b></h6></div>
                                    <div class="col-md-8"><h6>En el mes</h6></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4"><h6><b>0</b></h6></div>
                                    <div class="col-md-8"><h6>En la semana</h6></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>            
            <div class="col-md-12">
                <div class="row">                    
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="col-xs-12">
                                    <div id="filtros">
                                        <a href="#!" class="faa-parent animated-hover">
                                            <i class="fa fa-eraser faa-tada"></i> limpiar filtros
                                        </a>
                                        <a href="#!" onclick="$('#advanced-filters').slideToggle();" class="faa-parent animated-hover">
                                            <i class="fa fa-filter faa-tada"></i> más filtros
                                        </a>                
                                    </div>
                                </div>
                                <div id="advanced-filters" class="hidden-xs"> 
                                    <h4><a href="#!">Filtros</a></h4> 
                                    
                                    <div class="form-group">
                                        <label for="">Carrera</label>
                                        <select name="" id="" class="custom-select">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                
                                
                                    <div class="form-group">
                                        <label for="">Remoto</label>
                                        <select name="" id="" class="custom-select">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                
                                
                                    <div class="form-group">
                                        <label for="">Region</label>
                                        <select name="" id="" class="custom-select">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                
                                
                                    <div class="form-group">
                                        <label for="">Comuna</label>
                                        <select name="" id="" class="custom-select">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                
                                
                                    <div class="form-group">
                                        <label for="">Ofertas Inclusivas</label>
                                        <select name="" id="" class="custom-select">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-body">
                                <canvas id="myChart" style="width: 100%"></canvas>
                            </div>
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-body">
                                <canvas id="myChart1" style="width: 100%"></canvas>
                            </div>
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-body">
                                <canvas id="myChart2" style="width: 100%"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('css')
<link rel="stylesheet" href="/assets/css/custom/admin.css">
@endpush
@push('js')
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var ctx1 = document.getElementById('myChart1').getContext('2d');
var ctx2 = document.getElementById('myChart2').getContext('2d');
// Global Options:
Chart.defaults.global.defaultFontColor = 'black';
Chart.defaults.global.defaultFontSize = 16;

var data = {
  labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
  datasets: [{
      label: "2020",
      fill: false,
      lineTension: 0.1,
      backgroundColor: "rgba(225,0,0,0.4)",
      borderColor: "red", // The main line color
      borderCapStyle: 'square',
      borderDash: [], // try [5, 15] for instance
      borderDashOffset: 0.0,
      borderJoinStyle: 'miter',
      pointBorderColor: "black",
      pointBackgroundColor: "white",
      pointBorderWidth: 1,
      pointHoverRadius: 8,
      pointHoverBackgroundColor: "yellow",
      pointHoverBorderColor: "brown",
      pointHoverBorderWidth: 2,
      pointRadius: 4,
      pointHitRadius: 10,
      data: [65, 59, 80, 81, 56, 55, 40, ,60,55,30,78],
      spanGaps: true,
    }, {
      label: "2019",
      fill: false,
      lineTension: 0.1,
      backgroundColor: "rgba(167,105,0,0.4)",
      borderColor: "rgb(167, 105, 0)",
      borderCapStyle: 'butt',
      borderDash: [],
      borderDashOffset: 0.0,
      borderJoinStyle: 'miter',
      pointBorderColor: "white",
      pointBackgroundColor: "black",
      pointBorderWidth: 1,
      pointHoverRadius: 8,
      pointHoverBackgroundColor: "brown",
      pointHoverBorderColor: "yellow",
      pointHoverBorderWidth: 2,
      pointRadius: 4,
      pointHitRadius: 10,
      data: [10, 20, 60, 95, 64, 78, 90,,70,40,70,89],
      spanGaps: false,
    }]
};
var options = {
    title: {
        display: true,
        text: 'Ofertas'
    },
    scales: {
        yAxes: [{
            ticks: {
                beginAtZero:true
            },
            scaleLabel: {
                display: true,
                labelString: 'N° Ofertas',
                fontSize: 20 
            }
        }],
        xAxes: [{
            ticks: {
                beginAtZero:true
            },
            scaleLabel: {
                display: true,
                labelString: 'Meses',
                fontSize: 20 
            }
        }]           
    }  
};
var myBarChart = new Chart(ctx, {
  type: 'line',
  data: data,
  options: options
});
var myBarChart1 = new Chart(ctx1, {
  type: 'line',
  data: data,
  options: options
});
var myBarChart2 = new Chart(ctx2, {
  type: 'line',
  data: data,
  options: options
});
</script>
@endpush