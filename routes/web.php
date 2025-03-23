<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->name('dashboard')->middleware(['auth']);

Route::match(['post', 'get'] , '/register', [AuthController::class, 'register']);
Route::match(['post', 'get'], '/login', [AuthController::class, 'login'])->name('login');

Route::get('/registered/{id}', [AuthController::class, 'registered'])->name('registered');

Route::get('/verify/{id}', [AuthController::class, 'verify'])->name('verify');

Route::get('/trysend', [AuthController::class, 'trysend']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::match(['get', 'post'], '/register', [AuthController::class, 'register'])->name('register');


Route::get('/verified', function (){
    return view('verified.index');
})->name('verified');