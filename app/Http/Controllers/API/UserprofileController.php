<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserprofileController extends Controller
{
    public function getProfile()
    {
        $user = auth()->user();

        if (!$user) {
            return response()->json([
                'message' => 'User not found'
            ], 404);
        }

        return response()->json([
            'status' => true,
            'message' => 'get User Profile',
            'data' => $user
        ],200);
    }

    // public function updateProfile(Request $request)
    // {
    //     $user = auth()->user();

    //     if (!$user) {
    //         return response()->json([
    //             'message' => 'User not found'
    //         ], 404);
    //     }

    //     $data = $request->only(['name', 'email', 'phone']);

    //     $user->update($data);

    //     return response()->json([
    //         'status' => true,
    //         'message' => 'User Profile Updated Successfully',
    //         'data' => $user
    //     ], 200);
    // }
}
