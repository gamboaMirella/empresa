<!-- resources/views/clientes/index.blade.php -->
<!--Vista de Lista de Clientes-->

@extends('layouts.app')

@section('title', 'Clientes')

@section('content')
    <h1>Clientes</h1>
    <ul>
        <li><a href="{{ route('clientes.show', ['nombre' => 'Cliente1']) }}">Cliente 1</a></li>
        <li><a href="{{ route('clientes.show', ['nombre' => 'Cliente2']) }}">Cliente 2</a></li>
        <li><a href="{{ route('clientes.show', ['nombre' => 'Cliente3']) }}">Cliente 3</a></li>
        <!-- Añadir más clientes según sea necesario -->
    </ul>
@endsection
