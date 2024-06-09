<?php

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

use Illuminate\Http\Request;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/dashboard/articles', [ArticleController::class, 'index']);
Route::post('/dashboard/articles/store', [ArticleController::class, 'store']);
Route::delete('/dashboard/articles/destroy/{id}', [ArticleController::class, 'destroy']);
Route::put('/dashboard/articles/update', [ArticleController::class, 'update']);
Route::get('/dashboard/articles/report', [ArticleController::class, 'report']);