@extends('layouts.base')

@section('title', 'Iniciar Sesión')

@section('content')
<div class="login-page">
    @if($departmentID)
        <h1>Iniciar Sesión para el Departamento {{ $departmentID }}</h1>
    @else
        <h1>Iniciar Sesión</h1>
    @endif
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <h1>Bienvenid@!</h1>
            <div class="logo">
                <img src="{{ asset('image/logo.png') }}" id="imagen" alt="Logo">
            </div>

            <form method="POST" action="{{ $departmentID ? route('login.department', ['departmentID' => $departmentID]) : route('login') }}">
                @csrf
                @if($departmentID)
                    <input type="hidden" name="departmentID" value="{{ $departmentID }}">
                @endif
                <div class="form-group">
                    <input type="text" id="username" class="fadeIn second form-control" name="username" placeholder="Usuario o Email" required>
                </div>
                <div class="form-group">
                    <input type="password" id="password" class="fadeIn third form-control" name="password" placeholder="Contraseña" required>
                </div>
                <input type="submit" class="fadeIn fourth btn button" value="Iniciar Sesión">
            </form>

            <div id="formFooter">
                <a class="underlineHover btn button button-secondary" href="{{ route('register') }}">Registrarse</a>
            </div>
        </div>
    </div>
</div>
@endsection
