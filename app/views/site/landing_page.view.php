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
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Blog do Rei - Home</title>
    <link rel="shortcut icon" href="../../../public/assets/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../../../public/css/reset.css"/>
    <link rel="stylesheet" href="../../../public/css/navbar-footer.css"/>
    <link rel="stylesheet" href="../../../public/css/landing_page.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<style>
    .container:before, .destaque{
        background-color: <?=$costumables[0]->secondary_color?>;
        }

    .modal-button{
        background-color: <?=$costumables[0]->main_color?>;
    }
    .modal-button:hover{
        background-color: <?=$costumables[0]->main_color_hover?>;
    }

    .posts article h2 {
        color: <?=$costumables[0]->headers_colors?>;
    }
</style>

<body>

    <?php require('app/includes/NavBar.php'); ?>

    <div class="header">
        <img src="../../../public/assets/landing_page/texto.png" alt="logo do blog">
    </div>

    <div class="line"></div>
    <div class="retrospectiva">
        <img src="../../../public/assets/landing_page/retrospectiva.png" alt="restrospectiva pelé">
        <div class="line"></div>
    </div>

    <div class="responsividade">
        <div class="retrospectiva_vertical">
            <img src="../../../public/assets/landing_page/retrospectiva_vertical.png" alt="restrospectiva pelé">
            <div class="line"></div>
            <div class="animation">
                <img src="../../../public/assets/landing_page/imagem-fundo.png" alt="">
                <img id="my-image" src="../../../public/assets/landing_page/bola.png" alt="">
            </div>
        </div>

        <div class="box">
            <aside>
            <ul>
                    <li class="destaque">
                        <div class="image-container" >
                            <img src="../../../public/assets/landing_page/santos.png" alt="">
                            <img src="../../../public/assets/landing_page/vasco.png" alt="">
                            <img src="../../../public/assets/landing_page/copa.png" alt="">
                        </div>
                        <span class="text">DESTAQUES</span>
                    </li>
    
                    <li class="sobre" >
                        <div class="container">
                            <div class="text">SOBRE</div>
                        </div>
                        <div class="container">
                            <div class="text" style="font-weight: 700;">NÓS</div>
                        </div>
                        <p><?=$costumables[0]->about_us?></p>
                    </li>
                    
                    <li class="animation">
                            <img src="../../../public/assets/landing_page/imagem-fundo.png" alt="">
                            <img id="my-image" src="../../../public/assets/landing_page/bola.png" alt="">
                    </li>
            </ul>
            </aside>

            <main>
            <section class="posts">
            <?php foreach($posts as $post): ?>
                <form method="post" action="posts/postIndividual">
                    <article>
                        <div class="content">
                            <h1><?php echo $post->title?></h1>
                            <h2><?php echo $post->created_at?> | Autor: <?php foreach($users as $user):$aux = $post->author; if($user->id == $aux) echo $user->name; endforeach;?></h2>
                            <p><?php echo substr($post->content, 0, 120) . "...";?></p>
                            <img class="post-img" src="<?php echo $post->image?>" alt="Imagem"  style="max-height:300px;">
                            <input type="hidden" name="id" value="<?php echo $post->id?>">
                            <button type="submit" class="modal-button" title="Ler Post Completo">Ler Post Completo</button>
                        </div>
                    </article>
                </form>
            <?php endforeach; ?>
            </section>
            </main>
        </div>
    </div>
    <?php require('app/includes/BackToTop.php'); ?>

    <?php require('app/includes/FooterBar.php'); ?>
    <script src="../../../public/js/navbar.js"></script>
    <script src="../../../public/js/backToTop.js"></script>
</body>
</html>
