<!-- resources/views/servicios.blade.php -->

@extends('layouts.app')

@section('title', 'Servicios')

@section('content')
    <h1>Servicios</h1>
    @if ($nombre)
        <p>Detalle del servicio: {{ $nombre }}</p>
    @else
        <p>Lista de todos nuestros servicios.</p>
    @endif
@endsection
