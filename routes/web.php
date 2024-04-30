<?php

use App\Http\Controllers\IdentityController;
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

Route::get('/identity', [IdentityController::class, 'index'])->name('identity.index');
Route::get('/identity/create', [IdentityController::class, 'create'])->name('identity.create');