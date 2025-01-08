@extends('layouts.base')

@section('title', 'Formulario de Datos')

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Valoración</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        .deficiente {
            background-color: red;
            color: white;
        }
        .aceptable {
            background-color: yellow;
            color: black;
        }
        .eficiente {
            background-color: green;
            color: white;
        }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Tabla de Valoración</h2>
    <table>
        <tr>
            <th>Rubro</th>
            <th>Evaluación</th>
        </tr>
        <tr>
            <td>Banquetas</td>
            <td class="deficiente">DEFICIENTE</td>
        </tr>
        <tr>
            <td>Señalización</td>
            <td class="aceptable">ACEPTABLE</td>
        </tr>
        <tr>
            <td>Rampas</td>
            <td class="deficiente">DEFICIENTE</td>
        </tr>
        <tr>
            <td>Pasos peatonales</td>
            <td class="deficiente">DEFICIENTE</td>
        </tr>
        <tr>
            <td>Reductores de velocidad</td>
            <td class="deficiente">DEFICIENTE</td>
        </tr>
        <tr>
            <td>Baches</td>
            <td class="deficiente">DEFICIENTE</td>
        </tr>
        <tr>
            <td>Cascajo</td>
            <td class="deficiente">DEFICIENTE</td>
        </tr>
        <tr>
            <td>Luminarias</td>
            <td class="eficiente">EFICIENTE</td>
        </tr>
        <tr>
            <td>Tiraderos clandestinos de basura</td>
            <td class="deficiente">DEFICIENTE</td>
        </tr>
        <tr>
            <td>Terracería</td>
            <td class="eficiente">EFICIENTE</td>
        </tr>
        <tr>
            <td>Encarpetado</td>
            <td class="deficiente">DEFICIENTE</td>
        </tr>
        <tr>
            <td>Balizamiento</td>
            <td class="eficiente">EFICIENTE</td>
        </tr>
        <tr>
            <td>Transporte público</td>
            <td class="eficiente">EFICIENTE</td>
        </tr>
        <tr>
            <td>Otro</td>
            <td class="eficiente">EFICIENTE</td>
        </tr>
    </table>
</body>
</html>
@endsection

