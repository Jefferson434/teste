<?php

    session_start();

    if($_SESSION["logado"] == FALSE || !isset($_SESSION["logado"]) ){
        header("Location: index.php");
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>paginaSegura</title>
</head>
<body>
    <h1> A quanto tempo senhor!!</h1>
    <a href="logout.php"> Sair </a>
</body>
</html>