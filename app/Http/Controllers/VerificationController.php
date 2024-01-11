<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Ichtrojan\Otp\Otp;
use App\Models\OtpCode;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Ichtrojan\Otp\Models\Otp as ModelsOtp;

class VerificationController extends Controller
{
    //

    public function showVerificationForm(Request $request)
    {
        return view('otpVerification.otpVerification');
    }

    public function valideOtpCode(Request $request)
    {
        $code = null;
        $otp = $request->input('otp');
        //  dd($otp);
        foreach ($otp as $number) {
            $code .= $number;
        }
        try {
            $identifier = ModelsOtp::where('token', $code)->first();
            if (!$identifier) {
                return back()->with('status', 'Code incorrect');
            } else {
                $otp = new Otp();
                $identifier = $identifier->identifier;
                $otpVerify =  $otp->validate($identifier, $code);

                if ($otpVerify->status === true) {
                    $user = User::findOrFail($identifier);
                    $user->email_verified_at = now();
                    $user->save();
                }

                else{
                    return back()->with('status', '' .$otpVerify->message);
                }
            }

            return redirect(RouteServiceProvider::HOME);
        } catch (Exception $e) {
            //   return $this->respondWithMessage('' . $e->getMessage());
            return back()->with('status', '' . $e->getMessage());
        }
    }
}
