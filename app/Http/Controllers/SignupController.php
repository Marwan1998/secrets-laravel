<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;


class SignupController extends Controller
{
    public function registerNew(Request $req)
    {
        $roles = [
            'name'=>'required | min:2',
            'password'=>'required | min:3',
        ];
        $req->validate($roles);

        $user = $req->input();
        $username = $user['name'];
        $userPassword = $user['password'];

        $requestedUser = User::where('name', $username)->get();

        if (count($requestedUser) === 0) { // no similar username found.
            User::insert([
                'name' => $username,
                'password' => Hash::make($userPassword)
            ]);
            return Redirect('/signup')->with('status', 'Account registred successfully, go to login page');
        
        } else {
            return redirect()->back()->withErrors([
                'name' => 'this user name is already registered'
            ]);
        }

    }
}
