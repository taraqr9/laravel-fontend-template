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
    return view('dashboard');
})->name('dashboard');

// Authentication
Route::get('/login', function(){
    return view ('authentications.login');
})->name('login');

Route::get('/registration', function(){
    return view ('authentications.registration');
})->name('registration');

Route::get('/forget_password', function(){
    return view ('authentications.forget_password');
})->name('forget_password');

// Account settings
Route::get('/account/account', function(){
    return view ('account_settings.account');
})->name('account.account');

Route::get('/account/notifications', function(){
    return view ('account_settings.notifications');
})->name('account.notifications');

Route::get('/account/connections', function(){
    return view ('account_settings.connections');
})->name('account.connections');
