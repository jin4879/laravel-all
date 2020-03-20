<?php


namespace App\Http\Controllers;


use App\Model\User;

class UserController extends Controller
{
    protected $users;

    public function __construct(User $users)
    {
        $this->users = $users;
    }

    public function show($id)
    {
        $user = $this->users->find($id);
        return view('user.profile', ['user' => $user]);
    }

}