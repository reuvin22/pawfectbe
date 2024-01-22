<?php

namespace App\Http\Controllers\Auth\v1;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\v1\LoginRequest;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(LoginRequest $request)
    {
        $data = $request->validated();

        $user = User::where('email', $data['email'])->first();
        if(!$user || !Hash::check($data['password'], $user->password))
        {
            return response()->json([
                'status' => 400,
                'message' => 'Wrong Email or Password'
            ], 400);
        }

        $token = $user->createToken('userToken')->plainTextToken;

        return response()->json([
            'status' => 200,
            'message' => 'Login Successfully',
            'token' => $token
        ], 200);
    }
}
