<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class LoginController
{

    public function view()
    {

        return view('views/site/login');
    }
    public function confirmLogin()
    {
        session_start();
        $email = $_POST["login"];
        $password = $_POST["password"];

        $logged = App::get('database')->login('users', $email, $password);

        if(isset($logged)){
            $_SESSION['id'] = $logged['email'];
            $_SESSION['password'] = $logged['password'];
            $_SESSION['logado'] = true;
            header('Location: /');
        } else { 
            unset($_SESSION['id']);
            unset($_SESSION['password']);
            $erro = [
                'erro' => "Usuário ou senha inválidos",
            ] ;
            return view('views/site/login', $erro);
        }

    }

}