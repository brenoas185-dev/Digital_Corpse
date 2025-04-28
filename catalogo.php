<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de produtos</title>
        <link rel="stylesheet" href="styles2.css">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body id="work">
        <header class="site_header">
            <div>
                <nav class="site_header_nav sidebar">
                    <ul role="list">
                        <li><a class="active black" href="index.html">HOME</a></li>
                        <li><a href="sobre.html">SOBRE</a></li>
                        <li><a href="catalogo.php">PRODUTOS</a></li>
                        <li><a href="novidades.html">NOVIDADES</a></li>
                        <li><a href="contato.html">CONTATO</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <div>
            <section id="header" class="header">
                    <div class="wrapper">
                        <div class="left-di">
                            <h2 class="left_text" style="float: left;">Produtos</h2>
                        </div>
                        <div class="right_text">
                            <p style="float: right;">Navegue pelo nosso catálogo de produtos</p>
                        </div>
                    </div>
            </section>
        </div>
        <h2 class="h2 text_centro">Catálogo de Produtos</h2>    
        <div class="grade">
            <div>
                <h4 class="text_centro">Computadores</h4>
                <?php
                    if (file_exists("produtos.txt")) {
                        $linhas = file("produtos.txt");
                        echo "<div class='catalogo'>";
                        foreach($linhas as $linha) {
                            list($nome, $descricao, $valor, $quantidade, $imagem) = explode("|", trim($linha));
                            echo "
                            <div class='produto'>
                                <img src='imgDB/$imagem' alt='$nome'>
                                <h4 class='h5'>$nome</h4>
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
            <div>
                <h4 class="text_centro">Periféricos</h4>
                <?php
                    if (file_exists("produtos2.txt")) {
                        $linhas2 = file("produtos2.txt");
                        echo "<div class='catalogo'>";
                        foreach($linhas2 as $linha2) {
                            list($nome2, $descricao2, $valor2, $quantidade2, $imagem2) = explode("|", trim($linha2));
                            echo "
                            <div class='produto'>
                                <img src='imgDB/$imagem2' alt='$nome2'>
                                <h4 class='h5'>$nome2</h4>
                                <p>$descricao2</p>
                                <p><strong>R$ $valor2</strong></p>
                                <p>Estoque: $quantidade2</p>
                            </div>";
                        }
                        echo "</div>";
                    } else {
                        echo "<p>Nenhum produto cadastrados aind.</p>";
                    }
                ?>
            </div>    
        </div>
        <footer>
                <section id="footer" class="margin">
                <div class="wrapper_inner">
                    <div class="text_right white">
                    <p>&copy; 2025 Digital Corpse</p>
                    </div>
                </div>
                </section>
            </footer>    
    </body>
</html>