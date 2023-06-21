<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class LandingPageController
{


    public function view()
    {
        $posts = App::get('database')->selectLastPosts('posts');
        $users = App::get('database')->selectAll('users');
        $tables = [
            'posts' => $posts,
            'users' => $users,
        ];
        return view('views/site/landing_page', compact('users', 'posts'));
    }

}

?>