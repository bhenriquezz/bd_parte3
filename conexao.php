<?php
    $dsn = 'mysql:host=localhost;dbname=id17777145_projeto_bd_database';
    $usuario = 'id17777145_bpr';
    $senha = '0iKfqbmadMtUo$tO';

    try {
        $conexao = new PDO($dsn, $usuario, $senha,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    } catch(PDOException $e) {
        echo 'Erro: '.$e->getCode().' Mensagem: '.$e->getMessage();
        //registrar erro
    }