@extends('layouts.base')

@section('title', 'Menú Dirección de Atención a Grupos Prioritarios')

@section('content')
<div id="formContent">
    <h2 class="centro">Programas Sociales</h2>
    <div class="menu-grid">
        <a class="menu-item" href="{{ route('form') }}">Cuidar y ser cuidado para el Bienestar 2025</a>
        <a class="menu-item" href="{{ route('formapoyo') }}">Apoyo para el bienestar 2025</a>
        <a class="menu-item" href="{{ route('formtransfor') }}">Transformando en Comunidad</a>
        <a class="menu-item" href="{{ route('formjuven') }}">Juventudes en Transformación</a>
        <a class="menu-item" href="{{ route('formcuidadoinfancias') }}">Fortalecimiento para el cuidado y desarrollo integral de las infancias</a>
    </div>
</div>
@endsection
