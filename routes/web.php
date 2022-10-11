<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard.master');
});

Route::get('/', function () {
    return view('main');
});

Route::post('/add/tattoo', [\App\Http\Controllers\TattooController::class, 'store']);
Route::delete('/delete/tattoo/{id}', [\App\Http\Controllers\TattooController::class, 'destroy']);
Route::post('/edit/tattoo/{id}', [\App\Http\Controllers\TattooController::class, 'update']);
Route::get('/api/tattoos', [\App\Http\Controllers\TattooController::class, 'show']);


Route::get('/tattoos', function () {
    return view('tattoos');
});

Route::get('/studio', function () {
    return view('studio');
});
