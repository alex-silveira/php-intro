<?php

    include "servicos/servicosMensagemSessao.php";
    include "servicos/servicoValidacao.php";
    include "servicos/servicoCategoriaCompetidor.php";

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

    defineCategoriaCompetidor($nome, $idade);

    header('location: index.php');