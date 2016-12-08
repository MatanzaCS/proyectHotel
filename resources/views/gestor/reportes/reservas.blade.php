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
            categories: ['1-2', '3-4', '5-6', '7-8', '9-10', '11-13',
                '14-16', '17-19', '20-22', '23-25', '26-28', '29-31']
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
            data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
        }, {
            name: 'Hab. Doble',
            data: [-0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8, 24.1, 20.1, 14.1, 8.6, 2.5]
        }, {
            name: 'Hab. Matrimonial',
            data: [-0.9, 0.6, 3.5, 8.4, 13.5, 17.0, 18.6, 17.9, 14.3, 9.0, 3.9, 1.0]
        }, {
            name: 'Hab. Presidencial',
            data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
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
        <a href="{{url('admin/ReporteAnual')}}"><button class="btn btn-danger">Ver Graficas</button></a>
        <a href="{{url('admin/ReporteMensual')}}"><button class="btn btn-info">Actualizar Reporte</button></a>
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <td>ID</td>
                    <td>Tipo de Reserva</td>
                    <td>Fecha de Reserva</td>
                    <td>Fecha de Ingreso</td>
                    <td>Fecha de Salida</td>
                    <td>Costo de alojamiento</td>
                    <td>Fecha de Pago</td>
                    <td>Tipo de Comprobante</td>
                    <td>Estado</td>
                </tr>
                <tr>
                @foreach($reservas as $data)
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->tipo_reserva }}</td>
                    <td>{{ $data->fecha_reserva }}</td>
                    <td>{{ $data->fecha_ingresa }}</td>
                    <td>{{ $data->fecha_salida }}</td>
                    <td>{{ $data->costo_alojamiento }}</td>
                    <td>{{ $data->FechaPago }}</td>
                    <td>{{ $data->TipoComprobante_id }}</td>
                    <td>{{ $data->estado }}</td>
                @endforeach
                </tr>


            </table>
        </div>
	</body>
</html>
@endsection