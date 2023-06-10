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
    <link rel="stylesheet" href="../../public/css/userlist-modal_style.css" />
    <link rel="stylesheet" href="../../public/css/form.css">
    <link rel="stylesheet" href="../../../public/css/sidebar.css">
    <title>UserList</title>
</head>

<body class="d-flex flex-row">

    <?php require('app/includes/SideBar.php'); ?>

    <div class="userlist-content 
                d-flex flex-column
                mx-auto">

        <!-- Título -->
        <div class="userlist-title-card shadow">
            <div class="userlist-title">
                <h1>Dashboard de Usuários</h1>
            </div>

            <div class="userlist-newuser">
                <button type="button" class="btn btn-success " id="new-user" onclick="dashboardFunctions(this)">Criar
                    Usuário</button>
            </div>
        </div>
        <!--Versão Desktop-->

        <!-- Cabeçalho -->
        <div class="userlist-header 
                    d-flex flex-row 
                    shadow text-center
                    p-2 mb-4">
            <div class="userlist-header-item">Id</div>
            <div class="userlist-header-item">Usuário</div>
            <div class="userlist-header-item">E-mail</div>
            <div class="userlist-header-item">Ações</div>
        </div>


        <!-- Conteudo -->
        <?php foreach($users as $key=>$user): ?>
        <div class="userlist-userboxD
                    d-flex flex-row 
                    shadow text-center
                    p-4
                    align-items-center">
                    <!-- <?php echo $user->id ?> -->
            <div class="userlist-userboxD-item text-left"><?=$key+1?></div>
            <div class="userlist-userboxD-item"><?php echo $user->name ?></div>
            <div class="userlist-userboxD-item"><?php echo $user->email ?></div>
            <div class="userlist-userboxD-item userlist-userboxD-actions">
                <button type="button" class="btn btn-info" id="show-user-<?php echo $user->id ?>" onclick="dashboardFunctions(this)">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-eye-fill" viewBox="0 0 16 16">
                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                    </svg><span> Visualizar</span></button>
                <button type="button" class="btn btn-warning" id="edit-user-<?php echo $user->id ?>" onclick="dashboardFunctions(this)" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-pencil-fill" viewBox="0 0 16 16">
                        <path
                            d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                    </svg><span> Editar</span></button>
                <button type="button"  id="delete-user-<?php echo $user->id ?>" onclick="dashboardFunctions(this)" class="btn btn-danger">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-trash-fill" viewBox="0 0 16 16">
                        <path
                            d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                    </svg><span> Deletar</span></button>
            </div>
        </div>
        <!--Versão Mobile-->
        <div class="userlist-userboxM accordion " id="user_card_<?php echo $user->id ?>">
            <div class="accordion-item">
                <h2 class=" userlist-userboxM-header 
                                  accordion-header" id="user_card_<?php echo $user->id ?>_head">
                    <button class=" accordion-button collapsed 
                                    d-flex justify-content-around" type="button" data-bs-toggle="collapse"
                        data-bs-target="#user_card_<?php echo $user->id ?>_collapse" aria-expanded="true"
                        aria-controls="user_card_<?php echo $user->id ?>_collapse">

                        <div class="d-flex flex-column justify-content-around flex-fill ">
                            <div class="d-flex flew-row justify-content-between ">
                                <div class="userlist-userboxM-header-title ">
                                    Id
                                </div>
                                <div class="userlist-userboxM-header-title">
                                    Usuário
                                </div>
                            </div>
                            <div class="d-flex flew-row justify-content-between">
                                <div class="userlist-userboxM-header-content">
                                <?php echo $user->id ?>
                                </div>
                                <div class="userlist-userboxM-header-content">
                                <?php echo $user->name ?>
                                </div>
                            </div>
                        </div>
                    </button>
                </h2>

                <div id="user_card_<?php echo $user->id ?>_collapse" class="accordion-collapse collapse " aria-labelledby="user_card_<?php echo $user->id ?>_head"
                    data-bs-parent="#user_card_<?php echo $user->id ?>">
                    <div class="userlist-userboxM-body accordion-body">
                        <div class="userlist-userboxM-body-title pb-2">
                            E-mail:
                        </div>
                        <div class="userlist-userboxM-body-content pb-2">
                        <?php echo $user->email ?>
                        </div>
                        <div class="userlist-userboxM-body-title pb-3">
                            Ações:
                        </div>
                        <div class="userlist-userboxM-body-content
                                    d-flex justify-content-around">
                            <button type="button" class="btn btn-info"  onclick="dashboardFunctions(this)" id="show-user-<?php echo $user->id ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-eye-fill" viewBox="0 0 16 16">
                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                </svg>
                            </button>
                            <button type="button" class="btn btn-warning"  id="edit-user-<?php echo $user->id ?>" onclick="dashboardFunctions(this)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                </svg>
                            </button>
                            <button type="button" class="btn btn-danger"  id="delete-user-<?php echo $user->id ?>" onclick="dashboardFunctions(this)">
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

        <div id="modal-new-user" class="dashboard-modal shadow">
            <div class="modal-header">
                <h2>Novo Usuário</h2>
                <span class="modal-close">&times;</span>
            </div>
            <form action="userList/create" METHOD="POST">
                <div class="form-group">
                    <label class="modal-label" for="username">Usuário (@username):</label>
                    <input type="text" id="username" name="username" class="form-control" required>
                </div>
                <div class="form-group">
                    <label class="modal-label" for="email">E-mail:</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label class="modal-label" for="password">Senha</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label class="modal-label" for="confirmpassword">Confirmar Senha</label>
                    <input type="password" id="confirmpassword" name="confirm-password" class="form-control" required>
                </div>
                <div class="buttons">
                    <button class="modal-button" type="submit" id="new-user-new">Salvar</button>
                    <button class="modal-button" type="reset" id="new-user-reset">Limpar</button>
                </div>
            </form>
        </div>

        </br>

        <?php foreach($users as $user): ?>
        <div id="modal-edit-user-<?php echo $user->id ?>" data-second-id="<?php echo $user->id ?>" class="dashboard-modal shadow">
            <div class="modal-header">
                <h2>Editar Usuário</h2>
                <span class="modal-close">&times;</span>
            </div>
            <form action="userList/update" METHOD="POST">
                <div class="form-group">
                    <label class="modal-label" for="username">Editar Usuário (@username):</label>
                    <input type="text" id="username" name="username" class="form-control"  value="<?php echo $user->name ?>" required>
                </div>
                <div class="form-group">
                    <label class="modal-label" for="new-email" src="<?php echo $user->email ?>">E-mail:</label>
                    <input type="new-email" id="email" name="new-email" class="form-control" value="<?php echo $user->email ?>" required>
                </div>
                <div class="form-group">
                    <label class="modal-label" for="password">Senha Atual:</label>
                    <input type="password" id="password" name="password" class="form-control" value="<?php echo $user->password?>" required>
                </div>
                <div class="form-group">
                    <label class="modal-label" for="new-password">Nova Senha:</label>
                    <input type="new-password" id="new-password" name="new-password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label class="modal-label" for="confirm-password">Confirmar Senha</label>
                    <input type="confirm-password" id="confirm-password" name="confirm-password" class="form-control" required>
                </div>
                <input type="hidden" name="id" value="<?php echo $user->id;?>">
                <div class="buttons">
                    <button class="modal-button" type="submit" id="edit-user">Salvar</button>
                    <button class="modal-button" type="reset" id="edit-user-reset">Limpar</button>
                </div>
            </form>
        </div>

        <div id="modal-show-user-<?php echo $user->id ?>" class="dashboard-modal shadow">
            <div class="modal-header">
                <h2>Visualizar Usuário</h2>
                <span class="modal-close">&times;</span>
            </div>
            <form >
                <div class="form-group">
                    <label class="modal-label" for="username">Usuário (@username):</label>
                    <input type="text" id="username" disabled name="username" class="form-control text-center"  value="<?php echo $user->name ?>">
                </div>
                <div class="form-group">
                    <label class="modal-label" for="new-email" src="<?php echo $user->email ?>">E-mail:</label>
                    <input type="new-email" id="email" disabled name="new-email" class="form-control text-center" value="<?php echo $user->email ?>">
                </div>
                <div class="form-group">
                    <label class="modal-label" for="password">Senha</label>
                    <input type="password" id="password" disabled name="password" class="form-control text-center" value="<?php echo $user->password?>">
                </div>
            </form>
        </div>

        <div id="modal-delete-user-<?php echo $user->id ?>" data-second-id="<?php echo $user->id ?>" class="dashboard-modal shadow">
            <div class="modal-header">
                <h2>Excluir Usuário</h2>
                <span class="modal-close">&times;</span>
            </div>
            <form action="userList/delete" METHOD="POST">
                <div class="form-group">
                    <label class="modal-label" for="username">Tem certeza que deseja excluir esse usuário?</label>
                </div>
                <input type="hidden" name="id" value="<?php echo $user->id;?>">
                <div class="buttons">
                    <button class="modal-button" type="submit" id="delete-user">Excluir</button>
                    <button class="modal-button" type="reset" id="delete-user-reset">Cancelar</button>
                </div>
            </form>
        </div>

        <?php endforeach; ?>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="../../public/js/modal.js"></script>
    
    <script>
        const menuToggle = document.querySelector('.menuToggle');
        const navigation = document.querySelector('.navigation');
        menuToggle.onclick = function () {
            navigation.classList.toggle('open')
        }

        const list = document.querySelectorAll('.list');
        function activeLink(){
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