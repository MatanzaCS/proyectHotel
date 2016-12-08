@extends('layouts.dashboard')

@section('content')
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>
		<style type="text/css">
${demo.css}
		</style>
		<script type="text/javascript">
$(function () {
    Highcharts.chart('container', {
        title: {
            text: 'Reportes',
            x: -20 //center
        },
        subtitle: {
            text: 'Reporte del año: ',
            x: -20
        },
        xAxis: {
            categories: [@foreach($habitaciones as $data){{ $data->id }}@endforeach]
        },
        yAxis: {
            title: {
                text: 'Reservas'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: ''
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'Hab. Personal',
            data: []
        }]
    });
});
		</script>

		<script type="text/javascript">
$(function () {

    // Radialize the colors
    Highcharts.getOptions().colors = Highcharts.map(Highcharts.getOptions().colors, function (color) {
        return {
            radialGradient: {
                cx: 0.5,
                cy: 0.3,
                r: 0.7
            },
            stops: [
                [0, color],
                [1, Highcharts.Color(color).brighten(-0.3).get('rgb')] // darken
            ]
        };
    });

    // Build the chart
    Highcharts.chart('container2', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Reporte del año: '
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    },
                    connectorColor: 'silver'
                }
            }
        },
        series: [{
            name: 'Brands',
            data: [
                { name: 'Hab. Personal', y: 56.33 },
                {
                    name: 'Hab. Doble',
                    y: 24.03,
                    sliced: true,
                    selected: true
                },
                { name: 'Hab. Matrimonial', y: 10.38 },
                { name: 'Hab. DobPresidencial', y: 4.77 }
            ]
        }]
    });
});
		</script>
	</head>
	<body>
<!--
        <div style="margin-bottom:250px;">
            <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
        </div>
        <div>
            <div id="container2" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
        </div>
-->


        <a href="{{url('admin/ReporteHabitacionAnual')}}"><button class="btn btn-danger">Grafica Anual</button></a>
        <a href="{{url('admin/ReporteHabitacionMensual')}}"><button class="btn btn-danger">Grafica Mensual</button></a>
        <a href="#" onclick="location.reload()"><button class="btn btn-info">Actualizar Reporte</button></a>
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <td>ID</td>
                    <td>Numero</td>
                    <td>Piso</td>
                    <td>Estado</td>
                    <td>Tipo de Habitacion</td>
                </tr>
                <tr>
                    <td>@foreach($habitaciones as $data){{$data->id}}@endforeach</td>
                    <td>@foreach($habitaciones as $data){{$data->numero}}@endforeach</td>
                    <td>@foreach($habitaciones as $data){{$data->piso}}@endforeach</td>
                    <td>@foreach($habitaciones as $data){{$data->estado}}@endforeach</td>
                    <td>@foreach($habitaciones as $data){{$data->TipoHabitacion_id}}@endforeach</td>
                </tr>

            </table>
        </div>
	</body>
</html>
@endsection