<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;


// ----------------------------- Testing Routes --------------------------------

Route::view('/sec', 'home');

//----------------------------- Get Routes --------------------------------

Route::get('/home', function () {
    if (session()->has('name') && session()->get('access')) {
        return view('home', ['name' => session('name')]);
    } else {
        return redirect('/unautorizedaccess');
    }
});

Route::get('/', function () {
    if (session()->has('name') && session()->get('access')) {
        return redirect('home');
    } else {
        return redirect('/login');
    }
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
