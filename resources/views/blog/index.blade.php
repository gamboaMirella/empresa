<!-- resources/views/blog/index.blade.php -->
<!--Vista de Lista de Blogs-->
@extends('layouts.app')

@section('title', 'Blog')

@section('content')
    <h1>Blog</h1>
    <ul>
        <li><a href="{{ route('blog.show', ['id' => 1]) }}">Entrada de Blog 1</a></li>
        <li><a href="{{ route('blog.show', ['id' => 2]) }}">Entrada de Blog 2</a></li>
        <li><a href="{{ route('blog.show', ['id' => 3]) }}">Entrada de Blog 3</a></li>
        <!-- Añadir más entradas de blog según sea necesario -->
    </ul>
@endsection
