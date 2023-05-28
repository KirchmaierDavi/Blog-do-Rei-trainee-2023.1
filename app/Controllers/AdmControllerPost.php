<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class AdmControllerPost
{
    public function view()
    {
        $posts = App::get('database')->selectAll('posts');
        $tables = [
            'posts' => $posts,
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
        $parameters = [
            'title' => $_POST['title'],
            'content' => $_POST['content'],
            'image' => $_POST['image'],
            'created_at' => $_POST['created_at'],
            'author' => $_POST['author'],
            'tag' => $_POST['tag'],
        ];

        App::get('database')->edit('posts', $_POST['id'], $parameters);

        header('Location: /admin');
    }

}