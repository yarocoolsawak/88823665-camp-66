<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    private function myprivate(){
        return "1";
    }
    function myfunction(Request $reg){
        $data['myinput'] = $reg->input('myinput');
        return view('myview', $data);
    }
}
