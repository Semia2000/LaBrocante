<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerificationController extends Controller
{
    //

    public function showVerificationForm(Request $request)
    {
        return view('otpVerification.otpVerification');
    }
}
