<?php
session_start();
include ('verifica_login_admin.php');
include "conexao-admin.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/menu-admin.css">
    <title>Pesquisa de clientes</title>
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
</nav>
<br/><br/><br/>
    <form action="busca2.php" method="post">
    CPF: <input type="text" name="cpf" size="15" placeholder="CPF do cliente sem pontos ou traços" maxlength="11"/><br/>
    <input type="submit" value="PROCURAR">
    </form>
</body>
</html>