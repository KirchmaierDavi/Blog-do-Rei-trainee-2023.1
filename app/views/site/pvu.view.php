<!DOCTYPE html>

<html>

<head>
    <title>Pagina de visualização única </title>

    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&family=Quicksand:wght@300;400;600&family=Roboto:wght@300;500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../../../public/css/pvu.css">
    <link rel="stylesheet" href="../../../public/css/navbar-footer.css"/>
    <link rel="stylesheet" href="../../../public/css/reset.css"/>

</head>

<body>

    <?php require('app/includes/NavBar.php'); ?>

    <div class="main">
        <?php foreach ($posts as $post): ?>
            <div class="informations">
                <label for=text>
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
                    
                    <div class="container">
                        <img src="../../../public/assets/copa58.jpg" alt="Copa de 1958">
                        <figcaption class="post-description">Copa de 1958,Pelé é o terceiro jogador da esquerda para a adireita na fileira dos
                            jogadores que estão abaixados</figcaption>
                    </div>

                    <h2> <?= $second_half ?></h2>

                    <hr>
                    <h3>Informações Adicionais(Detalhes extras que existem no post)</h3>
                </label>
            </div>

            <br>
            <div class="voltar">
               <a class="modal-button back-to-home" href="/home" target="white">Voltar<a>
            </div>
        <?php endforeach; ?>
    </div>

    <?php require('app/includes/FooterBar.php'); ?>
    <script src="../../../public/js/navbar.js"></script>
</body>

</html>