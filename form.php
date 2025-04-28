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
        <h2 class="text_center">Cadastrar Produto</h2>
        <div style="margin: auto; width: 50%;">
            <h3 class="h3 text_center">Computadores</h3>
            <form action="gravar.php" class="form-control" method="post" enctype="multipart/form-data">
                Nome:<input class="form-control mt-4" type="text" name="nome">
                Descrição<textarea class="form-control mt-4" name="descricao" id=""></textarea>
                Valor:<input class="form-control mt-4" type="text" name="valor">
                Quantidade:<input class="form-control mt-4" type="text" name="quantidade">
                Imagem<input class="form-control mt-4" type="file" name="imagem">
                <button class="btn btn-primary mt-4" type="submit" name="salvar">Salvar</button>
            </form>
        </div>
        <div style="margin: auto; width: 50%;">
            <h3 class="h3 text_center">Periféricos</h3>
            <form action="gravar2.php" class="form-control" method="post" enctype="multipart/form-data">
                Nome:<input class="form-control mt-4" type="text" name="nome2">
                Descrição<textarea class="form-control mt-4" name="descricao2" id=""></textarea>
                Valor:<input class="form-control mt-4" type="text" name="valor2">
                Quantidade:<input class="form-control mt-4" type="text" name="quantidade2">
                Imagem<input class="form-control mt-4" type="file" name="imagem2">
                <button class="btn btn-primary mt-4" type="submit" name="salvar">Salvar</button>
            </form>
        </div>        
    </body>
</html>