<?php

namespace App\Controllers;

use App\Core\App;
use PDO, Exception;

class CustomContentController
{

    public function view()
    {
        $costumables = App::get('database')->selectAll("blog_content");
        $tables = [
            'costumables' => $costumables,
        ];
        return view('admin/adminContent', compact('costumables'));
    }

    public function edit()
    {
        var_dump($_FILES);
        if($_FILES['logo_image']['name'] === ''){
            $parameters = [
                'about_us' => $_POST['about_us'],
                // 'image' =>  $pasta . $novoNome . "." . $extencao,
                'memorium' => $_POST['memorium'],
                'main_color' => $_POST['main-color'],
                'main_color_hover' => $_POST['main-color-hover'],
                'secondary_color' => $_POST['second-color'],
                'secondary_color_hover' => $_POST['second-color-hover'],
                'headers_colors' => $_POST['headers-colors'],
                'about_us_links_colors' => $_POST['about-us-link-color'],
            ];
            App::get('database')->edit('blog_content',1,$parameters);
            header('location: /admin/customize');
        }
        else{
            $arquivo = $_FILES['logo_image']['name'];
            $novoNome = uniqid();
            $pasta = 'public/img/';
            $extencao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
            move_uploaded_file($_FILES['logo_image']['tmp_name'], $pasta . $novoNome . "." . $extencao);
    
            $parameters = [
                'logo_image' =>  $pasta . $novoNome . "." . $extencao,
                'about_us' => $_POST['about_us'],
                'memorium' => $_POST['memorium'],
                'main_color' => $_POST['main-color'],
                'main_color_hover' => $_POST['main-color-hover'],
                'secondary_color' => $_POST['secondary-color'],
                'secondary_color_hover' => $_POST['secondary-color-hover'],
                'headers_colors' => $_POST['headers-colors'],
                'about_us_link_color' => $_POST['about-us-link-color'],
            ];
            App::get('database')->edit('blog_content',1,$parameters);
            header('location: /admin/customize');
        }
    }
}