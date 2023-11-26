<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class carController extends Controller
{
    public function getData(Request $req){
        $req->validate([
            'username' => 'required | max:15',
            'userpassword' => 'required | min:5'
        ]);
        return $req->input();
    }
    //
}
