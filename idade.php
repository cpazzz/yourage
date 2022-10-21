<?php

    $nomeUsuario = $_POST['nomeUsuario'];
    $anoNascimento = $_POST['anoNascimento'];
    $idade = date('Y') - $anoNascimento;

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <title> CalcYears </title>
</head>

<body>

    <div id="resultado">

        <div id="retornar">
            <a href="/" id="retorno">
                <img src="ic_back.svg" alt="ícone de voltar">
                <span> Refazer </span>
            </a>
        </div>

        <div id="exibir">
            <h1> Olá, <?=$nomeUsuario?>! </h1>
            <p> No ano de <?=date('Y')?>, você completa <strong> <?=$idade?> anos. </strong> </p>
        </div>

    </div>

</body>

</html>