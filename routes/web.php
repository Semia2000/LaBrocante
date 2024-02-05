<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VerificationController;

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
// Route::get('connexion', function () {
//     return view('connexion');
// })->name('connexion');
Route::get('acheter', function () {
    return view('categories');
})->name('categories');
Route::get('articlefavoris', function () {
    return view('articlefavoris');
})->name('articlefavoris');
Route::get('panier', function () {
    return view('panier');
})->name('panier');

Route::get('home', function () {
    return view('home');
})->name('home');

Route::get('/verify-otp', [VerificationController::class, 'showVerificationForm'])->name('verify-otp');
Route::post('/validate-otp', [VerificationController::class, 'valideOtpCode'])->name('validate-otp');


include 'admin.php';
