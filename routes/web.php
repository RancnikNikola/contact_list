<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\ContactNumberController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ContactController::class, 'index']);
Route::get('/contacts/create', [ContactController::class, 'create']);

Route::post('/', [ContactController::class, 'store']);

Route::get('contacts/{contact}', [ContactController::class, 'show']);

Route::get('/contacts/{contact:id}/edit', [ContactController::class, 'edit']);


Route::put('/contacts/{contact}', [ContactController::class, 'update']);

Route::delete('/contacts/{contact}', [ContactController::class, 'destroy']);

Route::get('/favorite', [FavoriteController::class, 'index']);









