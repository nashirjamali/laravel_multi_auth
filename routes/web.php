<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;

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
})->name('welcome');

Route::group(['middleware' => 'prevent-back-history'], function(){

    /**
     * Route untuk login
     */
    Route::get('/login', [LoginController::class, 'show'])->name('login.show'); //menampilkan halaman login

    Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate'); //mengirim data email dan password

    /**
     * Route untuk logout
     */
    Route::post('/logout', [LogoutController::class, 'logout'])->name('logout'); //untuk logout

    /**
     * Route admin
     */
    Route::get('/admin/page', function () {
        return view('admin.page');
    })->name('admin.page');

    /**
     * Route penjual
     */
    Route::get('/penjual/page', function() {
        return view('penjual.page');
    })->name('penjual.page');


    /**
     * Route pembeli
     */
    Route::get('/pembeli/page', function () {
        return view('pembeli.page');
    })->name('pembeli.page');

});


