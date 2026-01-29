<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\loginContoller;
use App\Http\Controllers\Logout;
use App\Http\Controllers\ReceteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InscriptionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('inscription', function () {
    return view('inscription');
});

Route::get('home', function () {
    return view('home');
});

Route::get('/home', function () {
    // return "Welcome " . session('user')->nom_user;
    return view('home');
})->name('home');



Route::post('/inscriptionUser', [InscriptionController::class, 'store']);
Route::post('/logincontroller', [loginContoller::class, 'login']);

Route::post('/logout', [Logout::class, 'logout']);

Route::get('/recete', [ReceteController::class, 'show']);

Route::post('/createRecete', [ReceteController::class, 'create']);
