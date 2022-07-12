<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FileController;
use Illuminate\Support\Facades\Auth;
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

//Permiso User
Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/home', function () {
    return view('home');
})->name('home');
Route::get('memorias','Admin\FileController@index')->name('memorias.index'); 
Route::get('/memorias/{id}','Admin\FileController@show')->name('memorias.show');

//Permiso Admin
Route::resource('/admin','Admin\CreateController')->middleware('can:admin.create')->names('admin.create');
Route::resource('/admin/files','Admin\FileController')->names('admin.files');
Auth::routes();

//Gestion de Errores
Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);