<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class LoginController
{
    public function confirmLogin()
    {
        $parameters = [
            'email' => $_POST['login'],
            'password' => $_POST['password'],
        ];

        App::get('database')->login('users', $parameters);

        header('Location: /admin');
    }

}