<?php

include_once("../conexao.php");

$user = filter_input(INPUT_POST, 'usergit', FILTER_SANITIZE_STRING);

$result_usuario = "INSERT INTO desenvolvedores (user_dev) VALUES ('$user')";
$resultado_usuario = mysqli_query($mysqli, $result_usuario);

if ($resultado_usuario > 0) {
    echo "<script>
        alert('Solicitação Enviada!')
        window.location.href='../gamepageuser.php'
        </script>";
}else {
    echo "error";
}

?>