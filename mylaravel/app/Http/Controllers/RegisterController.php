<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    //
    function index()
    {
        return view("register");
    }

    function create(Request $req)
    {
        //print_r($req->input());
        $muser = New User();
        $muser->name = $req->input('name');
        $muser->email = $req->email;
        $muser->password = $req->input('password');
        // $muser->password = bcrypt($req->input('password'));
        $muser->save(); 
        return redirect('/users');
    }
}
