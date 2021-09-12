<?php
    session_start();
    include ('verifica_login_admin.php');
    include "conexao-admin.php";
    $nome=$_POST["nome"];
    $vNome=str_ireplace("Da", "da",str_ireplace("De","de",ucwords(strtolower(trim($nome)))));
    $ano=date("y");
    $mes=date("m");
    $dia=date("d");
    $plano=$_POST["plano"];
    $cpf=$_POST["cpf"];
    $apelido=$_POST["apelido"];
    $endereco=$_POST["endereco"];
    $cidade=$_POST["cidade"];
    $estado=$_POST["estado"];
    $referencia=$_POST["referencia"];
    $telefone=$_POST["telefone"];
    $diaPagamento=$_POST["diapagamento"];
    $cadastro="INSERT INTO clientes (`cpf`, `nome_cliente`, `apelido`, `endereco`, `cidade`, `estado`, `ponto_de_referencia`, `telefone`, `dia_do_pagamento`) VALUES ('$cpf', '$vNome', '$apelido', '$endereco', '$cidade', '$estado', '$referencia', '$telefone', '$diaPagamento')";
    $res=mysqli_query($conexao, $cadastro);
    $row=mysqli_affected_rows($conexao);

    if($row==1){

        $escolhaPlano=("insert into assina (data, cpf_cliente, id_plano) values ('$ano-$mes-$dia','$cpf','$plano')");
        $res2=mysqli_query($conexao, $escolhaPlano);
        $row2=mysqli_affected_rows($conexao);
    }

    if($row==1 && $row2==1){
        echo "Cliente cadastrado com sucesso";
        echo "<a href='painel-admin.php'>Voltar</a>";
    }else{
        echo "Não cadastrado";
        echo "<a href='painel-admin.php'>Voltar</a>";
    }
?>