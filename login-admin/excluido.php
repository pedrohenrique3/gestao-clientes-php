<?php
session_start();
include ('verifica_login_admin.php');
include "conexao-admin.php";

$cpf=$_POST["cpf"];

$excAssinatura="DELETE FROM assina WHERE (cpf_cliente = '$cpf')";
$query=mysqli_query($conexao,$excAssinatura);
$row1=mysqli_affected_rows($conexao);

if($row1==1){
    $excCliente="DELETE FROM clientes WHERE (cpf = '$cpf')";
    $query2=mysqli_query($conexao, $excCliente);
    $row2=mysqli_affected_rows($conexao);
}else{
    echo "Não excluído";
}

if($row1==1 && $row2==1){
    echo "Cliente excluído com sucesso";
}else{
    echo "<br/>Erro";
}

?>

<a href="painel-admin.php">VOLTAR</a>