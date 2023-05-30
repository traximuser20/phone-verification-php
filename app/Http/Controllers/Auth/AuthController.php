<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\otpCodes;
use App\Models\User;

class AuthController extends Controller
{
    public function login()
    {
        return view('OtpRegister');
    }

    public function generate(Request $request)
    {
        $request->validate([
            'mobile_no' => 'required | exists : users, mobile_no'
        ]);
        $userOTP = $this->generateOTP($request->mobile_no);
        $userOTP->sendOTP($request->mobile_no);

        return redirect()->route('otp.verification', ['user_id', $userOTP->user_id])
            ->with('success', 'OTP has been sent on your Mobile Number!');
    }

    public function generateOTP($mobile_no)
    {
        $user = User::where('mobile_no', $mobile_no)->first();
        $userOtp = UserOtp::where('user_id', $user->id)->latest()->first();

        $now = now();

        if($userOtp && $now->isBefore($userOtp->expire_at)) {
            return $userOtp;
        }

        return UserOtp::create([
            'user_id' => $user->id,
            'otp' => rand(123, 999),
            'expire_at' => $now->addMinutes(10),
        ]);

    }
}
