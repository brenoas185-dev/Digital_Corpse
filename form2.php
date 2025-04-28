<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de produtos</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <h2 class="text_center">Cadastrar Novidades</h2>
        <div style="margin: auto; width: 50%;">
            <h3 class="h3 text_center">Novidades</h3>
            <form action="gravar3.php" class="form-control" method="post" enctype="multipart/form-data">
                Resumo:<input class="form-control mt-4" type="text" name="nome3">
                Descrição<textarea class="form-control mt-4" name="descricao3" id=""></textarea>
                Fonte<input class="form-control mt-4" type="text" name="valor3">
                Imagem<input class="form-control mt-4" type="file" name="imagem3">
                <button class="btn btn-primary mt-4" type="submit" name="salvar">Salvar</button>
            </form>
        </div>   
    </body>
</html>