<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\Sample\SampleController;
use App\Http\Middleware\HelloMiddleware;


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

Route::middleware([HelloMiddleware::class])->group(function(){});

Route::get('/hello/{id}', [HelloController::class, 'index']);
Route::post('/hello', [HelloController::class, 'index']);
Route::get('/hello/{msg}', [HelloController::class, 'other']);
Route::get('hello/{person}', [HelloController::class, 'index']);

Route::namespace('Sample')->group(function(){
    Route::get('/sample', [SampleController::class, 'index'])->name('sample');
    Route::get('/sample/other', [SampleController::class, 'other']);
});