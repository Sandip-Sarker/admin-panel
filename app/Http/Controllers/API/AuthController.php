<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
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
        ], 401);
    }
}
