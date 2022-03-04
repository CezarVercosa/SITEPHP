<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/8310bb2638.js" crossorigin="anonymous"></script>
    <link href="style.css" rel="stylesheet">
    <link href="fonts.css" rel="stylesheet">
    <link href="media.css" rel="stylesheet">
    <script src="script.js"></script>
    <title>CupomMania</title>
</head>
<body id="body-id">
    <header>
        <div id="title">
            <h1>Cupom Mania</h1>
            <h1>Mania</h1>
        </div>
        <ul class="menu">
            <a href="#"><li>Início</li></a>
            <a href="#"><li>Serviços</li></a>
            <a href="#"><li>Sobre</li></a>
            <a href="#"><li>Lista</li></a>
            <a href="#" id="inscreva-se-btn"><li>Não possui conta?</li></a>
        </ul>
    </header>
    <main class="main-content">
        <aside>
            <h2><span>Faça login agora</span></h2>
            <h2>Na CupomMania</h2>
            <?php
            if(isset($_SESSION['nao_autenticado'])):
            ?>
            <p>Usuario ou senha invalido.</p>
            <?php
            endif;
            unset($_SESSION['nao_autenticado']);
            ?>
            <form action="login.php" method="POST">
                <input name="usuario" type="text" placeholder="Usuario">
                <input name="senha" type="password" placeholder="Senha">
                <input type="submit" value="Enviar >">
            </form>
        </aside>
        <article>
            <img src="imgcupom.png" alt="Cupom">
        </article>

    </main>
    
    <!-- Login Modal -->
    <div class="bg-modal" id="bg-modal-id">
        <div class="modal-content">

            <div class="close">
                <i class="fa-solid fa-circle-xmark"></i>
            </div>
            <span class="cadastrar-text">Cadastrar-se</span>
            <i class="fa-brands fa-facebook fa-2x"></i>
            <i class="fa-brands fa-instagram fa-2x"></i>
            <i class="fa-brands fa-google fa-2x"></i>

            <form action="registrar.php" method="POST">
                <input name="registrar-usuario" type="text" placeholder="Usuario/Email">
                <input name="registrar-senha" type="password" placeholder="Senha">
                <a class="logon-btn" href="#" class="button">Cadastrar</a>
                <span class="esqueceu-senha">Esqueceu a Senha</span>
            </form>
        </div>
    </div>
</body>
</html>