<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\OtpMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Mail;

class VerifyEamilOtpController extends Controller
{

    public function OtpPage()
    {
        return view('auth.otp');
    }

    public function sendOtp(Request $request)
    {
          
        $request->validate([
            'email' => 'required|email',
        ]);

        $otp = rand(100000, 999999); 
      
        $user = User::where('email', $request->email)->first();

        

        if (!$user)
        {
            return response()->json([
                'status' => false,
                'message' => 'User not found with this email.',
                'data' => null,
            ], 404);
        }

        // Send the OTP to the user's email
        Mail::to($request->email)->send(new OtpMail($otp));

        User::where('email', $request->email)->update([
            'otp' => $otp,
            'email_verified_at' => null
        ]);

        Session::put('user', $user);
        
        return view('auth.otp');

    }

    public function verifyOtp(Request $request)
    {
        // Validate input
        $request->validate([
            'email' => 'required|email',
            'otp' => 'required|digits:6',
        ]);

        // Find the user with matching email and OTP
        $user = User::where('email', $request->email)
                    ->where('otp', $request->otp)
                    ->first();

        // If user not found or OTP doesn't match
        if (!$user) {
            return redirect()->route('otp.page');
        }

        // OTP matches — store in session
        Session::put('user', $user);

        // Update user verification
        $user->update([
            'otp' => '0',
            'email_verified_at' => now(),
        ]);

        return view('auth.reset-password');
    }


}
