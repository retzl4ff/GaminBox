<?php

session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_perfil.css"/>
    <title>Perfil</title>
</head>
<body>
    <h1>Perfil</h1>

    <div class="perfil">
        <img src="icon.png" height="70px" width="70px">
    </div>

    <div class="estrutura">
        <div class="anuncio">
            <p></p>
        </div>

        <br>
        <br>

        <h1>Visão geral da conta</h1>

        <h2>Nome</h2>
        <p><?=$_SESSION['nome_usuario']?></p>

        <h2>E-mail</h2>
        <p>E-mail</p>

        <h2>Sobre mim</h2>
        <p>Descrição do usuário</p>

        <button class="botao" onclick="sair()">Sair</button>
        <button class="botao" onclick="tornadev()">Tornar-se Desenvolvedor!</button>


        <script>

            let url1 = "../gamepage.html"
            let url2 = "tornadev.html"

            function sair() {
                location = url1
            }

            function tornadev() {
                location = url2
            }

        </script>
        
    </div>
</body>
</html>