<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\HomeController;


// ----------------------------- Testing Routes --------------------------------

Route::view('/sec', 'home');

//----------------------------- Get Routes --------------------------------


Route::group(['middleware' => ['sessionCheck']], function () {
    // Routes for only authenticated users.
    Route::get('/home', [HomeController::class, 'renderSecrets']);
    
    Route::get('/', function () {
        return redirect('home');
    });
});

Route::get('/login', function () {
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
