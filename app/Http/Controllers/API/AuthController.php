<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Api\RegisterRequest;
use App\Http\Requests\Api\LoginRequest;

class AuthController extends Controller
{

    public function registration(RegisterRequest $request)
    {


        // Create user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

    
        return response()->json([
            'status' => true,
            'message' => 'User registered successfully',
            'data' => [ 
                'user' => $user,
            ],
        ], 200);
    }


    public function login(LoginRequest $request)
    {
        
        $credentials = $request->only('email', 'password');

        $token = Auth::guard('api')->attempt($credentials);

        // Attempt to login using JWT guard
        if (!$token) {
            return response()->json([
                'status' => false,
                'message' => 'Unauthorized',
                'data' => null,
            ], 401);
        }

        $data = [
            'token' => $token,
            'token_type' => 'bearer',
            'user' => auth('api')->user(),
        ];

        return response()->json([
            'status' => true,
            'message' => 'Login successfully',
            'data' => $data,
        ], 200);
    }


    public function logout()
    {
        $user = auth()->guard('api')->logout();


        return response()->json([
            'status' => true,
            'message' => 'Successfully logged out',
        ], 200);
    }

}
