<?php
    require 'bd_bd.php';
    
    $nombre = $_POST['nombreU'];
    $aPaterno = $_POST['Apaterno'];
    $aMaterno = $_POST['Amaterno'];
    $Fnacimiento = $_POST['fechaN'];
    $Enacimiento = $_POST['estadoN'];
    $curp = $_POST['curp'];
    $rfc = $_POST['rfc'];

    $userBD = "ottos_26411898";
    $passUserBD = "aldairGC15";
    
    #$obj = new DB('root', 'aldairGC15');
    $obj = new DB($userBD, $passUserBD);        
    $validar = $obj->DatasUser($nombre, $aPaterno, $aMaterno, $Fnacimiento, $Enacimiento , $curp, $rfc);
    if ($validar == false)
    {
        header("location: ../datosU/try_datos.php");
    }
    else //verdadero o ningun error 
    {
        header('location: ../datosU/contacto.php');
    }
    
?>
