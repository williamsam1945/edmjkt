<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\SessionController;
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
    return view('welcome');
});

Route::get('/home', function () {
    return view('pages.home.homepage');
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);

Route::get('/register', [SessionController::class, 'index']);
Route::post('/register', [SessionController::class, 'store']);

// Sales
// Register Sales Invoice
Route::get('/sales-register-invoice', [SalesController::class, 'index']);
Route::post('/sales-register-invoice', [SalesController::class, 'store']);

// Settle Sales Invoice
Route::get('/settle-sales-invoice', [SalesController::class, 'all']);
Route::get('/settle-sales-invoice-export', [SalesController::class, 'createPDF']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
