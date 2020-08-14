<?php
    require 'bd_bd.php';
    
    $nameUser = $_POST['USER'];
    $passw = $_POST['PW'];
    $correo = $_POST['EMAIL'];

    $userBD = "ottos_26411898";
    $passUserBD = "aldairGC15";
    
    #$obj = new DB('root', 'aldairGC15');
    $obj = new DB($userBD, $passUserBD);   
    $validar = $obj->insert_user($nameUser, $passw, $correo);
    if ($validar == false)
    {
        header('location: ../datosU/try_register.html');    
    }
    else //verdadero
    {
        header('location: ../datosU/datos.php');
    }
?>