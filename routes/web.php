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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\profileController::class, 'index'])->name('profile');

//routing mengatur /menampilkan view form
Route::get('/form',function(){
    return view('form');
});

Route::get('/tambahsoal',function(){
    return view('tambahsoal');
});
// Route::get('/tampilkandata',function(){
//     return view('tampilkandata');
// });
Route::get('/logout',function(){
    return view('logout');
});
Route::get('/edit',function(){
    return view('edit');
});
Route::post('/siswa/store','App\http\Controllers\SiswaController@store');
Route::get('/tampilkandata','App\http\Controllers\SiswaController@index');

Route::get('/soal','App\http\Controllers\soalController@index');
Route::post('/soal/store','App\http\Controllers\soalController@store');





Route::get('/tampilkandata/edit/{id}','App\http\Controllers\SiswaController@edit');
Route::patch('/tampilkandata/update/{id}','App\http\Controllers\SiswaController@update');
Route::get('/tampilkandata/hapus/{id}','App\http\Controllers\SiswaController@hapus');

