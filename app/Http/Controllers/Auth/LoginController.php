<?php


namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;

class LoginController extends Controller
{
    public function loginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'string', 'email', 'min:5', 'max:50'],
            'password' => [
                'required',
                'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X])(?=.*[!$#%]).*$/',
                'min:6',
            ],
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->messages(), 422);
        }

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $request->remember_me === 'on' ? true : false)) {
            return response()->json();
        }

        $user = User::where('email', $credentials['email'])->first();
        if ($user === null) {
            $errors = new MessageBag(['email' => ['존재하지 않는 이메일 입니다.']]);
            return response()->json($errors->messages(), 422);
        } else {
            $errors = new MessageBag(['password' => ['비밀번호가 틀렸습니다.']]);
            return response()->json($errors->messages(), 422);
        }
    }
}