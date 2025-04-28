<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de produtos2</title>
        <link rel="stylesheet" href="">
    </head>
    <body>
        Ver catalogo<a href="catalogo.php"></a>
        <?php
            $nome2 = $_POST["nome2"];
            $descricao2 = $_POST["descricao2"];
            $valor2 = $_POST["valor2"];
            $quantidade2 = $_POST["quantidade2"];

            $nomeImagem2 = basename($_FILES["imagem2"]["name"]);
            $caminho2 = "imgDB/" . $nomeImagem2;

            if(!is_dir("imgDB")) {
                mkdir("imgDB");
            }

            if(move_uploaded_file($_FILES["imagem2"]["tmp_name"], $caminho2)) {
                if(!file_exists("produtos2.txt")) {
                    fopen("produtos2.txt","w");
                }

                $linha2 = "$nome2|$descricao2|$valor2|$quantidade2|$nomeImagem2\n";
                file_put_contents("produtos2.txt", $linha2, FILE_APPEND);

                echo "Produto cadastrado com sucesso! <a href='catalogo.php'></a>";
            } else {
                echo "Erro ao salvar imagem.";
            }
        ?>
    </body>
</html>