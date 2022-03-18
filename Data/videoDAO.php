<?php

//Incluir o arquivo de conexão com o BD
require('conexao.php');

//INSERT -> save
//UPDATE -> update
//DELETE -> delete
//SELECT -> all

//Função que retorna todos os vídeos cadastrados no BD
function all(){
    //Executa o SELECT
    $videos = connection()->query("SELECT * FROM videos");
    //Retorna todos os vídeos em um vetor
    return $videos;
}



/*
 * Função que cadastra um víeo no banco de dados
 */

function insertVideo($titulo, $descricao, $codYoutube){

        $conexao = connection();
        $sql = "INSERT INTO videos(titulo, descricao, cod_youtube) VALUES(?, ?, ?)";

        $stmt = mysqli_prepare($conexao, $sql);
        $stmt->bind_param("sss", $titulo, $descricao, $codYoutube);

        if($stmt->execute()){
            echo "Cadastrado com sucesso!";
        } else {
            echo $stmt->error;
        }

        $stmt->close();
        $conexao->close();

}//fim do insertVideo