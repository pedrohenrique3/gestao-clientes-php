<?php
    if(!$_SESSION['usuario']){
        header('Location: index-admin.php');
        exit();
    }
?>
