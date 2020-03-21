<?php


namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
            'name' => ['required', 'string', 'min:5', 'max:20'],
            'email' => ['required', 'string', 'email', 'min:5', 'max:50', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'agree-term' => ['required'],
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->messages(), 422);
        }
        return response()->json();
    }

}