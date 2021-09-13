<?php
session_start();
include ('verifica_login_admin.php');
include "conexao-admin.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exclusão de clientes</title>
</head>
<body>
    <form action="excluido.php" method="post">
        CPF: <input type="text" maxlength="11" placeholder="CPF do cliente sem traços ou pontos" size="15" name="cpf"/><br/>
        <input type="submit" value="EXCLUIR"/>
    </form>
</body>
</html>