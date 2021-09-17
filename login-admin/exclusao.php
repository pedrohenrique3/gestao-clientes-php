<?php
session_start();
include ('verifica_login_admin.php');
include "conexao-admin.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/menu-admin.css">
    <title>Exclusão de clientes</title>
</head>
<body>
<nav id="menu-adm">
        <ul>
            <li><a href="painel-admin.php">HOME</a></li>
            <li><a href="listagem.php">LISTAR CLIENTES</a></li>
            <li><a href="pesquisa.php">PESQUISAR CLIENTE</a></li>
            <li><a href="cadastro.php">CADASTRAR CLIENTE</a></li>
            <li><a href="exclusao.php">EXCLUIR CLIENTE</a></li>
            
            <li><a href="logout-admin.php">SAIR</a></li>
        </ul>
</nav><br/><br/><br/>
    <form action="excluido.php" method="post">
        CPF: <input type="text" maxlength="11" placeholder="CPF do cliente sem traços ou pontos" size="15" name="cpf"/><br/>
        <input type="submit" value="EXCLUIR"/>
    </form>
</body>
</html>