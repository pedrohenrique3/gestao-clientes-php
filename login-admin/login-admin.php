<?php
    include ('conexao-admin.php');
    session_start();
    if(empty($_POST['usuario']) || empty($_POST['senha'])) {
        header('Location: index-admin.php');
        exit();
    }

    $usuario=mysqli_real_escape_string($conexao, $_POST['usuario']);
    $senha=mysqli_real_escape_string($conexao, $_POST['senha']);

    $query="select nome from adm where usuario='$usuario' and senha = md5('{$senha}');";

    $result = mysqli_query($conexao, $query);

    $row=mysqli_num_rows($result);

    if($row==1){
        $f=mysqli_fetch_array($result);
        $_SESSION['usuario']=$f['nome'];
        header('Location: painel-admin.php');
        exit();
    }else{
        header('Location: index-admin.php');
        exit();
    }
?>