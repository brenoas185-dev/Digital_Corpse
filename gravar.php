<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de produtos</title>
        <link rel="stylesheet" href="">
    </head>
    <body>
        <p>Produto cadastrado com sucesso</p>
        <a href="catalogo.php">Ver catalogo</a>
        <?php
            $nome = $_POST["nome"];
            $descricao = $_POST["descricao"];
            $valor = $_POST["valor"];
            $quantidade = $_POST["quantidade"];

            $nomeImagem = basename($_FILES["imagem"]["name"]);
            $caminho = "imgDB/" . $nomeImagem;

            if(!is_dir("imgDB")) {
                mkdir("imgDB");
            }

            if(move_uploaded_file($_FILES["imagem"]["tmp_name"], $caminho)) {
                if(!file_exists("produtos.txt")) {
                    fopen("produtos.txt","w");
                }

                $linha = "$nome|$descricao|$valor|$quantidade|$nomeImagem\n";
                file_put_contents("produtos.txt", $linha, FILE_APPEND);

                echo "Produto cadastrado com sucesso! <a href='catalogo.php'></a>";
            } else {
                echo "Erro ao salvar imagem.";
            }
        ?>
    </body>
</html>