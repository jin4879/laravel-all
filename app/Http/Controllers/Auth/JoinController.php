<?php


namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;

class JoinController extends Controller
{
    public function joinForm(){
        return view('auth.register');
    }
}