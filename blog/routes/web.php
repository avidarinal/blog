<?php

// Pembelajaran Route


// Route::get('/', function () {
//     return view('welcome');
// });

// // Closure
// Route::get('/profil', function () {
// 	return "hai bujang";
// })->name('profil');

// // Route name
// Route::get('/test', function () {
// 	return route('profil');
// });

// // Parameter
// Route::get('/profil/{id}', function ($id) {
// 	return $id;
// });

// // Controller
// Route::get('/testcontroller', 'TestController@show');

// // Resource
// Route::resource('siswa', 'SiswaController');

// =============================================================

Route::get('/home', function(){
	return view('home');
});

Route::get('/aboutus', function(){
	return view('aboutus');
});

Route::get('/data', function(){
	return view('data');
});











Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});