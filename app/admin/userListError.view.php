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
    <link rel="stylesheet" href="../../public/css/userlist-modal_style.css" />
    <link rel="stylesheet" href="../../public/css/form.css">
    <link rel="stylesheet" href="../../../public/css/sidebar.css">
    <title>Dashboard de usuários</title>
</head>

<body class="d-flex flex-row">

    <?php require('app/includes/SideBar.php'); ?>

    <div class="userlist-content 
                d-flex flex-column
                mx-auto">

        <!-- Título -->
        <div>
            <div>
                <h1>Não é possível excluir esse usuário no momento!</h1>
                <h6>Esse usuário possui posts publicados e portanto para excluí-lo, deve-se excluir seus posts
                    publicados primeiramente.</h6>
                    <br>
                <h5>Aguarde, você será redirecionado...</h5>
            </div>
        </div>

    </div>

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

        function redirecionar() {
            window.location.href = "userList"; 
        }

 
        setTimeout(redirecionar, 6000);
    </script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>