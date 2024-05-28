<!-- resources/views/blog.blade.php -->

@extends('layouts.app')

@section('title', 'Blog')

@section('content')
    <h1>Blog</h1>
    @if ($id)
        <p>Detalle de la entrada del blog: {{ $id }}</p>
    @else
        <p>Lista de todas nuestras entradas del blog.</p>
    @endif
@endsection
