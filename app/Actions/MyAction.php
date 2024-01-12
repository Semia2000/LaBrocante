<?php

namespace App\Actions;

use Laravel\Fortify\Contracts\CreatesNewUsers;

class MyAction implements CreatesNewUsers{

    public function create(array $input){

        dump($input);

        dd("From my service provider");

    }
}
