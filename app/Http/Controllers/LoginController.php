<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function loginCheck(Request $req)
    {
        $roles = [
            'name'=>'required | min:2',
            'password'=>'required | min:3',
            '_token'=>'required'
        ];

        $req->validate($roles);

        $user = $req->input();
        $username = $user['name'];
        $userPassword = $user['password'];

        $requestedUser = User::where('name', $username)->get();

        // !empty($requestedUser)
        if (count($requestedUser) !=0) { // this should be: if(!empty($requestedUser) {}
            $hashedPass = $requestedUser[0]['password'];
            $userID = $requestedUser[0]['id'];
            if (Hash::check($userPassword, $hashedPass)) {
                $req->session()->put('name', $username); //will use it to display it in home page.
                $req->session()->put('id', $userID); //will use this to get the cards.
                $req->session()->put('access', true);
                return redirect('home');

            } else {
                // should return 'password is incorrect',but i'm not returning this for security reasons.
                echo 'password is incorrect';
                $req->session()->put('access', false);
                return redirect()->back()->withErrors([
                    'approve' => 'Wrong password or this account is not exsit.'
                ]);
                // return redirect('login');
            }
        } else {
            // return 'No username found', i'm not returning this for security reasons.
            $req->session()->put('access', false);
            return redirect()->back()->withErrors([
                'approve' => 'Wrong password or this account is not exsit.'
            ]);
        }

    }
}
