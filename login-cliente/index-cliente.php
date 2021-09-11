<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login do cliente</title>
</head>
<body>
    <form action="login-cliente.php" method="post">
        <h2>Digite seu CPF</h2>
        <h4>Deve ser digitado sem número, traços ou espaços</h4>
        <input type="number" max="99999999999" min="0" name='cpf'><br/>
        <input type="submit" value="ENTRAR">
    </form>
</body>
</html>