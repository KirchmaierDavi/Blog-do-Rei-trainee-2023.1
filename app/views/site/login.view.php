<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../../public/css/styles.css">
    <link rel="stylesheet" href="../../../public/css/navbar-footer.css"/>
    <link rel="stylesheet" href="../../../public/css/reset.css"/>
    <link rel="shortcut icon" href="../../../public/assets/logo_sem_texto.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

    <title>Login</title>

</head>

<body>
    <?php require('app/includes/NavBar.php'); ?>
    <div class="container">
        <div class="forms-container">
            <div class="login">
                <form method="post" action="/views" class="login-form">

                    <h2 class="title">Login</h2>

                    <div class="input-login">
                        <i class="fas fa-user"></i>
                        <input name="login" type="email" placeholder="Email" />
                    </div>

                    <div class="input-login">
                        <i class="fas fa-lock"></i>
                        <input name="password" type="password" placeholder="Senha" />
                    </div>
                    <p style="color: red">
                     <?php 
                        if(isset($_POST['confirm'])){
                        echo $erro;
                        } 
                     ?> 
                    </p>
                    <input type="submit" value="Entrar" name="confirm" class="btn solid" />
                    <input type="reset" value="Limpar" class="btn solid" />

                </form>
            </div>
        </div>


        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">

                    <h3>Blog do rei</h3>

                    <p>
                        Volte ao blog para acompanhar todos os posts. Não perca nenhuma postagem!
                    </p>

                    <br>

                    <button class="btn transparent">
                        <a href="/">Voltar</a>
                    </button>

                </div>

                <img src="../../../public/assets/jogador.png" class="image" alt="Imagem do jogador" />

            </div>

        </div>
    </div>
    <?php require('app/includes/FooterBar.php'); ?>
    <script src="../../../public/js/navbar.js"></script>
</body>

</html>