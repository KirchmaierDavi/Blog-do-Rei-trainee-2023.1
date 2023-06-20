<?php 
namespace App\Controllers;
use App\Core\App;

session_start(); 

$costumables = App::get('database')->selectAll("blog_content");
$tables = [
    'costumables' => $costumables,
];

?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de visualização única </title>
    <link rel="shortcut icon" href="../../../public/assets/favicon.png" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&family=Quicksand:wght@300;400;600&family=Roboto:wght@300;500&display=swap"
        rel="stylesheet"/>

    <link rel="stylesheet" href="../../../public/css/pvu.css">
    <link rel="stylesheet" href="../../../public/css/navbar-footer.css"/>
    <link rel="stylesheet" href="../../../public/css/reset.css"/>

</head>
<style>
.modal-button {
    background-color: <?=$costumables[0]->main_color?>;
    }
</style>
<body>

    <?php require('app/includes/NavBar.php'); ?>

    <div class="singlepost">
        <?php foreach ($posts as $post): ?>
            <div class="singlepost-content">
                    <h1>
                        <?= $post->title ?>
                    </h1>

                    <?php
                    $content = $post->content;
                    $max_length = 356;

                    if (strlen($content) > $max_length) {
                        $substring = substr($content, 0, $max_length);
                        $last_space = strrpos($substring, ' ');
                        $first_half = substr($substring, 0, $last_space);
                        $second_half = substr($content, $last_space);
                    } else {
                        $first_half = $content;
                        $second_half = '';
                    } ?>

                    <h2><?= $first_half ?></h2>
                    
                    <div class="singlepost-image">
                         <img src="<?= $post->image ?>" alt="Imagem"> 
                    </div>

                    <h2> <?= $second_half ?></h2>

                    <hr>

                    <p class="post-author">Autor: <?php foreach($users as $user):$aux = $post->author; if($user->id == $aux) echo $user->name; endforeach;?></p>
                    <hr>
            </div>

            <br>
            <div class="singlepost-backtohome">
               <a class="modal-button" id="back-to-home" href="/" target="white"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#000000}</style><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg></a>
            </div>
        <?php endforeach; ?>
    </div>

    <?php require('app/includes/BackToTop.php'); ?>
    <?php require('app/includes/FooterBar.php'); ?>
    <script src="../../../public/js/navbar.js"></script>
</body>

</html>