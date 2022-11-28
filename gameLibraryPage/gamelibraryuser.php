<?php

session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/gamin box image.png" type="image/png"/>
    <link rel="stylesheet" href="gamelibrary.css">
    <title></title>
</head>
<body>
    <div class="navbar">
        <a href="../gamepageuser.php">Home</a>
        <a href="gamelibraryuser.html">Jogos</a>
        <a href="../publicacao.html">Publique um jogo</a>
        <a href="#"><?=$_SESSION['nome_usuario']?></a>
    </div>
    <div class="gamebar-nav">
        <div>
            <p>Flappy Mario</p>
            <a href="../project game/index.html"><img id="imageGame1" src="assets/mariogame-png.png" alt=""></a>
        </div>
        <div>
            <p>Pong</p>          
            <a href="../pong (Open with LiveServer)/index.html"><img id="imageGame2" src="assets/Pong1.png" alt=""></a>
        </div>
        <div>
            <p>Memory Game</p>
            <a href="../memory.html"><img id="imageGame3" src="assets/memory-game-2-1024x576.png" alt=""></a>
        </div>
    </div>
    <div class="gamebar-nav2">
        <div>
            <p>Flappy Mario</p>
            <a href="#"><img id="imageGame4" src="assets/Pong1.png" alt=""></a>
        </div>
        <div>
            <p>Flappy Mario</p>
            <a href="#"><img id="imageGame5" src="assets/memory-game-2-1024x576.png" alt=""></a>
        </div>
        <div>
            <p>Flappy Mario</p>
            <a href="#"><img id="imageGame6" src="assets/mariogame-png.png" alt=""></a>
        </div>
    </div>
    <div class="gamebar-nav3">
        <div>
            <p>Empty</p>
            <a href="#"><img id="imageGame7" src="assets/mariogame-png.png" alt=""></a>
        </div>
        <div>
            <p>Empty</p>
            <a href="#"><img id="imageGame8" src="assets/mariogame-png.png" alt=""></a>
        </div>
        <div>
            <p>Empty</p>
            <a href="#"><img id="imageGame9" src="assets/mariogame-png.png" alt=""></a>
        </div>
    </div>
</body>
</html>