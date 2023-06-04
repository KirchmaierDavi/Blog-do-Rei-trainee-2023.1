<?php
namespace App\Controllers;

use App\Core\App;
use Exception;

class PostIndividualController
{
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
}


?>