<?php

use Illuminate\Support\Facades\Route;

// ----------------------------- Testing Routes --------------------------------

Route::view('/sec', 'home');

//----------------------------- Get Routes --------------------------------

Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/', function () {
    if (session()->has('name') && session()->get('access')) {
        return redirect('home');
    } else {
        return redirect('/login');
    }
});

Route::get('/home', function () {
    if (session()->has('name') && session()->get('access')) {
        return view('home');
    } else {
        return redirect('/unautorizedaccess');
    }
});

Route::view('/unautorizedaccess', 'unautorizedaccess');

//----------------------------- Post Routes --------------------------------

Route::post('login', []);

