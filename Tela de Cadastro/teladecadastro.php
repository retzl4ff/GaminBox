<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="teladecadastro.css"/>
    <title>Gamin Box - Tela de Cadastro</title>
</head>
<body>
    
    <div class="cadastro">
        <form action="cadastro.php" method="post" class="formulario">
            <br/><br/><br/><br/><br/><br/><br/><br/>
            <fieldset>
                
                <h1>Crie sua conta:</h1><br/><br/>

                <label for="">Insira seu Nome de usuário:</label>
                <input type="text" id="nome_usuario" name="nome_usuario" placeholder="Insira o Nome de Usuário:" required>
                <br>

                <label for="">Insira seu e-mail:</label>
                <input type="email" id="email_usuario" name="email_usuario" placeholder="Insira seu e-mail:" required>
                <br>

                <label for="">Insira sua Senha:</label>
                <input type="text" id="senha_usuario" name="senha_usuario" placeholder="Insira sua senha:" required>
                <br><br/><br/><br/><br/>

                <button type="submit">Finalizar Cadastro</button>
            </fieldset>      
        </form>
    </div>
</body>
</html>