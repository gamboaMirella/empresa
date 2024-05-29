<!-- resources/views/servicios/index.blade.php -->
<!--Vista de Lista de Servicios-->
@extends('layouts.app')

@section('title', 'Servicios')

@section('content')
    <h1>Servicios</h1>
    <ul>
        <li><a href="{{ route('servicios.show', ['nombre' => 'Servicio1']) }}">Servicio 1</a></li>
        <li><a href="{{ route('servicios.show', ['nombre' => 'Servicio2']) }}">Servicio 2</a></li>
        <li><a href="{{ route('servicios.show', ['nombre' => 'Servicio3']) }}">Servicio 3</a></li>
        <!-- Añadir más servicios según sea necesario -->
    </ul>
@endsection
