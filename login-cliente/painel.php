<?php
    session_start();
    include('verifica_login.php')
?>

<h2> 
    Olá, <?php echo $_SESSION['cpf'] ?>
</h2>
<br/>
<h2><a href="logout.php">SAIR</a></h2>