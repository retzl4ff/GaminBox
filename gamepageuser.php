<?php

session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="gamepage.css">
    <title>Gamin Box</title>
</head>
<body>
    <div class="navbar">
        <a href="gamepageuser.php">Home</a>
        <a href="gameLibraryPage/gamelibraryuser.php">Jogos</a>
        <a href="publicacao.html">Publique um jogo</a>
        <a href="#"><?=$_SESSION['nome_usuario']?></a>
    </div>
    <div id="banner">
        <img id="banner-png" src="gameLibraryPage/assets/banner.png" alt="banner">
    </div>
    <h1>Novos jogos:</h1>
    <div class="gamebar-nav">
        <div>
            <a href="project game/index.html"><img id="imageGame1" src="gameLibraryPage/assets/mariogame-png.png" alt=""></a>
        </div>
        <div>
            <a href="pong (Open with LiveServer)/index.html"><img id="imageGame2" src="gameLibraryPage/assets/Pong1.png" alt=""></a>
        </div>
        <div>
            <a href="memory.html"><img id="imageGame3" src="gameLibraryPage/assets/memory-game-2-1024x576.png" alt=""></a>
        </div>
    </div>    
</body>
</html>