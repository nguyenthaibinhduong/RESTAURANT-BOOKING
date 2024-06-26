<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[HomeController::class,'index']);
Route::get('/redirects',[HomeController::class,'redirects'])->name('home');

Route::get('/users',[AdminController::class,'user']);
Route::get('/deleteuser/{id}',[AdminController::class,'deleteuser']);

Route::get('/foodmenu',[AdminController::class,'foodmenu']);
Route::get('/addfood',[AdminController::class,'addfood']);
Route::post('/insertfood',[AdminController::class,'insertfood']);
Route::get('/deletefood/{id}',[AdminController::class,'deletefood']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
