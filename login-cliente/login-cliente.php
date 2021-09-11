<?php
    include('conexao.php');
    session_start();
    if(empty($_POST['cpf'])){
        header('Location: index-cliente.php');
        exit();
    }

    $cpf=mysqli_real_escape_string($conexao, $_POST['cpf']);

    $query="select nome_cliente, cpf from clientes where cpf='{$cpf}';";
    
    $resultado=mysqli_query($conexao, $query);
    $row=mysqli_num_rows($resultado);
    if($row==1){
        $f=mysqli_fetch_array($resultado);
        $_SESSION['cpf']=$f['nome_cliente'];
        header('Location: painel.php');
        exit();
    }else{
        header('Location: index-cliente.php');
        exit();
    }
?>