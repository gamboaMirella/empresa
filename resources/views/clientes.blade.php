<!-- resources/views/clientes.blade.php -->

@extends('layouts.app')

@section('title', 'Clientes')

@section('content')
    <h1>Clientes</h1>
    @if ($nombre)
        <p>Detalle del cliente: {{ $nombre }}</p>
    @else
        <p>Lista de todos nuestros clientes.</p>
    @endif
@endsection
