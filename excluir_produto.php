<<?php
    ini_set('default_charset', 'UTF-8');
    include_once "conexao.php";

    $idProduto = intval($_POST['id']);

    $query = $conexao->prepare("delete from produto_categoria where id_produto = $idProduto");
    $query->execute();

    $query = $conexao->prepare("delete from produto where id = $idProduto");
    $query->execute();
    
    header("Location: index.php");