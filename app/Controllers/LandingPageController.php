<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class LandingPageController
{


    public function view()
    {
        $posts = App::get('database')->selectLastPosts('posts');
        $tables = [
            'posts' => $posts,
        ];
        return view('views/site/landing_page', compact('posts'));
    }

}

?>