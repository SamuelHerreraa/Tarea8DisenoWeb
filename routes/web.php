<!-- web.php -->
<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/register', [RegisterController::class, 'show']);

Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'show']);

Route::post('/login', [LoginController::class, 'login']);

Route::get('/home', [HomeController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);

Route::get('/logout', [LogoutController::class, 'logout']);


Route::get('/landingpage', [LandingpageController::class, 'index']);
