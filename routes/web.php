<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SettingsController;
use Barryvdh\Debugbar\Facades\Debugbar;

// ----------------------------- Testing Routes --------------------------------

Route::view('/sec', 'home');

//----------------------------- Get Routes --------------------------------


Route::group(['middleware' => ['sessionCheck']], function () {
    // Routes for only authenticated users.
    Route::get('/home', [HomeController::class, 'renderSecrets']);
    
    // Route::get('/', function () {return redirect('home');}); //old redirect.
    Route::redirect('/', '/home');

    Route::get('/secret/add', [HomeController::class, 'showAdd']);

    Route::post('/secret/add', [HomeController::class, 'addSecret']);

    Route::get('/secret/edit/{id}', [HomeController::class, 'showEdit']);

    Route::post('/secret/edit', [HomeController::class, 'editSecret']);

    Route::get('/secret/delete/{id}', [HomeController::class, 'deleteSecret']);
    
    Route::get('/settings', [SettingsController::class, 'index']);

    // Route::post('/secret/{value}', function () {
    //     return redirect('/home');
    // });
});

Route::get('/login', function () {
    Debugbar::info('login');
    Debugbar::warning('Watch out…');

    return view('login');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/logout', function () {
    session()->flush();
    session()->regenerate();
    session()->put('access', false);
    return redirect('/login');
});

Route::view('/unautorizedaccess', 'unautorizedaccess');

//----------------------------- Post Routes --------------------------------

Route::post('login', [LoginController::class, 'loginCheck']);

Route::post('signup', [SignupController::class, 'registerNew']);
