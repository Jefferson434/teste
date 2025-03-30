<?php 

if($_SERVER["REQUEST_METHOD"] == "POST" ) {

    //ja como o metodo esta segundo a ideia de um "Post" estou buscando no servidor o "imput" que o usuário digitou.
    //Seguindo a condicional que equivale as informações desta pagina for um "Post" então ele ira dar seguimento para a proxima etapa

    session_start();

    $nome_correto = "Jefferson";
    $senha_correto = "1234";

    if($_POST["senha"] == $senha_correto  &&  $_POST["nome"] == $nome_correto ) {

        //Aqui eu irei deirecionar o usuario para a proxima pagina 

        $_SESSION["logado"] = TRUE;
        $_SESSION["nome"] = $_POST["nome"];
        header("Location: paginaSegura.php");

        
    } else {

        //Aqui ficar na mesma pagina.
        //enquanto ele não acertar a senha e o usario.

        $_SESSION["logado"] = FALSE;

    }
}



?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seja Bem Vindo!!</title>
</head>
<body>

    <h1> Informe seus dados </h1>


    <form action="<?php $_SERVER["PHP_SELF"]?>" method="post">


    <label for="nome"> Nome
    <input type="text" name="nome" > </label>
    <label for="senha"> Senha  
    <input type="password" name="senha">
    </label>

    <button type="submit"> Enviar!! </button>


    </form>


</body>
</html>




