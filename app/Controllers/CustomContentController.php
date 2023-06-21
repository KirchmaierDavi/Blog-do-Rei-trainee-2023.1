<?php

namespace App\Controllers;

use App\Core\App;
use PDO, Exception;

class CustomContentController
{

    public function view()
    {
        $costumables = App::get('database')->selectPost(1,'blog_content');
        $costumables = $costumables[0];
        return view('admin/adminContent', compact('costumables'));
    }

    public function edit()
    {
        $parameters = [
            'about_us' => $_POST['about_us'],
            'memorium' => $_POST['memorium'],
            'main_color' => $_POST['main-color'],
            'main_color_hover' => $_POST['main-color-hover'],
            'secondary_color' => $_POST['second-color'],
            'secondary_color_hover' => $_POST['second-color-hover'],
            'headers_colors' => $_POST['headers-colors'],
            'about_us_links_colors' => $_POST['about-us-link-color'],
        ];
        var_dump($_FILES);
        if($_FILES['logo_image']['name'] !== ''){
            $arquivo = $_FILES['logo_image']['name'];
            $novoNome = uniqid();
            $pasta = 'public/img/';
            $extencao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
            move_uploaded_file($_FILES['logo_image']['tmp_name'], $pasta . $novoNome . "." . $extencao);
            $parameters += ['logo_image' =>  $pasta . $novoNome . "." . $extencao,];
        }
            App::get('database')->edit('blog_content',1,$parameters);
            header('location: /admin/customize');
        
    }

    public function reset()
    {
        $costumables = App::get('database')->selectAll("blog_content");
        $parameters = [
            'about_us' => $costumables[0]->about_us,
            'memorium' => $costumables[0]->memorium,
            'main_color' => $costumables[0]->main_color,
            'main_color_hover' => $costumables[0]->main_color_hover,
            'secondary_color' => $costumables[0]->secondary_color,
            'secondary_color_hover' => $costumables[0]->secondary_color_hover,
            'headers_colors' => $costumables[0]->headers_colors,
            'about_us_links_colors' => $costumables[0]->about_us_links_colors,
        ];
        App::get('database')->edit('blog_content',1,$parameters);
        header('location: /admin/customize');
    }
}