<?php
    session_start();
    
    if(isset($_COOKIE['login'])) { 
        setcookie('login',$nombre, time() - 42000); 
    } 
    session_destroy();
    header("Location: ../Vista/index.php?m=2");
    exit();
?>
