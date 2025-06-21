<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\userProfile\PasswordUpdateRequest;

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

    public function updateProfile(Request $request)
    {
        $user = auth()->user();

        if (!$user) {
            return response()->json([
                'status' => false,
                'message' => 'User not found',
                'data' => null
            ], 404);
        }

        $data = $request->only(['name', 'email']);

        $user->update($data);

        return response()->json([
            'status' => true,
            'message' => 'User Profile Updated Successfully',
            'data' => $user
        ], 200);
    }

    public function updatePassword(PasswordUpdateRequest $request)
    {

        //dd($request->all());
        $user = auth()->user();
        
        if (!$user) {
            return response()->json([
                'status' => false,
                'message' => 'User not found',
                'data'=> null
            ], 404);
        }

       

        if (!password_verify($request->current_password, $user->password)) {
            return response()->json([
                'status' => false,
                'message' => 'Current password is incorrect',
                'data' => null
            ], 400);
        }

        $user->password = bcrypt($request->new_password);
        $user->save();

        return response()->json([
            'status' => true,
            'message' => 'Password Updated Successfully',
            'data' => $user
        ], 200);
    }


    public function deleteAccount(Request $request)
    {
        
        $user = auth()->user();
       
        if (!$user) {
            return response()->json([
                'status' => false,
                'message' => 'User not found',
                'data' => null
            ], 404);
        }

        
        if (!password_verify($request->password, $user->password)) {
            return response()->json([
                'status' => false,
                'message' => 'password is incorrect',
                'data' => null
            ], 400);
        }

        $user->delete();

        return response()->json([
            'status' => true,
            'message' => 'User Account Deleted Successfully',
            'data' => null
        ], 200);
    }
}
