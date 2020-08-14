<?php
    require 'bd_bd.php';
    
    $calle = $_POST['calle'];
    $numeroE = $_POST['numero'];
    $colonia = $_POST['colonia'];
    $codigoP = $_POST['codigo'];

    $userBD = "ottos_26411898";
    $passUserBD = "aldairGC15";
    
    #$obj = new DB('root', 'aldairGC15');
    $obj = new DB($userBD, $passUserBD);      
    $validar = $obj->Domicilio($calle, $numeroE, $colonia, $codigoP);
    if ($validar == false)
    {
        header('location: ../datosU/try_domicilio.php');
    }
    else //verdadero
    {
        header('location: ../datosU/cuentaB.php');
    }
    
?>
