<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class UserController
{

    public function view()
    {
        $users = App::get('database')->selectAll('users');
        $user_table = [
            'users' => $users,
        ];
        return view('userList', $user_table);
    }
    public function newUser()
    {
        $parameters = [
            'NAME' => $_POST['username'],
            'email' => $_POST['email'],
            'PASSWORD' => $_POST['password'],
        ];

        App::get('database')->insert('users', $parameters);

        header('Location: /admin');
    }

    public function editUser()
    {
        $id = $_POST['id'];
        $parameters = [
            'NAME' => $_POST['username'],
            'email' => $_POST['new-email'],
            'PASSWORD' => $_POST['new-password'],
        ];
        App::get('database')->edit('users', $id, $parameters);
        
        header('Location: /admin');
    }

    public function deleteUser()
    {
        $id = $_POST['id'];

        App::get('database')->delete('users', $id);

        header('Location: /admin');
    }

}

?>