<?php 
///Web se encarga de recibir todas las peticiones que hagamos en nuestra aplicación y manipularalas
 use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\HomeController;
 use App\Http\Controllers\PostController;

Route::get('/', HomeController::class);
Route::get('/posts',[PostController::class, 'index']);
Route::get('/posts/create',[PostController::class,'create']);
Route::get('/posts/{post}',[PostController::class, 'show']); 



?>