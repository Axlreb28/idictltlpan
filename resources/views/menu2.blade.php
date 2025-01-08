@extends('layouts.base')

@section('title', 'Menú')

@section('content')
<div id="formContent">
    <!-- Cambia "centro" por "izquierda" o "derecha" según lo necesites -->
    <h2 class="centro">Programas Sociales</h2>
    <div class="menu-grid">
        <a class="menu-item" href="{{ route('formulario_Subdirec') }}">Subdirección de Ordenamiento Urbano y Movilidad</a>
        <a class="menu-item" href="{{ route('formJUDIncidencias') }}">JUD de Incidencia y Estadística Delictiva</a>
        <a class="menu-item" href="{{ route('formJUDdepor') }}">JUD de Centros Deportivos</a>
    </div>
</div>
@endsection
