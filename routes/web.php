<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;



Route::get('/',[App\Http\Controllers\PostController::class, 'home']);


Route::get('/publicacion', function () {
    return view('publication');
});

//SOLO LOS USUARIOS QUE TENGAN NIVEL DE ADMIN PODRÁN USAR ESTAS RUTAS
Route::group(['middleware' => ['role:admin']], function () {

    Route::resource("usuarios", App\Http\Controllers\UserController::class);
    Route::post('userUpdate',[App\Http\Controllers\UserController::class, 'update']);
    Route::post('userStore',[App\Http\Controllers\UserController::class, 'store']);
    Route::post('userDestroy',[App\Http\Controllers\UserController::class, 'destroy']);
    Route::post('userEdit',[App\Http\Controllers\UserController::class, 'edit']);
  
});

Route::resource("blog", App\Http\Controllers\BlogController::class);

Route::resource("publicacion", App\Http\Controllers\PostController::class);
Route::post('postStore',[App\Http\Controllers\PostController::class, 'store']);
Route::post('postDestroy',[App\Http\Controllers\PostController::class, 'destroy']);
Route::get('posts/{id}',[App\Http\Controllers\PostController::class, 'report']);
Route::get('categoria/{category}',[App\Http\Controllers\PostController::class, 'category']);
Route::post('postEdit',[App\Http\Controllers\PostController::class, 'edit']);
Route::post('postUpdate',[App\Http\Controllers\PostController::class, 'update']);
// Route::post('blogStore',[App\Http\Controllers\BlogController::class, 'store']);
// Route::post('blogDestroy',[App\Http\Controllers\BlogController::class, 'destroy']);
// Route::post('blogEdit',[App\Http\Controllers\BlogController::class, 'edit']);
// Route::post('blogUpdate',[App\Http\Controllers\BlogController::class, 'update']);


Auth::routes();
Route::get('/saludo', [HomeController::class, 'saludo']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

