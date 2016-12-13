<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        .container-tabla
        {
            margin:0px auto;
            width:1000px;
        }
        .tabla th
        {
            border-bottom:1px solid black;
            padding:15px;
        }
        .tabla td
        {
            text-align:center;
        }
    </style>
</head>
<body>
    <div class="container-tabla">
        <table class="tabla">
            
            <tr>
                <th>
                    NUMERO DE HABITACION
                </th>
                <th>
                    HABITACION
                </th>
                <th>
                    TIPO DE RESERVA
                </th>
                <th>
                    COSTO
                </th>
                <th>
                    FECHA DE RESERVA
                </th>
            </tr>
            @foreach($resultado as $data)
            <tr>
                <td>
                    {{$data->numero}}
                </td>
                <td>
                    {{$data->nombre}}
                </td>
                <td>
                    {{$data->tipo_reserva}}
                </td>
                <td>
                    {{$data->costo_alojamiento}}
                </td>
                <td>
                    {{$data->fecha_reserva}}
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>