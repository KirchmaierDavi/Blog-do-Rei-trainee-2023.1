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

    public function viewLanding()
    {
        $posts = App::get('database')->selectLastPosts('posts');
        $tables = [
            'posts' => $posts,
        ];
        return view('views/site/landing_page', compact('posts'));
    }

    public function viewLogin()
    {
        return view('views/site/login');
    }

    public function postIndividual()
    {
        $id = $_POST['id'];
        $postagens = App::get('database')->selectPost($id, 'posts');

        $tables = [
            'post' => $postagens,
        ];

        $posts = $tables['post'];

        return view('views/site/pvu', compact('posts'));
    }

    public function postsList()
    {
        $page = 1;
        
        if (isset($_GET['pagina']) && !empty($_GET['pagina'])){
            $page = intval($_GET['pagina']);

            if($page <= 0){
                return redirect('posts');
            }
        }


        $items_per_page = 3;
        $start_limit = $items_per_page * $page - $items_per_page;
        $rows_count = App::get('database')->countCases('posts');

        if($start_limit > $rows_count){
            return redirect('posts');
        }

        $total_pages = ceil($rows_count/$items_per_page);

        $posts = App::get('database')->selectAll('posts', $start_limit, $items_per_page);
        $tables = [
            'posts' => $posts,
        ];

        return view('views/site/postsList', compact('posts','page','total_pages'));
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

    public function delete()
    {
        $id = $_POST['id'];

        App::get('database')->delete('posts', $id);

        header('Location: /admin');
    }

    public function create()
    {
        $parameters = [
            'title' => $_POST['title'],
            'content' => $_POST['content'],
            'image' => $_POST['image'],
            'created_at' => $_POST['created_at'],
            'author' => $_POST['author'],
            'tag' => $_POST['tag'],
        ];

        App::get('database')->insert('posts', $parameters);

        header('Location: /admin');

    }

}