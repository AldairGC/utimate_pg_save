<?php
    require 'bd_bd.php';

    $Ncuenta = $_POST['numero_Cuenta'];
    $Nbanco = $_POST['nombre_Banco'];
    $Clave = $_POST['clave'];
    $Beneficiario = $_POST['Beneficiario'];

    $userBD = "ottos_26411898";
    $passUserBD = "aldairGC15";
    
    #$obj = new DB('root', 'aldairGC15');
    $obj = new DB($userBD, $passUserBD);   
    $validar = $obj->CuentaB($Ncuenta, $Nbanco, $Clave, $Beneficiario);
    if ($validar == false)
    {
        header('location: ../datosU/try_cuentaB.php');
    }
    else //verdadero
    {
        header('location: ../index.php');
    }

    
?>
