<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class AdmControllerPost
{
    public function view()
    {
        $posts = App::get('database')->selectAll('posts');
        $users = App::get('database')->selectAll('users');
        $tables = [
            'posts' => $posts,
            'users' => $users,
        ];

        return view('admin/postList', $tables);
    }

    public function viewById()
    {
        if(isset($_POST['id'])) {
            $postId = $_POST['id'];
            $post = App::get('database')->selectById('posts', $postId);
            $tables = [
                'posts' => [$post],
            ];
    
            return view('admin/postList', $tables);
        } else {
            exit();
        }
    }

    public function edit()
    {
        $id = $_POST['id'];
        $parameters = [
            'title' => $_POST['titulo'],
            'content' => $_POST['texto'],
            'image' => $_POST['imagem'],
            'created_at' => $_POST['data'],
            'author' => $_POST['autor'],
        ];

        App::get('database')->edit('posts', $id, $parameters);

        header('Location: /admin/postList');
    }

    public function delete()
    {
        $id = $_POST['id'];

        App::get('database')->delete('posts', $id);

        header('Location: /admin/postList');
    }

    public function create()
    {
        $parameters = [
            'title' => $_POST['titulo'],
            'content' => $_POST['texto'],
            'image' => $_POST['imagem'],
            'created_at' => $_POST['data'],
            'author' => $_POST['autor'],
        ];

        App::get('database')->insert('posts', $parameters);

        header('Location: /admin/postList');

    }

}