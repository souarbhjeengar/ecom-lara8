<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
public function login(Request $req)
{

    // dd($req->input());
    $user=User::where(['email'=>$req->email])->first();
    // return $user->password;

    if (!$user ||!Hash::check($req->password,$user->password)) {
        return "username or password dosn't matched";
    }else{
        $req->session();
        return redirect('/');
    }
    // return $req->input();
}
}
