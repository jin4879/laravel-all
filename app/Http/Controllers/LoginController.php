<?php


namespace App\Http\Controllers;


use App\Model\User;

class LoginController extends Controller
{
    protected $users;

    public function __construct(User $users)
    {
        $this->users = $users;
    }

    public function loginForm()
    {
        return view('auth.login');
    }

    public function login(){
        return view('auth.login');
    }


}