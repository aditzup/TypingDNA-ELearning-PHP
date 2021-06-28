<?php
    session_start();
    include 'auto.php';
    include 'checkuser.php';

    $checkuser = new CheckUser($_SESSION['name']);
    if(strcmp($checkuser->get_enrollment(),"Yes")!=0)
    {
        header("Location: enrollment.php");
    }


    $auto = new Auto($_SESSION['name'],$_POST['tp']);
    if($auto->get_result()==1)
    {
        header("Location: ".$_POST["courseid"].".php");
    }
    else
    {
        header("Location: verification.php?course=".$_POST["course"]."&courseid=".$_POST["courseid"]."&message=error");
    }
    
?>