<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Closure
Route::get('/profil', function () {
	return "hai bujang";
})->name('profil');

// Route name
Route::get('/test', function () {
	return route('profil');
});

// Parameter
Route::get('/profil/{id}', function ($id) {
	return $id;
});

// Controller
Route::get('/testcontroller', 'TestController@show');

// Resource
Route::resource('siswa', 'SiswaController');











Route::get('/about', function () {
    return view('about');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});