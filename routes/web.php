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

Route::get('/forget-password', function(){
    return view ('authentications.forget_password');
})->name('forget-password');

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

// Misc
Route::get('/misc/error', function(){
    return view ('misc.error');
})->name('misc.error');

Route::get('/misc/under-maintenance', function(){
    return view ('misc.under_maintenance');
})->name('misc.under-maintenance');

// Components

Route::get('/cards/card', function(){
    return view ('cards.card');
})->name('cards.card');

Route::get('/user-interface/accordion', function(){
    return view ('user_interface.accordion');
})->name('user-interface.accordion');

Route::get('/user-interface/alerts', function(){
    return view ('user_interface.alerts');
})->name('user-interface.alerts');

Route::get('/user-interface/badges', function(){
    return view ('user_interface.badges');
})->name('user-interface.badges');

Route::get('/user-interface/buttons', function(){
    return view ('user_interface.buttons');
})->name('user-interface.buttons');

Route::get('/user-interface/carousel', function(){
    return view ('user_interface.carousel');
})->name('user-interface.carousel');

Route::get('/user-interface/collapse', function(){
    return view ('user_interface.collapse');
})->name('user-interface.collapse');

Route::get('/user-interface/dropdowns', function(){
    return view ('user_interface.dropdowns');
})->name('user-interface.dropdowns');

Route::get('/user-interface/footer', function(){
    return view ('user_interface.footer');
})->name('user-interface.footer');

Route::get('/user-interface/list-groups', function(){
    return view ('user_interface.list_groups');
})->name('user-interface.list-groups');

Route::get('/user-interface/modals', function(){
    return view ('user_interface.modals');
})->name('user-interface.modals');

Route::get('/user-interface/navbar', function(){
    return view ('user_interface.navbar');
})->name('user-interface.navbar');

Route::get('/user-interface/offcanvas', function(){
    return view ('user_interface.offcanvas');
})->name('user-interface.offcanvas');

Route::get('/user-interface/pagination-breadcrumbs', function(){
    return view ('user_interface.pagination_breadcrumbs');
})->name('user-interface.pagination-breadcrumbs');

Route::get('/user-interface/progress', function(){
    return view ('user_interface.progress');
})->name('user-interface.progress');

Route::get('/user-interface/spinners', function(){
    return view ('user_interface.spinners');
})->name('user-interface.spinners');

Route::get('/user-interface/tabs-pills', function(){
    return view ('user_interface.tabs_pills');
})->name('user-interface.tabs-pills');

Route::get('/user-interface/toasts', function(){
    return view ('user_interface.toasts');
})->name('user-interface.toasts');

Route::get('/user-interface/tooltips-popovers', function(){
    return view ('user_interface.tooltips_popovers');
})->name('user-interface.tooltips-popovers');

Route::get('/user-interface/typography', function(){
    return view ('user_interface.typography');
})->name('user-interface.typography');
