<?php

    $titulo = null;
    $descricao = null;
    $cod_youtube = null;

    if(isset($_POST['acao'])){
        $titulo = $_POST['titulo'];
        $descricao = $_POST['descricao'];
        $cod_youtube = $_POST['cod_youtube'];

        require('../data/videoDAO.php');
        insertVideo($titulo, $descricao, $cod_youtube);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles_pages.css">
    <title>Document</title>
</head>
<body>
    <div class="cadVideo">
        <form action="" method="post">
            
            <div class="text">
                <label for="titulo">Título</label><br>
                <input type="text" name="titulo"><br>
                <br>
                <label for="titulo">Descrição</label><br>
                <input type="text" name="descricao"><br>
                <br>
                <label for="titulo">Código do Youtube</label><br>
                <input type="text" name="cod_youtube"><br>
           

                <br>
                <button class="btn" type="submit" name="acao" value="salvar">Cadastrar</button>
                <button class="btn" type="reset">Limpar</button>
            </div>

            
        </form>
    </div>
</body>
</html>
