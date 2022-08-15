<?php

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use Rap2hpoutre\LaravelLogViewer\LogViewerController;


//Errores
Route::get('error', function () { //Cuando no se encuentra la url a la que se desea acceder
    abort('404');
});
Route::get('error', function () { //Surge cuando la página demora demasiado en cargar y la conexión se cierra. 
    abort('408');
});
Route::get('error', function () { //Error interno del servidor o mantenimiento
    abort('500');
});

//paginas donde ingresar el usuario y admin
Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('quienes_somos', function () {
    return view('qsomos');
})->name('qsomos');
Route::get('vermemorias','MemoriasController@index');
Route::get('/vermemorias/{id}','MemoriasController@show');
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
Route::get('password/confirm', 'Auth\ConfirmPasswordController@showConfirmForm')->name('password.confirm');
Route::post('password/confirm', 'Auth\ConfirmPasswordController@confirm');
Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::post('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');
Route::resource('/vermemorias','MemoriasController')->names('user.memorias'); 

//paginas donde ingresar el ADMIN
//dashboard
Route::get('/dashboard', function () {
    return view('layouts.dashboard');
})->middleware('can:admin.dashboard')->name('admin.dashboard');

//Permiso Admin CREAR
Route::get('admin','Admin\FileController@create')->middleware('can:admin.create')->name('admin.create');////
////VISUALIZAR
Route::resource('files','Admin\FileController')->middleware('can:admin.files')->names('admin.files');

//REGISTRO
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->middleware('can:auth.register')->name('register');
Route::post('register', 'Auth\RegisterController@register')->middleware('can:auth.register');


//Gestion de Errores
Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index'])->middleware('can:admin.logs');