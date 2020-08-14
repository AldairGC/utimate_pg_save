<?php
    require 'bd_bd.php';
    
    $passA = $_POST['passA'];
    $userBD = "root";
    $passUserBD = "aldairGC15";

    $userBD = "ottos_26411898";
    $passUserBD = "aldairGC15";
    
    #$obj = new DB('root', 'aldairGC15');
    $obj = new DB($userBD, $passUserBD);     
    $validar = $obj->NewPass($passA);
    if ($validar == false)
    {
        header('location: ../login_register.html');
    }
    else //verdadero
    {
        header('location: ../index.php');
    }
    
?>
