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

//Страницы
Route::get('/', function () {
    return view('welcome');
})->name('AboutUs');


//регистрация
Route::get('/registration', [\App\Http\Controllers\PageController::class, 'RegPage'])->name('RegPage');
Route::post('/registration/save', [\App\Http\Controllers\UserController::class, 'registration'])->name('registration');

//авторизация
Route::get('/authorization',[\App\Http\Controllers\PageController::class, 'AuthPage'])->name('AuthPage');
Route::post('/authorization', [\App\Http\Controllers\UserController::class, 'auth'])->name('auth');

Route::get('/logout', [\App\Http\Controllers\UserController::class, 'logout'])->name('logout');



Route::group(['middleware'=>['auth', 'admin'],'prefix'=>'admin'], function (){

    Route::get('/panel', [\App\Http\Controllers\PageController::class, 'AdminPage'])->name('AdminPage');

});
