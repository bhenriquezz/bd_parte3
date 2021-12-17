<!DOCTYPE html>
<?php 
ini_set('default_charset', 'UTF-8');
?>
<html lang="pt-br">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="cadastrar-produto.css">
    <title>Projeto BD - Alteração de produto</title>

</head>
<body id="body">
    
    <div id="container">
        <div id="header-container">
            <header>
                <a href="index.php" class="a-limpo" id="logo"><h1>Projeto - BD</h1></a>
    
                <div id="barra-de-pesquisa">
                    <input disabled type="text" placeholder="Pesquisar Produto" class="input-limpo" id="input-busca">
                    <button disabled onclick="buscar()"><i class="fas fa-search"></i></button>
                </div>
    
                <a href="cadastrar_produto.php" class="a-decorado">Cadastrar Produto</a>
            </header>
        </div>

        <div id="main">
            <form action="finalizar_alteracao_produto.php" method="get" id="form-cadastro-produto" accept-charset="UTF-8">
                <h1>DADOS DO PRODUTO</h1>

                <input type="text" placeholder="Nome do Produto" class="input-limpo" name="nomeProduto" required id="inputAlterarNomeProduto">

                <div>
                    <label>Categorias: </label>
                </div>
                <div id="selectsCategoria">
                    
                </div>

                <textarea cols="30" rows="10" placeholder="Descrição do Produto" class="textarea-limpo" name="especificacoes" required id="textAlterarEspecificacao"></textarea>
                <button>Salvar alterações</button>
            </form>
        </div>
    </div>
    
    <script src="alterar.js"></script>
</body>
</html>
