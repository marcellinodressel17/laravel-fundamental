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

Route::get('/', function () {
    return view('welcome');

Route::get('/list-menu/get-all-data', [MenuController::class, 'getAllData']);
Route::get('/list-menu', [MenuController::class, 'index']);
Route::get('/list-menu/{menuId}', [MenuController::class, 'show']);

});
