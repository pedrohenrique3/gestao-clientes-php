<?php
session_start();
include ('verifica_login_admin.php');
include "conexao-admin.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pesquisa de clientes</title>
</head>
<body>
    <form action="busca2.php" method="post">
    CPF: <input type="text" name="cpf" size="15" placeholder="CPF do cliente sem pontos ou traços" maxlength="11"/><br/>
    <input type="submit" value="PROCURAR">
    </form>
</body>
</html>