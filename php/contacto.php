<?php
    require 'bd_bd.php';

    $tel1 = $_POST['tel1'];
    $tel2 = $_POST['tel2'];
    $email = $_POST['email'];

    $userBD = "ottos_26411898";
    $passUserBD = "aldairGC15";
    
    #$obj = new DB('root', 'aldairGC15');
    $obj = new DB($userBD, $passUserBD);        
    $validar = $obj->Dcontactos($tel1, $tel2, $email);
    if ($validar == false)
    {
        header('location: ../datosU/try_contacto.php');
    }
    else //verdadero o ningun error 
    {
        header('location: ../datosU/domicilio.php');
    }
?>
