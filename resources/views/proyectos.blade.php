<!-- resources/views/proyectos.blade.php -->

@extends('layouts.app')

@section('title', 'Proyectos')

@section('content')
    <h1>Proyectos</h1>
    @if ($nombre)
        <p>Detalle del proyecto: {{ $nombre }}</p>
    @else
        <p>Lista de todos nuestros proyectos.</p>
    @endif
@endsection
