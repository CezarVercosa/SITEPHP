<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link href="fonts.css" rel="stylesheet">
    <link href="media.css" rel="stylesheet">
    <title>CupomMania</title>
</head>
<body>
    <header>
        <div id="title">
            <h1>Cupom</h1>
            <h1>Mania</h1>
        </div>
        <ul>
            <a href="#"><li>Início</li></a>
            <a href="#"><li>Serviços</li></a>
            <a href="#"><li>Sobre</li></a>
            <a href="#"><li>Lista</li></a>
            <a href="#" id="inscreva-se-btn"><li>Não possui conta?</li></a>
        </ul>
    </header>
    <main>
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
    
</body>
</html>