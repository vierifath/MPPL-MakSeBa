<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\CuisineController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;

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
    return view('/landingpage');
})->name('home');

Route::resource('/categories', CategoryController::class);
Route::resource('/cuisines', CuisineController::class);
Route::resource('/profiles', ProfileController::class);
Route::resource('/users', UserController::class);
Route::resource('/admins', AdminController::class);
Route::resource('/videos', VideoController::class);

Route::get('/register', 'App\Http\Controllers\Auth\RegisterController@register')->name('register');
Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@storeUser')->name('register');


Route::get('/login', 'App\Http\Controllers\Auth\LoginController@login')->name('login');
Route::post('/login', 'App\Http\Controllers\Auth\LoginController@authenticate');
Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

// -----------------------------forget password ------------------------------
Route::get('forget-password', 'App\Http\Controllers\Auth\ForgotPasswordController@getEmail')->name('forget-password');
Route::post('forget-password', 'App\Http\Controllers\Auth\ForgotPasswordController@postEmail')->name('forget-password');

Route::get('reset-password/{token}', 'App\Http\Controllers\Auth\ResetPasswordController@getPassword');
Route::post('reset-password', 'App\Http\Controllers\Auth\ResetPasswordController@updatePassword');

Auth::routes();


Route::put('/admins/verification/{admin}', 'App\Http\Controllers\AdminController@verification')->name('admins.verification');

Route::put('/videos/cancel/{video}', 'App\Http\Controllers\VideoController@cancel')->name('videos.cancel');
