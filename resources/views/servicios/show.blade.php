<!-- resources/views/servicios/show.blade.php -->
<!--Vista Individual de Servicio-->
@extends('layouts.app')

@section('title', 'Detalle del Servicio')

@section('content')
    <h1>Detalle del Servicio: {{ $nombre }}</h1>
    <p>Descripción del servicio {{ $nombre }}.</p>
    <a href="{{ route('servicios.index') }}">Volver a Servicios</a>
@endsection
