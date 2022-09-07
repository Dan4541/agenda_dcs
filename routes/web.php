<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ContactsController;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::post('/login', [LoginController::class, 'loginUser'])->name('login');

Route::group(['middleware' => ['auth']], function(){

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/contacts', [ContactsController::class, 'index'])->name('icontacts');
    Route::post('/home', [ContactsController::class, 'store_contact'])->name('scontact');    
});

