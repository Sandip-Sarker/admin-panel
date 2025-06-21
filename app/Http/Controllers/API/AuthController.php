<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function registration(Request $request)
    {
        // Validate request
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'password_confirmation' => ['required', 'string', 'min:6'],
        ]);

        // Create user
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

    
        return response()->json([
            'status' => true,
            'message' => 'User registered successfully',
            'data' => [ 
                'user' => $user,
            ],
        ], 200);
    }




    public function login(Request $request)
    {
        
        // Validate request
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

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
