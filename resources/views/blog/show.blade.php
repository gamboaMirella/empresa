<!-- resources/views/blog/show.blade.php -->
<!--Vista Individual de Blog-->
@extends('layouts.app')

@section('title', 'Detalle del Blog')

@section('content')
    <h1>Detalle del Blog: {{ $id }}</h1>
    <p>Contenido de la entrada del blog con ID {{ $id }}.</p>
    <a href="{{ route('blog.index') }}">Volver al Blog</a>
@endsection
