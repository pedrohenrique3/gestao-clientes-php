<?php
session_start();
include ('verifica_login_admin.php');
?>

<h2>
    Olá, <?php echo $_SESSION['usuario'] ?>
</h2>
<h2><a href="logout-admin.php">SAIR</a></h2><br/>
<a href="cadastro.php">Cadastro</a>
<a href="exclusao.php">Exclusão</a>
<a href="pesquisa.php">Busca</a>
<a href="listagem.php">Listagem</a>