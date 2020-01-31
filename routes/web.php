<?php

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
Route::group(['as' => 'web.'], function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('index');

    Route::get('/login', function () {
        return view('pages.login');
    })->name('login');

    Route::get('/daftar', function () {
        return view('pages.register');
    })->name('daftar');

    Route::group(['as' => 'dashboard.', 'prefix' => 'dashboard'], function () {
        Route::get('/', function () {
            return view('pages.dashboard.dashboard');
        })->name('index');

        Route::get('/profile', function () {
            return view('pages.dashboard.profile');
        })->name('profile');

        Route::get('/saham', function () {
            return view('pages.dashboard.saham');
        })->name('saham');

        Route::get('/saham/{id}', function () {
            return view('pages.dashboard.saham-detail');
        })->name('saham-detail');

        Route::get('/proyek', function () {
            return view('pages.dashboard.proyek');
        })->name('proyek');

        Route::get('/proyek/{id}', function () {
            return view('pages.dashboard.proyek-detail');
        })->name('proyek-detail');
    });
});

