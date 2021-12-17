<?php
    ini_set('default_charset', 'UTF-8');
    include_once "conexao.php";
    $idCategoria = $_POST['id'];
    $nomeCategoria = "'".$_POST['nome']."'";

    $query = $conexao->prepare("update categoria
                                set nome = $nomeCategoria
                                where id = $idCategoria");
    $query->execute();
    
    //header("Location: index.php");