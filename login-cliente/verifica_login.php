<?php

    if(!$_SESSION['cpf']){
        header('Location: index-cliente.php');
        exit();
    }

?>