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

Route::get('/', function () {
    return view('welcome',[
        'js' => 'login.js'
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard', [
        'css' => 'dashboard.css',
        'js' => 'dashboard.js'
    ]);
});

Route::get('/dashboarduser', function () {
    return view('dashboarduser', [
        'css' => 'dashboard.css',
        'js' => 'dashboard.js'
    ]);
});

Route::get('/history', function () {
    return view('history', [
        'css' => 'dashboard.css',
        'js' => 'dashboard.js'
    ]);
});
Route::get('/historyuser', function () {
    return view('historyuser', [
        'css' => 'dashboard.css',
        'js' => 'dashboard.js'
    ]);
});
