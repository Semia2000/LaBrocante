<?php


namespace App\Actions\Fortify;

use Illuminate\Support\Facades\Route;

class CustomCreateNewUser extends CreateNewUser
{
    /**
     * The path the user should be redirected to after creation.
     *
     * @var string
     */
    public $redirectTo = '/verify-otp';

    // ... autres méthodes si nécessaire
}
