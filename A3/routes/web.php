<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');

// ruta para carrera
Route::get('/career/create', function () {
    return view('career.create');
})->name('career.create');

Route::get('/career/index', function () {
    return view('career.index');
})->name('career.index');

Route::get('/career/edit', function () {
    return view('career.edit');
})->name('career.edit');

// ruta para curso
Route::get('/course/create', function () {
    return view('course.create');
})->name('course.create');

Route::get('/course/index', function () {
    return view('course.index');
})->name('course.index');

Route::get('/course/edit', function () {
    return view('course.edit');
})->name('course.edit');

// ruta para tipo de ambiente
Route::get('/environment_type/create', function () {
    return view('environment_type.create');
})->name('environment_type.create');

Route::get('/environment_type/index', function () {
    return view('environment_type.index');
})->name('environment_type.index');

Route::get('/environment_type/edit', function () {
    return view('environment_type.edit');
})->name('environment_type.edit');

// ruta para instructor
Route::get('/instructor/create', function () {
    return view('instructor.create');
})->name('instructor.create');

Route::get('/instructor/index', function () {
    return view('instructor.index');
})->name('instructor.index');

Route::get('/instructor/edit', function () {
    return view('instructor.edit');
})->name('instructor.edit');



