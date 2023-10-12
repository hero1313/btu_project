<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PartnerController;

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


Route::get('/name', [MainController::class, 'name'])->name('name');
Route::get('/last-name', [MainController::class, 'lastName'])->name('lastName');
Route::get('/hobby', [MainController::class, 'hobby'])->name('hobby');
Route::get('/university', [MainController::class, 'university'])->name('university');
Route::get('/age', [MainController::class, 'age'])->name('age');

Route::post('/post', [MainController::class, 'post'])->name('post');
Route::put('/put', [MainController::class, 'put'])->name('put');
Route::delete('/delete', [MainController::class, 'delete'])->name('delete');
