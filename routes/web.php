<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/perfil', [UserController::class, 'index']);


// Route::get('/perfil', function () {
//     return view('template');
// });


Auth::routes();


 
Route::get('/saludo', [HomeController::class, 'saludo']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
