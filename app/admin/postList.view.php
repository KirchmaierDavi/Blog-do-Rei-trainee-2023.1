<?php require('app/includes/Validation.php') ?>
<!DOCTYPE html>
<html lang="pt-br">

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
    <link rel="stylesheet" href="../../public/css/list_post_user.css">
    <link rel="stylesheet" href="../../public/css/form.css">
    <link rel="stylesheet" href="../../../public/css/sidebar.css">
    <title>Lista de postagem</title>
    <link rel="shortcut icon" href="../../../public/assets/favicon.png" type="image/x-icon">
</head>

<body class="d-flex flex-row">

    <?php require('app/includes/SideBar.php'); ?>

    <div class="userlist-content 
                d-flex flex-column
                mx-auto">

        <!-- Título -->
        <div class="userlist-title-card shadow">
            <div class="userlist-title">
                <h1>Dashboard de Posts</h1>
            </div>

            <div class="userlist-newuser">
                <button type="button" class="btn btn-success " id="new-post" onclick="dashboardFunctions(this)">Novo
                    Post</button>
            </div>
        </div>
        <!--Versão Desktop-->

        <!-- Cabeçalho -->
        <div class="userlist-header 
                    d-flex flex-row 
                    shadow text-center
                    p-2 mb-4">
            <div class="userlist-header-item">Id</div>
            <div class="userlist-header-item">Post</div>
            <div class="userlist-header-item">Ações</div>
        </div>


        <!-- Conteudo -->
        <?php foreach ($posts as $key => $post): ?>
            <div class="userlist-userboxD
                    d-flex flex-row 
                    shadow text-center
                    p-4
                    align-items-center">
                <!-- <?php echo $post->id ?> -->
                <div class="userlist-userboxD-item text-left">
                    <?= $key + 1 ?>
                </div>
                <div class="userlist-userboxD-item">
                    <?php echo $post->title ?>
                </div>
                <div class="userlist-userboxD-item userlist-userboxD-actions">
                    <button type="button" class="btn btn-info" id="show-post-<?php echo $post->id ?>"
                        onclick="dashboardFunctions(this)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-eye-fill" viewBox="0 0 16 16">
                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                            <path
                                d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                        </svg><span> Visualizar</span></button>
                    <button type="button" class="btn btn-warning" id="post-editing-<?php echo $post->id ?>"
                        onclick="dashboardFunctions(this)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-pencil-fill" viewBox="0 0 16 16">
                            <path
                                d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                        </svg><span> Editar</span></button>
                    <button type="button" class="btn btn-danger" id="delete-post-<?php echo $post->id ?>"
                        onclick="dashboardFunctions(this)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-trash-fill" viewBox="0 0 16 16">
                            <path
                                d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                        </svg><span> Deletar</span></button>
                </div>
            </div>
        <?php endforeach; ?>

        <?php foreach ($posts as $key => $post): ?>

            <!--Versão Mobile-->
            <div class="userlist-userboxM accordion " id="user_card_1">
                <div class="accordion-item">
                    <h2 class=" userlist-userboxM-header 
                                  accordion-header" id="user_card_1_head">
                        <button class=" accordion-button collapsed 
                                    d-flex justify-content-around" type="button" data-bs-toggle="collapse"
                            data-bs-target="#user_card_<?php echo $post->id ?>_collapse" aria-expanded="true"
                            aria-controls="user_card_<?php echo $post->id ?>_collapse">

                            <div class="d-flex flex-column justify-content-around flex-fill ">
                                <div class="d-flex flew-row justify-content-between ">
                                    <div class="userlist-userboxM-header-title ">
                                        Id
                                    </div>
                                    <div class="userlist-userboxM-header-title">
                                        Post
                                    </div>
                                </div>
                                <div class="d-flex flew-row justify-content-between">
                                    <div class="userlist-userboxM-header-content">

                                        <?= $key + 1 ?>
                                    </div>
                                    <div class="userlist-userboxM-header-content">
                                        <?php echo substr($post->title, 0, 20) . ".."; ?>
                                    </div>
                                </div>
                            </div>
                        </button>
                    </h2>

                    <div id="user_card_<?php echo $post->id ?>_collapse" class="accordion-collapse collapse "
                        aria-labelledby="user_card_1_head" data-bs-parent="#user_<?php echo $post->id ?>">
                        <div class="userlist-userboxM-body accordion-body">
                            <div class="userlist-userboxM-body-content
                                    d-flex justify-content-around">
                                <button type="button" class="btn btn-info" id="show-post-<?php echo $post->id ?>"
                                    onclick="dashboardFunctions(this)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                    </svg>
                                </button>
                                <button type="button" class="btn btn-warning" id="post-editing-<?php echo $post->id ?>"
                                    onclick="dashboardFunctions(this)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                    </svg>
                                </button>
                                <button type="button" class="btn btn-danger" onclick="dashboardFunctions(this)"
                                    id="delete-post-<?php echo $post->id ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-trash-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div id="dashboard-functions">

        <div id="modal-new-post" class="dashboard-modal shadow">
            <div class="modal-header">
                <h2>Novo Post</h2>
                <span class="modal-close">&times;</span>
            </div>
            <form action="postList/create" METHOD="POST">
                <div class="form-group">
                    <label class="modal-label" for="titulo">Título:</label>
                    <input type="text" id="titulo" name="titulo" class="form-control" required>
                </div>
                <div class="form-group">
                    <label class="modal-label" for="texto">Texto:</label>
                    <textarea id="texto" name="texto" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label class="modal-label" for="autor">Autor:</label>

                    <select name="autor" id="autor" class="form-control" required>
                        <?php foreach ($users as $user): ?>
                            <option value="<?php echo $user->id ?>"><?php echo $user->name ?></option>
                        <?php endforeach; ?>
                    </select>

                </div>
                <div class="form-group">
                    <label class="modal-label" for="data">Data de Criação:</label>
                    <input type="date" id="data" name="data" class="form-control" required>
                </div>
                <div class="form-group">
                    <label class="modal-label" for="imagem">Imagem: (URL da imagem)</label>
                    <input type="url" id="imagem" name="imagem" class="form-control" required>
                </div>
                <div class="buttons">
                    <button class="modal-button" type="submit" id="new-post-new">Salvar</button>
                    <button class="modal-button" type="reset" id="new-post-reset">Limpar</button>
                </div>
            </form>
        </div>

        <?php foreach ($posts as $post): ?>
            <div id="modal-post-editing-<?php echo $post->id ?>" data-second-id="<?php echo $post->id ?>"
                class="dashboard-modal shadow">
                <div class="modal-header">
                    <h2>Editar Post</h2>
                    <span class="modal-close">&times;</span>
                </div>
                <form action="postList/update" METHOD="POST">
                    <div class="form-group">
                        <label class="modal-label" for="titulo">Título:</label>
                        <textarea id="titulo" name="titulo" class="form-control"
                            required><?php echo $post->title ?></textarea>
                    </div>
                    <div class="form-group">
                        <label class="modal-label" for="texto">Texto:</label>
                        <textarea id="texto" name="texto" class="form-control"
                            required><?php echo $post->content ?></textarea>
                    </div>
                    <div class="form-group">
                        <label class="modal-label" for="autor">Autor:</label>

                        <select name="autor" id="autor" class="form-control" required>
                            <option
                                value="<?php foreach ($users as $user):
                                    if ($user->id == $post->author)
                                        echo $user->id; endforeach; ?>">
                                <?php foreach ($users as $user):
                                    if ($user->id == $post->author)
                                        echo $user->name; endforeach; ?></option>
                            <?php foreach ($users as $user): ?>
                                <option value="<?php echo $user->id ?>"><?php echo $user->name ?></option>
                            <?php endforeach; ?>
                        </select>

                    </div>
                    <div class="form-group">
                        <label class="modal-label" for="data">Data de Criação:</label>
                        <input type="date" id="data" name="data" class="form-control"
                            value="<?php echo $post->created_at ?>" required>
                    </div>
                    <div class="form-group">
                        <label class="modal-label" for="imagem">Imagem:</label>
                        <input type="url" value="<?= $post->image ?>" id="imagem" name="imagem" class="form-control"
                            required>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $post->id; ?>">
                    <div class="buttons">
                        <button class="modal-button" type="submit" id="post-editing">Salvar</button>
                    </div>
                </form>
            </div>

            <div id="modal-show-post-<?php echo $post->id ?>" class="dashboard-modal shadow">
                <div class="modal-header">
                    <h2>Visualizar Post</h2>
                    <span class="modal-close">&times;</span>
                </div>
                <form>
                    <div class="form-group">
                        <label class="modal-label" for="titulo">Título:</label>
                        <textarea id="texto" name="texto" disabled
                            class="form-control"><?php echo $post->title ?></textarea>
                    </div>
                    <div class="form-group">
                        <label class="modal-label" for="texto">Texto:</label>
                        <textarea id="texto" name="texto" disabled
                            class="form-control"><?php echo $post->content ?></textarea>
                    </div>
                    <div class="form-group">
                        <label class="modal-label" for="autor">Autor:</label>
                        <input type="text" id="autor" name="autor" disabled class="form-control"
                            value="<?php foreach ($users as $user):
                                if ($user->id == $post->author)
                                    echo $user->name; endforeach; ?>">
                    </div>
                    <div class="form-group">
                        <label class="modal-label" for="data">Data de Criação:</label>
                        <input type="date" id="data" name="data" disabled class="form-control"
                            value="<?php echo $post->created_at ?>">
                    </div>

                </form>
            </div>

            <div id="modal-delete-post-<?php echo $post->id ?>" data-second-id="<?php echo $post->id ?>"
                class="dashboard-modal shadow">
                <div class="modal-header">
                    <h2>Excluir Post</h2>
                    <span class="modal-close">&times;</span>
                </div>
                <form action="postList/delete" METHOD="POST">
                    <div class="form-group">
                        <label class="modal-label" for="username">Tem certeza que deseja excluir esse post?</label>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $post->id; ?>">
                    <div class="buttons">
                        <button class="modal-button" type="submit" id="delete-user">Excluir</button>
                    </div>
                </form>
            </div>

        <?php endforeach; ?>
    </div>

    <?php require('app/includes/BackToTop.php'); ?>
    <script src="../../public/js/new-post.js"></script>
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

        let btt_button = document.getElementById("backToTop");
        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                btt_button.style.display = "block";
            } else {
                btt_button.style.display = "none";
            }
        }

        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }

        window.onscroll = function() {scrollFunction();};
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html>