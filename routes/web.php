<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'Main_Controller@main' )->name('main');

Route::get('/ordinacija-Kovačević-Đaković' , 'Main_Controller@ostalo')->name('ordinacija-Kovačević-Đaković');
Route::post('/save_info' , 'Main_Controller@save_info')->name('save_info');

