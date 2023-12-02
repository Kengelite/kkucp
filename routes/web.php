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
    return view('index');
});
Route::get('/aa', function () {
    return view('advice');
});
Route::get('/Scholarsphere', function () {
    return view('scholarsphere');
});
Route::get('/question', function () {
    return view('estimate/question');
});

