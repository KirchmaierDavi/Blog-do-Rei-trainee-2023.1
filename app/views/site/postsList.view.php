<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../../public/css/posts.css">
    <link rel="stylesheet" href="../../../public/css/navbar-footer.css"/>
    <link rel="stylesheet" href="../../../public/css/pagination.css"/>
    <link rel="stylesheet" href="../../../public/css/reset.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700&display=swap" rel="stylesheet">
    <title>Lista de Postagens</title>
</head>

<body>
    <?php require('app/includes/NavBar.php'); ?>
    <div class="top">
        <img class="logo-img" src="../../../public/assets/Logo.png" alt="Logo Blog">

        <hr width="95%" size="2" color="black">
    </div>

    <div class="main">

        <div class="post-container">
            <h1 class="title">Posts recentes</h1>
            <?php foreach($posts as $post): ?>
            <div class="posts">
                <img src="https://s2.glbimg.com/cg7lC_rtGFoydU0OEVRZnjUkDDA=/0x0:499x499/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_08fbf48bc0524877943fe86e43087e7a/internal_photos/bs/2020/m/6/VCHw5dSZyi1tHN9y7aUw/93947722-913006105786957-7296841504158624479-n.jpg"
                    alt="foto-pele">
                <div class="posts-text">
                    <form method="post" action="posts/postIndividual">
                        <h5 class="date"><?=$post->created_at?> </h5>

                        <h1> <?= $post->title ?></h1>

                        <p><?php echo substr($post->content, 0, 120) . "...";?></p>

                        <div class="edge">
                            <hr>
                            <input type="hidden" name="id" value="<?php echo $post->id?>">
                            <button type="submit" class="modal-button" title="Ler Post Completo">Ler Post Completo</button>
                        </div>
                    </form>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="recents">
            <div class="search-box">
                <input type="text" class="search-text" placeholder="Pesquisar">
                <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path
                        d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                </svg>
            </div>

            <div class="memorium">
                <img src="../../../public/assets/pele.jpg" alt="Foto Pelé" style="width: 340px;">
                <p>“O sucesso não acontece por acaso. É trabalho duro, perseverança, aprendizado, estudo, sacrifício e,
                    acima de tudo, amor pelo que você está fazendo ou aprendendo a fazer.”</p>
                <hr width="65%">

                <p class="dates">
                    <svg style="height: 12px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path
                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                    </svg>
                    23/10/1940
                    <svg style="width: 10px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                        <path
                            d="M176 0c-26.5 0-48 21.5-48 48v80H48c-26.5 0-48 21.5-48 48v32c0 26.5 21.5 48 48 48h80V464c0 26.5 21.5 48 48 48h32c26.5 0 48-21.5 48-48V256h80c26.5 0 48-21.5 48-48V176c0-26.5-21.5-48-48-48H256V48c0-26.5-21.5-48-48-48H176z" />
                    </svg>
                    29/12/2022
                </p>
            </div>
        </div>
    </div>
    <?php require('app/includes/Pagination.php'); ?>
    <?php require('app/includes/FooterBar.php'); ?>
    <script src="../../../public/js/navbar.js"></script>
</body>

</html>