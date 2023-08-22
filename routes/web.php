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

Route::get('/', function () {
    return view('home');
});
Route::get('bienvenue', function () {
    return view('bienvenue');
})->name('bienvenue');
Route::get('detailproduit', function () {
    return view('detailproduit');
})->name('detailproduit');

