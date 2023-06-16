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
        return view('admin/userList', $user_table);
    }
    public function newUser()
    {
        $parameters = [
            'name' => $_POST['username'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
        ];

        App::get('database')->insert('users', $parameters);

        header('Location: /admin/userList');
    }

    public function editUser()
    {
        $id = $_POST['id'];
        $parameters = [
            'name' => $_POST['username'],
            'email' => $_POST['new-email'],
            'password' => $_POST['new-password'],
        ];
        App::get('database')->edit('users', $id, $parameters);
        
        header('Location: /admin/userList');
    }

    public function delete()
    {
        $id = $_POST['id'];

        App::get('database')->delete('users', $id);

        header('Location: /admin/userList');
        
    }

    public function error()
    {
        return view('admin/userListError');
    }

}

?>