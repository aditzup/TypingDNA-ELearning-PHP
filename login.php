<?php
    session_start();
    $_SESSION['name'] = $_POST['Name']; 
    header("Location: index.php");
    
?>