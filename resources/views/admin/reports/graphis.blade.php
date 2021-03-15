@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card mb-4">
        <header class="card-header d-flex align-items-center">
            <i class="far fa-list-alt u-sidebar-nav-menu__item-icon"></i>
            <h3 class="h3 card-header-title">Graficas de Registro</h3>
        </header>


        <div class="container">
            <div class="d-flex justify-content-between align-items-end border-bottom flex-wrap pb-3">
                <form action="" method="get" class="form-inline flex-md-nowrap ml-md-3">
                    
                    {{ csrf_field() }}
                    <div class="input-group mb-3 mb-md-0 mr-3" style="width: 250px">

                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-search text-muted"></i>
                            </span>
                        </div>

                        <select name="searchBy" id="searchBy" class="form-control">
                                    <option {{ !(request()['searchBy']) ? 'selected':'' }} disabled>Buscar por</option>
                                    <option {{ request()['searchBy'] == '1' ? 'selected':'' }} value="1">Mes</option>
                                    <option {{ request()['searchBy'] == '2' ? 'selected':'' }} value="2">Rango de Fecha</option>
                        </select>
                    </div>

                    <div class="input-group mb-3 mb-md-0 mr-3" id="searchByRange" style="width: 250px" {{ (request()['searchBy']) == 2  ? '':'hidden="true"' }}>

                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-search text-muted"></i>
                            </span>
                        </div>

                        <input type="text"
                                name="chart-date"
                                id="creation-date-filter-chart"
                                class="form-control"
                                aria-label="Creation date filter"
                                aria-describedby="creation-date-filter"
                                value="{{request()['chart-date']}}">
                    </div>

                    <div class="input-group mb-3 mb-md-0 mr-3" id="searchByMonth" style="width: 250px" {{ (request()['searchBy']) == 1  ? '':'hidden="true"' }}>

                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-search text-muted"></i>
                            </span>
                        </div>

                        <select name="chart-date-month" id="date-select" class="form-control">
                            <option value="" {{ !(request()['searchBy']) ? 'selected':'' }} disabled>Seleccione un Mes</option>       
                        </select>

                    </div>
                    
                
                    <div class="input-group mb-3 mb-md-0">
                        <input type='submit' id="getChart" class="ml-3 btn btn-primary" value="Filtrar">
                    </div>

                    @if (request()['chart-date'])
                    <div class="input-group mb-3 mb-md-0">
                        <a href="/admin/user/{{ $user->id }}/{{ $code->id }}" class="ml-3 btn btn-primary">Limpiar</a>
                    </div>
                    @endif

                </form>
            </div>

            <div class="container" id="usersCharts" style="display: none;">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <canvas id="canvas" height="280" width="600"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection

@section('scripts')
<script src="https://raw.githubusercontent.com/nnnick/Chart.js/master/dist/Chart.bundle.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script>
        $(document).ready(function(){
            $('#creation-date-filteer').daterangepicker({
                opens: 'center'
            });
            $('input[name="chart-date"]').daterangepicker({
                opens: 'center'
            });
        });
</script>

<script type="application/javascript">
        var date_array = new Array();
        var users_array = new Array();
        var myBar;
        var info;
        var month_list = '',
            date = new Date(),
            month = date.getMonth(),
            year = date.getFullYear(),
            select = document.getElementById('date-select');
            
        const monthNames = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", 
                            "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

        for (var i = 0; i<=month; i++){
            var opt = document.createElement('option');
            opt.value = (i + 1) + "/" + "01" + "/" + year + " - " + (i + 2) + "/" + "01" + "/" + year;
            opt.innerHTML = monthNames[i];
            select.appendChild(opt);
        }

        $(document).ready(function () {
            
            $("#searchBy").change(function (e) { 
                e.preventDefault();
                var value = $("#searchBy").val();
                if (value == 1) {
                    document.getElementById("searchByRange").hidden = true;
                    document.getElementById("searchByMonth").hidden = false;
                    
                }
                if(value == 2){
                    document.getElementById("searchByMonth").hidden = true;
                    document.getElementById("searchByRange").hidden = false;
                    
                } 
            });
            
            $("#getChart").click(function (e) { 
                e.preventDefault();
                info = document.getElementById("searchBy").value == 1 ? document.getElementById("date-select").value :
                       document.getElementById("searchBy").value == 2 ? document.getElementById("creation-date-filter-chart").value : null;
                console.log(info);
                
                $.ajax({
                    url: "/admin/get-charts",
                    method: "POST",
                    data: {
                        _token: $('input[name="_token"]').val(),
                        chart: info
                    },
                    success: function (res) {
                        console.log(res);
                        
                        var arreglo = res;
                        date_array = [];
                        users_array = [];
                        arreglo.forEach(function(data){
                            date_array.push(data.created_date);
                            users_array.push(data.total);
                        });
                        generarGrafica(arreglo);
                    }
                });
            });
        });

        function generarGrafica(arreglo){
            if (arreglo != null) {
                console.log("Not null");
                console.log(arreglo);
                $("#usersCharts").show("slow");
            }
            
            var barChartData = null;

            barChartData = {
                labels: date_array,
                datasets: [{
                    label: 'Cantidad de Reservaciones',
                    backgroundColor: "rgba(244,101,50,0.1)",
                    data: users_array
                }]
            };

            if (myBar) {
                myBar.destroy();
            }

            var ctx = document.getElementById("canvas").getContext("2d");
            myBar = new Chart(ctx, {
                type: 'bar',
                data: barChartData,
                options: {
                    elements: {
                        rectangle: {
                            borderWidth: 1.5,
                            borderColor: 'rgb(244, 101, 30)',
                            borderSkipped: 'bottom'
                        }
                    },
                    responsive: true,
                    title: {
                        display: true,
                        text: 'Registro de reservas'
                    }
                }
            });
        }
</script>
@stop