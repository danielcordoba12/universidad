<?php

use App\Http\Controllers\usersController;
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
Route::get('/registrar', function () {
    return view('RegistrarUsuario');
});

Route::post('/store',[usersController::class, 'store'])->name('users.store');
