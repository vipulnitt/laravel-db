<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dataController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/data', [dataController::class, 'index']);

Route::post('/show', [dataController::class, 'fetch']);
Route::post('/enter', [dataController::class, 'enter']);
Route::post('/submit', [dataController::class, 'store']);
