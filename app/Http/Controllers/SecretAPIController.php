<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Secret;
use Ramsey\Uuid\Type\Integer;

class SecretAPIController extends Controller
{
    
    /**
     * Display all secrets for all users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Secret::all();
        return response($data, 200);
    }

    /**
     * Display the specified user secrets.
     * route: secret/user/{id}
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     */
    public function userSecrets($id)
    {
        if (is_numeric($id)) {
            $data = Secret::where('user_id', $id)->get(); // should be for specific user.
            // i could check is empty array or not but it's not important right now.
            return response($data, 200);
        } else {
            return response("wrong id number: $id", 401);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $req->validate([
            'title' => 'required',
            'content' => 'required',
            'user_id' => 'required',
        ]);

        $secret = new Secret();
        $secret->title  = $req->input('title');
        $secret->content  = $req->input('content');
        $secret->user_id  = $req->input('user_id');

        $result = $secret->save();
        if ($result) {
            return response()->json([
                'result' => $result,
                'saved-data' => $secret,
            ], 202);
        } else {
            return response()->json([
                'result' => $result,
            ], 402);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $secret = Secret::find($id);

        if ($secret != null) {
            return response()->json([
                'result' => 'true',
                'found-data' => $secret,
            ], 202);
        } else {
            return response()->json([
                'result' => 'false',
                'found-data' => 'no data found!',
            ], 402);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $req->validate([
            'title' => 'required',
            'content' => 'required',
            'user_id' => 'required',
        ]);

        $secret = Secret::find($id);
        if ($secret != null) {
            $secret->title  = $req->input('title');
            $secret->content  = $req->input('content');
            $secret->user_id  = $req->input('user_id');
            $result = $secret->save();
            if ($result) {
                return response()->json([
                    'result' => $result,
                    'saved-data' => $secret,
                ], 202);
            } else {
                return response()->json([
                    'result' => $result,
                ], 402);
            }
        } else {
            return response()->json([
                'result' => 'false',
                'data-found' => 'no data with this id',
            ], 402);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $secret = secret::find($id);
        // $result = $secret->delete();

        $result = secret::destroy($id);
        if ($result) {
            return response()->json([
                'result' => $result,
                'deleted-data' => 'deleted successfully',
            ], 202);
        } else {
            return response()->json([
                'result' => $result,
                'deleted-data' => 'could not delete the data, or the requseted id is no exist.',
            ], 402);
        }
    }


}
