<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de produtos</title>
        <link rel="stylesheet" href="styles2.css">
    </head>
    <body id="catalogo">
        <div class="container">
            <h2 class="h2 text_center">Catálogo de Produtos</h2>    
            <?php
                if (file_exists("produtos.txt")) {
                    $linhas = file("produtos.txt");
                    echo "<div class='catalogo'>";
                    foreach($linhas as $linha) {
                        list($nome, $descricao, $valor, $quantidade, $imagem) = explode("|", trim($linha));
                        echo "
                        <div class='produto'>
                            <img src='imgDB/$imagem' alt='$nome'>
                            <h3>$nome</h3>
                            <p>$descricao</p>
                            <p><strong>R$ $valor</strong></p>
                            <p>Estoque: $quantidade</p>
                        </div>";
                    }
                    echo "</div>";
                } else {
                    echo "<p>Nenhum produto cadastrados aind.</p>";
                }
            ?>
        </div>    
    </body>
</html>