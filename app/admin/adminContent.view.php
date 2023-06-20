<?php require('app/includes/Validation.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="../../public/css/customizeContent.css" />
    <link rel="stylesheet" href="../../../public/css/sidebar.css">
    <link rel="stylesheet" href="../../../public/css/form.css">
    <title>Customize o Site</title>
    <link rel="shortcut icon" href="../../../public/assets/favicon.png" type="image/x-icon">
</head>

<body class="d-flex flex-row">

    <?php require('app/includes/SideBar.php'); ?>

    <div class="customize-content 
                d-flex flex-column
                mx-auto">

        <!-- Título -->
        <div class="customize-card shadow">
            <div class="customize-title">
                <h1>Customize o Site</h1>
            </div>
        </div>


        <form enctype="multipart/form-data" action="customize" METHOD="POST"
            class="d-flex flex-column justify-content-center">
            <div class="form-group">
                <label class="modal-label" for="logo_image">Logo:</label>
                <input type="file" id="logo_image" name="logo_image" class="form-control">
                <div class="form-control edit-logo-input">
                    <img src="../<?= $costumables[0]->logo_image ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="modal-label" for="about_us">Sobre nós (Homepage)</label>
                <textarea id="about_us" name="about_us" class="form-control"
                    required><?= $costumables[0]->about_us ?></textarea>
            </div>
            <div class="form-group">
                <label class="modal-label" for="memorium">Dedicatoria Lista de Posts:</label>
                <textarea id="memorium" name="memorium" class="form-control"
                    required><?= $costumables[0]->memorium ?></textarea>
            </div>
            <div class="form-group d-flex flex-row justify-content-between">
                <div>
                    <label for="main-color" class="modal-label">Cor principal do site </br>(Header, Footer, Botoes)</label>
                    <input type="color" value="<?=$costumables[0]->main_color?>" name="main-color" class="form-control">
                    <label for="main-color-hover" class="modal-label">Cor Hover principal do site </br>(Botoes)</label>
                    <input type="color" name="main-color-hover" value="<?=$costumables[0]->main_color_hover?>" class="form-control">
                </div>
                <div>
                    <label for="second-color" class="modal-label">Cor secundaria</br> (Cards Avulsos, Elementos únicos)</label>
                    <input type="color" name="second-color" value="<?=$costumables[0]->secondary_color?>" class="form-control">
                    <label for="second-color-hover" class="modal-label">Cor Hover secundaria do site </br>(Botoes)</label>
                    <input type="color" name="second-color-hover" value="<?=$costumables[0]->secondary_color_hover?>" class="form-control">
                </div>
                <div>
                    <label for="headers-colors" class="modal-label">Cor de marcadores </br>(Titulos coloridos, Redes sociais)</label>
                    <input type="color" name="headers-colors" value="<?=$costumables[0]->headers_colors?>" class="form-control">
                    <label for="about-us-link-color" class="modal-label">Cor Links Sobre Nos </br>(Titulos coloridos, Redes sociais)</label>
                    <input type="color" name="about-us-link-color" value="<?=$costumables[0]->about_us_links_colors?>" class="form-control">
                </div>
            </div>
            <div class="m-auto buttons">
                <button class="modal-button" type="submit" id="post-editing">Salvar</button>
                <button class="modal-button" type="reset" id="new-post-reset">Limpar</button>
            </div>
        </form>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>

    <script>
        const menuToggle = document.querySelector('.menuToggle');
        const navigation = document.querySelector('.navigation');
        menuToggle.onclick = function () {
            navigation.classList.toggle('open')
        }

        const list = document.querySelectorAll('.list');
        function activeLink() {
            list.forEach((item) =>
                item.classList.remove('active'));
            this.classList.add('active');
        }
        list.forEach((item) =>
            item.addEventListener('click', activeLink));
    </script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>