<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index (){
        return view('auth/login');
    }

    public function authentication (Request $req){
        return $req->all();
    }
}
