<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('home');
});

//SOLO LOS USUARIOS QUE TENGAN NIVEL DE ADMIN PODRÁN USAR ESTAS RUTAS
Route::group(['middleware' => ['role:admin']], function () {

    Route::resource("usuarios", App\Http\Controllers\UserController::class);
    Route::post('userStore',[App\Http\Controllers\UserController::class, 'store']);
    Route::post('userEdit',[App\Http\Controllers\UserController::class, 'edit']);

    Route::put('userUpdate/{id}',[App\Http\Controllers\UserController::class, 'update']);
    Route::delete('userDestroy/{id}',[App\Http\Controllers\UserController::class, 'destroy']);
  
});

Route::resource("blog", App\Http\Controllers\BlogController::class);
// Route::post('blogStore',[App\Http\Controllers\BlogController::class, 'store']);
// Route::post('blogDestroy',[App\Http\Controllers\BlogController::class, 'destroy']);
// Route::post('blogEdit',[App\Http\Controllers\BlogController::class, 'edit']);
// Route::post('blogUpdate',[App\Http\Controllers\BlogController::class, 'update']);


Auth::routes();
Route::get('/saludo', [HomeController::class, 'saludo']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

