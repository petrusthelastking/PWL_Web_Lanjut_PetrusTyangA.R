<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;


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

route::get('/hello', [WelcomeController::class, 'hello']);


Route::get('/world', function () {
    return 'World';
   });

Route::get('/', function () {
    return 'selamat datang';
   });

Route::get('/abaut', function () {
    return '2341720227';
   });

Route::get('/user/{name}', function ($name) {
return 'Petrus Tyang Agung Rosario '.$name;
});   

Route::get('/posts/{post}/comments/{comment}', function 
($postId, $commentId) {
 return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
    });

Route::get('/articles/{id}', [PageController::class, 'articles']);