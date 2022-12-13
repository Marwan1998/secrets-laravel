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

    public function showAdd()
    {
        return view('add');
    }

    public function addSecret(Request $req)
    {
        if (!session('id')) {
            return redirect('/logout');
        }

        $userID = session('id');
        $title  = $req['title'];
        $content  = $req['content'];

        $secrets = new Secret();
        $secrets->title = $title;
        $secrets->content = $content;
        $secrets->user_id = $userID;
        $result = $secrets->save();

        return redirect('/home');
    }

    public function showEdit(Request $req)
    {
        $secretID = $req['id'];

        if (!$secretID) {
            return redirect('/home');
        }

        $secretData = Secret::where('id', $secretID)->first();

        return view('edit', ['secretData' => $secretData]);
    }

    public function editSecret(Request $req)
    {
        $secretID = $req['secretID'];

        if (!$secretID) {
            return redirect('/home');
        }

        $secret = Secret::find($secretID);
        if ($secret) {
            $secret->title = $req['title'];
            $secret->content = $req['content'];
            $secret->save();
        }
        
        return redirect('/home');
    }

    public function deleteSecret(Request $req)
    {
        $secretID = $req['id'];
        if (!$secretID) {
            return redirect('/home');
        }

        $secret = Secret::find($secretID);
        $secret->delete();

        return redirect('/home');
    }


}
