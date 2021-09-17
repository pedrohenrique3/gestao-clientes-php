<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/logins.css">
    <title>Login do cliente</title>
</head>
<body id="login">
    <form action="login-cliente.php" method="post" class="caixa">
        <h1>Login</h1>
        <h4>Deve ser digitado sem número, traços ou espaços</h4>
        <input type="number" max="99999999999" min="0" name='cpf'><br/>
        <input type="submit" value="ENTRAR">
    </form>
</body>
</html>