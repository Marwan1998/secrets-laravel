<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function renderSecrets()
    {
        //TODO: find and send the correspond users secrets.

        return view('home', ['name' => session('name'), 'secrets' => []]);
    }
}
