<?php 
session_start();

error_reporting(0);
    function logIn(){
        $a = $_POST['adminname'];
        $b = $_POST['adminpassword'];
        $password = password_hash($b, PASSWORD_DEFAULT);    
        if($a == 'admin' && $b == 'admin')
        {
            echo "Hallo $a";
            $log = 1;
            $_SESSION['adminname'] = $a;
            header("Location: admininterface.php");
        }
        else {
            header("Location: admininterface.php");
        }
    }
logIn();
?>