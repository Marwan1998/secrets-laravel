<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Secret;

class HomeController extends Controller
{
    
    public $secretPage = '/home'; // should be a constant.
    
    public function renderSecrets()
    {
        $userID = session('id');
        $secrets = Secret::where('user_id', $userID)->get();

        if (!$userID) {
            return view($this->secretPage, [
                'name' => session('name'),
                'secrets' => [],
                'erorrs' => true
            ]);
        }
        return view($this->secretPage, [
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

        if ($result) {
            $this->setStatus($req, 'a secret has been saved successfully');
        } else {
            $this->setStatus($req, 'unexpected error: secret could not be added.');
        }

        return redirect($this->secretPage);
    }

    public function showEdit(Request $req)
    {
        $secretID = $req['id'];

        if (!$secretID) {
            return redirect($this->secretPage);
        }

        $secretData = Secret::where('id', $secretID)->first();

        return view('edit', ['secretData' => $secretData]);
    }

    public function editSecret(Request $req)
    {
        $secretID = $req['secretID'];

        if (!$secretID) {
            return redirect($this->secretPage);
        }

        $secret = Secret::find($secretID);
        if ($secret) {
            $secret->title = $req['title'];
            $secret->content = $req['content'];
            $result = $secret->save();
            if ($result) {
                $this->setStatus($req, 'a secret has been edited successfully');
            } else {
                $this->setStatus($req, 'unexpected error: secret could not be edited.');
            }
        }
        
        return redirect($this->secretPage);
    }

    public function deleteSecret(Request $req)
    {
        $secretID = $req['id'];
        if (!$secretID) {
            return redirect($this->secretPage);
        }

        $secret = Secret::find($secretID);
        $result = $secret->delete();
        if ($result) {
            $this->setStatus($req, 'a secret has been deleted successfully');
        } else {
            $this->setStatus($req, 'unexpected error: secret could not be deleted.');
        }

        return redirect($this->secretPage);
    }

    private function setStatus(Request $req, $message)
    {
        $req->session()->flash('status', "$message");
    }

}