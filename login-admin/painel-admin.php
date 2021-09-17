<?php
session_start();
include ('verifica_login_admin.php');
?>
    

<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/menu-admin.css">
    <title>HOME</title>
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
    <br/><br/>
    <h2>Olá, <?php echo $_SESSION['usuario'] ?></h2>
</body>
</html>