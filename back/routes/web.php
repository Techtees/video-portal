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

Route::get(
    '/',
    function () {
        // return redirect( route('login') );
        return view('dashboard.video-single');
    }
);

Route::get(
    '/login',
    function () {
        return view('auth.login');
    }
)->name('login');

Route::get(
    '/register',
    function () {
        return view('auth.register');
    }
)->name('register');

Route::post('/register', 'AuthController@register')->name('auth.register');
Route::post('/login', 'AuthController@login')->name('auth.login');
Route::post('/logout', 'AuthController@logout')->name('auth.logout');

Route::group(
    ['middleware' => ['auth']],
    function () {

        Route::get('/dashboard', 'AuthController@index')
            ->name('backend.dashboard');
        
        Route::resource('videos', 'VideoController');

        Route::post('video-upload', 'VideoController@store')->name('videos.store');
        
    }
);
