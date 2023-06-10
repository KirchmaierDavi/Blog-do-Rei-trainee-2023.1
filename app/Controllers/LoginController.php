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
        
        $email = $_POST["login"];
        $password = $_POST["password"];

        $logged = App::get('database')->login('users', $email, $password);

        if($logged){
            session_start();
            $_SESSION['logado'] = true;
            header('Location: /');
        } else { 
            $erro = [
                'erro' => "Usuário ou senha inválidos",
            ] ;
            return view('views/site/login', $erro);
        }

    }

public function logout(){
    session_start();
    session_destroy();
    header('Location: /');
}

}