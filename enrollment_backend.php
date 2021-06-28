<?php
    session_start();
    
    include 'auto.php';
    include 'checkuser.php';


    $auto = new Auto($_SESSION['name'],$_POST['tp']);   
    $checkuser = new CheckUser($_SESSION['name']);
    if(strcmp($checkuser->get_enrollment(),"Yes")==0)
    {
        header("Location: index.php");
    }
    else
    {
        header("Location: enrollment.php");
    }
    
?>