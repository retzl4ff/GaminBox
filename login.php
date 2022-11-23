<?php

include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['senha']);

    $sql_code = "SELECT * FROM usuarios WHERE email_usuario = '$email' AND senha_usuario = '$senha'";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

    $quantidade = $sql_query->num_rows;
        
    if($quantidade == 1) {
            
    $usuario = $sql_query->fetch_assoc();

    if(!isset($_SESSION)){
        session_start();
    }
        $_SESSION['id_usuario'] = $usuario['id_usuario'];
        $_SESSION['nome_usuario'] = $usuario['nome_usuario'];
        
        header ("Location: gamepageuser.php");
    } else {
        header ("Location: fail.html");
    }
}

?>