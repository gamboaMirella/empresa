<!-- resources/views/clientes/show.blade.php -->
<!--Vista Individual de Cliente-->
@extends('layouts.app')

@section('title', 'Detalle del Cliente')

@section('content')
    <h1>Detalle del Cliente: {{ $nombre }}</h1>
    <p>Descripción del cliente {{ $nombre }}.</p>
    <a href="{{ route('clientes.index') }}">Volver a Clientes</a>
@endsection
