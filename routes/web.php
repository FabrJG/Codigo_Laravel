<?php

use Illuminate\Support\Facades\Route;

Route::view('/','home')->name('home');
Route::view('nosotros','nosotros')->name('nosotros');
Route::get('servicios','App\Http\Controllers\ServiciosController@index')->name('servicios');
Route::view('contacto','contacto')->name('contacto');
//Route::resource('servicios','App\Http\Controllers\Servicios3Controller')/*->except('index','show')*/;