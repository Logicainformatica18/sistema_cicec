<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('home');
});
//Route::match(['get', 'post'], '/perfil', 'TuControlador@perfil');




Route::resource("perfil", App\Http\Controllers\UserController::class);
Route::post('userStore',[App\Http\Controllers\UserController::class, 'store']);
Route::post('userDestroy',[App\Http\Controllers\UserController::class, 'destroy']);
Route::post('userEdit',[App\Http\Controllers\UserController::class, 'edit']);
Route::post('userUpdate',[App\Http\Controllers\UserController::class, 'update']);

Auth::routes();
Route::get('/saludo', [HomeController::class, 'saludo']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

///////////////////////////////////////////
// Route::controller(UserController::class)->group(function () {
 
//     Route::post('userStore', 'store');
// });
