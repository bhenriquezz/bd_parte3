<<?php
    include_once "conexao.php";
    header('Content-Type: text/html; charset=UTF-8');
    ini_set('default_charset', 'UTF-8');

    $queryString = explode('&', $_SERVER["QUERY_STRING"]);
    $dadosOrganizados;

    for($i = 0; $i < count($queryString); $i++) {
        $dadosOrganizados[$i] = explode('=', $queryString[$i]);
    }
    $nomeProduto = "'".$_GET['nomeProduto']."'";
    $especificacoes = "'".$_GET['especificacoes']."'";

    $query = $conexao->prepare("insert into produto(nome, especificacao, status)
                                values($nomeProduto, $especificacoes, 'cadastro')");
    $query->execute();

    $query = $conexao->prepare("select id from produto order by id desc limit 1");
    $query->execute();
    $idProduto = $query->fetch();
    $idProduto = intval($idProduto[0]);

    for($i = 1; $i < count($queryString)-1; $i++) {
        $nomeCategoria = "'".$dadosOrganizados[$i][0]."'";

        $query = $conexao->prepare("select id from categoria 
                                    where nome = $nomeCategoria");
        $query->execute();
        $idCategoria = $query->fetch();
        $idCategoria = intval($idCategoria[0]);

        $query = $conexao->prepare("insert into produto_categoria
                                    values($idProduto, $idCategoria)");
        $query->execute();
    }
    
    echo "<script>location.href='index.php'</script>";