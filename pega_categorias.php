<?php
    ini_set('default_charset', 'UTF-8');
    include_once "conexao.php";

    $query = $conexao->prepare("select * from categoria");
    $query->execute();
    $retorno = $query->fetchAll();
    
    echo json_encode($retorno);