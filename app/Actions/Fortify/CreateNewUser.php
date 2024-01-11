<?php

namespace App\Actions\Fortify;

use Exception;
use App\Models\Role;
use App\Models\User;
use App\Mail\SendOtp;
use Ichtrojan\Otp\Otp;
use App\Models\OtpCode;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
use Ichtrojan\Otp\Models\Otp as ModelsOtp;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User|RedirectResponse
    {
        $validator = Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
        ]);

        $user =  User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);

        $role = Role::where('nom','utilisateur')->first();

        $user->roles()->attach($role->id);

        $otp = new Otp();
        $otpCode = $otp->generate($user->id, 'numeric', 4, 15);
        $CodeOtp = $otpCode->token;

        try {
            Mail::to($user->email)
                ->send(new SendOtp($CodeOtp));
              //  return redirect()->route('verify-otp');
              //return app(RedirectResponse::class)->intended('verify-otp');
           //   return $user;
          // Auth::login($user);
           return redirect()->route('verify-otp');

        } catch (\Exception $e) {

            throw ValidationException::withMessages(['email' => 'Erreur lors de l\'envoi du code OTP']);
        }


    }
}
