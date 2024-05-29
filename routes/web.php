<?php
// routes/web.php
use Illuminate\Support\Facades\Route;

// Ruta para la página de inicio
Route::get('/', function () {
    return view('home');
})->name('home');

// Rutas para Servicios
Route::get('/servicios', function () {
    return view('servicios.index');
})->name('servicios.index');

Route::get('/servicios/{nombre}', function ($nombre) {
    return view('servicios.show', ['nombre' => $nombre]);
})->where('nombre', '[a-zA-Z]+')->name('servicios.show');

// Rutas para Proyectos
Route::get('/proyectos', function () {
    return view('proyectos.index');
})->name('proyectos.index');

Route::get('/proyectos/{nombre}', function ($nombre) {
    return view('proyectos.show', ['nombre' => $nombre]);
})->where('nombre', '[a-zA-Z]+')->name('proyectos.show');

// Rutas para Clientes
Route::get('/clientes', function () {
    return view('clientes.index');
})->name('clientes.index');

Route::get('/clientes/{nombre}', function ($nombre) {
    return view('clientes.show', ['nombre' => $nombre]);
})->where('nombre', '[a-zA-Z]+')->name('clientes.show');

// Rutas para Blog
Route::get('/blog', function () {
    return view('blog.index');
})->name('blog.index');

Route::get('/blog/{id}', function ($id) {
    return view('blog.show', ['id' => $id]);
})->where('id', '[0-9]+')->name('blog.show');

// Ruta para la página de contacto
Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');
