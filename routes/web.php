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

    Route::get('/tos', function (){
        return view('tos');
    })->name('page.tos');

    Route::get('/policy-privacy', function (){
       return view('policy-privacy');
    })->name('page.policy-privacy');

    Route::get('/tentang-kami', function () {
        return view('welcome');
    })->name('page.tentang-kami');

    Route::get('/', function () {
        return view('welcome');
    })->name('index');

    Route::get('/login', function () {
        return view('pages.login');
    })->name('login');

    Route::get('/daftar', function () {
        return view('pages.register');
    })->name('daftar');


    Route::get('/produk', function () {
        return view('produk');
    })->name('produk');

    Route::get('/syarat-dan-ketentuan', function () {
        return view('tos');
    })->name('tos');

    Route::group(['as' => 'bisnis.', 'prefix' => 'bisnis'], function () {
        Route::get('/', function () {
            return view('pages.bisnis.dashboard');
        })->name('index');

        Route::get('/proyek', function () {
            return view('pages.bisnis.proyek');
        })->name('proyek');

        Route::get('/proyek/create', function () {
            return view('pages.bisnis.proyek-add');
        })->name('proyek-create');

        Route::get('/proyek/{id}', function () {
            return view('pages.bisnis.proyek-detail');
        })->name('proyek-detail');

        Route::get('/saham', function () {
            return view('pages.bisnis.saham');
        })->name('saham');

        Route::get('/saham/create', function () {
            return view('pages.bisnis.saham-add');
        })->name('saham-create');

        Route::get('/saham/{id}', function () {
            return view('pages.bisnis.saham-detail');
        })->name('saham-detail');
    });

    Route::group(['as' => 'dashboard.', 'prefix' => 'dashboard'], function () {
        Route::get('/', function () {
            return view('pages.dashboard.dashboard');
        })->name('index');

        Route::group(['as' => 'investasiku.', 'prefix' => 'investasiku'], function () {
            Route::get('/proyek', function () {
                return view('pages.dashboard.investasiku.proyek');
            })->name('proyek');

            Route::get('/proyek/{id}', function () {
                return view('pages.dashboard.investasiku.proyek-detail');
            })->name('proyek-detail');

            Route::get('/saham', function () {
                return view('pages.dashboard.investasiku.saham');
            })->name('saham');

            Route::get('/saham/{id}', function () {
                return view('pages.dashboard.investasiku.saham-detail');
            })->name('saham-detail');
        });

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

        Route::get('/tarik-saldo', function () {
            return view('pages.dashboard.tarik-saldo');
        })->name('tarik-saldo');

        Route::get('/deposit-saldo', function () {
            return view('pages.dashboard.deposit-saldo');
        })->name('deposit-saldo');

        Route::get('/laporan', function () {
            return view('pages.dashboard.laporan');
        })->name('laporan');
    });
});

