<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de produtos3</title>
        <link rel="stylesheet" href="styles2.css">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body id="portfolio">
        <header class="site_header">
            <div>
                <nav class="site_header_nav sidebar">
                    <ul role="list">
                        <li><a href="index.html">HOME</a></li>
                        <li><a href="sobre.html">SOBRE</a></li>
                        <li><a href="catalogo.php">PRODUTOS</a></li>
                        <li><a class="active" href="novidades.php">NOVIDADES</a></li>
                        <li><a href="contato.html">CONTATO</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <div>
            <section id="header" class="header">
                    <div class="wrapper">
                        <div class="left-di">
                            <h2 class="left_text" style="float: left;">Novidades</h2>
                        </div>
                        <div class="right_text">
                            <p style="float: right;">Fique ligado nas últimas novidades</p>
                        </div>
                    </div>
            </section>
        </div>
        <h2 class="h2 text_centro white">Catálogo de Novidades</h2>    
        <div class="grade">
            <div>
                <h4 class="text_centro white"></h4>
                <?php
                    if (file_exists("produtos3.txt")) {
                        $linhas3 = file("produtos3.txt");
                        echo "<div class='catalogo'>";
                        foreach($linhas3 as $linha3) {
                            list($nome3, $descricao3, $valor3, $imagem3) = explode("|", trim($linha3));
                            echo "
                            <div class='produto2'>
                                <img src='imgDB/$imagem3' alt='$nome3'>
                                <h4 class='h5'>$nome3</h4>
                                <p>$descricao3</p>
                                <a href='$valor3'><strong>Link do artigo</strong></a>
                            </div>";
                        }
                        echo "</div>";
                    } else {
                        echo "<p>Nenhuma novidade cadastrada ainda.</p>";
                    }
                ?> 
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