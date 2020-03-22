<?php


namespace App\Http\Controllers\Auth;

use App\Model\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class JoinController extends Controller
{
    public function joinForm()
    {
        return view('auth.register');
    }

    public function join(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => [
                'required',
                'string',
                'min:2',
                'max:20',
                'unique:users'
            ],
            'email' => ['required', 'string', 'email', 'min:5', 'max:50', 'unique:users'],
            'password' => [
                'required',
                'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X])(?=.*[!$#%]).*$/',
                'min:6',
                'confirmed'
            ],
            'agree-term' => ['required','accepted'],
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->messages(), 422);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        Auth::loginUsingId($user->id, true);

        return response()->json($user);
    }

}