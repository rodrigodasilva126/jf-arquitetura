
<?php
    session_start();
    if(!isset($_SESSION["usuario"])){
        session_destroy();
        $msg = "Sessão expirada ou você não tem acesso a essa área!";
        header("Location:msg.php?msg=".$msg);
    }
?>