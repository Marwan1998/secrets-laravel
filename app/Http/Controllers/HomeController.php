<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Secret;

class HomeController extends Controller
{
    //
    public function renderSecrets()
    {
        $userID = session('id');
        $secrets = Secret::where('user_id', $userID)->get();

        if (!$userID) {
            return view('home', [
                'name' => session('name'),
                'secrets' => [],
                'erorrs' => true
            ]);
        }

        return view('home', [
            'name' => session('name'),
            'secrets' => $secrets,
            'erorrs' => false
        ]);

    }
}
