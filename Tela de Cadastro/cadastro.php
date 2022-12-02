<?php

include_once("../conexao.php");

$nome = filter_input(INPUT_POST, 'nome_usuario', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email_usuario', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha_usuario', FILTER_SANITIZE_STRING);

// echo "Nome: $nome <br>";
// echo "E-mail: $email <br>";
// echo "Senha: $senha <br>";

$result_usuario = "INSERT INTO usuarios (nome_usuario, email_usuario, senha_usuario) VALUES ('$nome', '$email', '$senha')";
$resultado_usuario = mysqli_query($mysqli, $result_usuario);

if ($resultado_usuario > 0) {
    echo "<script>
        alert('Usuário cadastrado!')
        window.location.href='../login.html'
        </script>";
}else {
    echo "error";
}

?>