<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de Novidades</title>
        <link rel="stylesheet" href="">
    </head>
    <body>
        <a href="novidades.php">Ver novidades</a>
        <?php
            $nome3 = $_POST["nome3"];
            $descricao3 = $_POST["descricao3"];
            $valor3 = $_POST["valor3"];

            $nomeImagem3 = basename($_FILES["imagem3"]["name"]);
            $caminho3 = "imgDB/" . $nomeImagem3;

            if(!is_dir("imgDB")) {
                mkdir("imgDB");
            }

            if(move_uploaded_file($_FILES["imagem3"]["tmp_name"], $caminho3)) {
                if(!file_exists("produtos3.txt")) {
                    fopen("produtos3.txt","w");
                }

                $linha3 = "$nome3|$descricao3|$valor3|$nomeImagem3\n";
                file_put_contents("produtos3.txt", $linha3, FILE_APPEND);

                echo "Novidade adicionada com sucesso! <a href='catalogo.php'></a>";
            } else {
                echo "Erro ao salvar imagem.";
            }
        ?>
    </body>
</html>