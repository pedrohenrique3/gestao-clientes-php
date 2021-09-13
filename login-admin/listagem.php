<?php
session_start();
include ('verifica_login_admin.php');
include "conexao-admin.php";


$busca="SELECT assina.id_assinatura, clientes.nome_cliente,clientes.cpf, planos.nome_plano, planos.valor, assina.data FROM clientes JOIN assina ON clientes.cpf = assina.cpf_cliente JOIN planos ON planos.id = assina.id_plano ORDER BY clientes.nome_cliente";
$resultado=mysqli_query($conexao, $busca);
$row=mysqli_num_rows($resultado);

echo "<h1>Quantidade de clientes: $row</h1>";

while($f=mysqli_fetch_array($resultado)){
    echo $f['id_assinatura']." | ".$f['nome_cliente']." | ".$f['cpf']." |".$f['nome_plano']." | ".$f['valor']." | ".$f['data']."<br/>";
}
?>

<a href="painel-admin.php">VOLTAR</a>