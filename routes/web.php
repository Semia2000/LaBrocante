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
Route::get('header', function () {
    return view('header2');
})->name('header');
Route::get('bienvenue', function () {
    return view('bienvenue');
})->name('bienvenue');
Route::get('detailproduit', function () {
    return view('detailproduit');
})->name('detailproduit');
Route::get('suggestion', function () {
    return view('suggestion');
})->name('suggestion');
Route::get('inscrire', function () {
    return view('inscrire');
})->name('inscrire');
Route::get('acheter', function () {
    return view('categories');
})->name('categories');
Route::get('articlefavoris', function () {
    return view('articlefavoris');
})->name('articlefavoris');
Route::get('panier', function () {
    return view('panier');
})->name('panier');


