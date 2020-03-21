<?php


namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
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

    public function login()
    {
        return view('auth.login');
    }
}