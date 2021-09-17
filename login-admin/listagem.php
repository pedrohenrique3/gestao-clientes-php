
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/menu-admin.css">
    <title>Document</title>
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
    </nav><br/><br/>
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
</body>
</html>