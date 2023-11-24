<?php
    require_once "../src/funcoes-produtos.php";
    $listaDeProdutos = lerProdutos ($conexao);
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos/title>
</head>
<body>
    <div class="container">
        <h1>Produtos | SELECT <a href="../index.php"></a></h1>
        <hr>
        <h2>Lendo e carregando todos os produtos</h2>

        <p><a href="inserir.php" style="color:blue;">Inserir um novo produto</a></p>
        <hr>
        <div class="produtos">
            <!-- Laço para exibir os produtos cadastrados disponíveis -->
            <?php foreach($listaDeProdutos as $produto) { ?>

                <article>
                    <!-- _______________________________________ -->
                    <!-- Quando com o somente o id do fabricante (ANTIGO) -->
                    <!-- <h3><?=$produto['nome']?> </h3> -->
                    <!-- ______________________________________________ -->

                    <!-- Quando Traz o nome do fabricante (ATUAL) -->
                    <h3><?=$produto['produto']?></h3>

                    <!-- Formatação direto no código (ANTIGO) -->
                    <!-- <p><b>Preço: </b> R$ <?=number_format($produto['preco'], 2, ',', '.')?> -->

                    <!-- Formatação via função criada "formataMoeda" (ATUAL) -->
                    <p><b>Preço: </b> <?=formataMoeda($produto['preco'])?></p>

                    <p><b>Quantidade: </b><?=$produto['quantidade']?></p>
                    <p><b>Descriçao: </b><?=$produto['descricao']?></p>

                    <!-- _______________________________________________________________________ -->
                    <!-- Traz somente o id do fabricante (ANTIGO) -->
                    <!-- <p><b>Fabricante:</b><?=$produto['fabricante']?></p> -->
                    <!-- ______________________________________________ -->

                    <!-- Traz o nome do fabricante (ATUAL) -->
                    <p><b>Fabricante:</b><?=$produto['fabricante']?></p>

                    <!-- Link dinâmico -->
                    <p>
                        <a href="atualizar.php?id=<?=$produto['id']?>" style = "color:blue;">Atualizar</a>
                        <a class="excluir" href="excluir.php?id=<?=$produto['id']?>" style="color:red">excluir</a>
                    </p>
                    <hr>
            </article>
        <?php } ?>

        </div> 
    </div>

    <!-- Chamando arquivo js para perguntar antes de excluir -->
    <script sre="../js/confirm.js"></script>

    </body>
</html>
