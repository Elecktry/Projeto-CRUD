<?php
 function connection(){
    $conexao = new mysqli("localhost","root","","youtube2",3306);

    //Verifica se existe um erro de conexão, senão mostra informações sobre a conexão
    if($conexao->connect_errno){
        echo "Erro de conexao, codigo: .$conexao->connect_errno";
    }

    return $conexao;
 }