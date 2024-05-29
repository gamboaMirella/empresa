<!-- resources/views/proyectos/index.blade.php -->
<!--Vista de Lista de Proyectos-->
@extends('layouts.app')

@section('title', 'Proyectos')

@section('content')
    <h1>Proyectos</h1>
    <ul>
        <li><a href="{{ route('proyectos.show', ['nombre' => 'Proyecto1']) }}">Proyecto 1</a></li>
        <li><a href="{{ route('proyectos.show', ['nombre' => 'Proyecto2']) }}">Proyecto 2</a></li>
        <li><a href="{{ route('proyectos.show', ['nombre' => 'Proyecto3']) }}">Proyecto 3</a></li>
        <!-- Añadir más proyectos según sea necesario -->
    </ul>
@endsection
