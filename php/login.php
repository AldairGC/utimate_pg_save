<?php
    require 'bd_bd.php';

    $user = $_POST['userName'];
    $password = $_POST['userPw'];

    $userBD = "ottos_26411898";
    $passUserBD = "aldairGC15";
    
    #$obj = new DB('root', 'aldairGC15');
    $obj = new DB($userBD, $passUserBD);      
    $validar = $obj->validar_user($user, $password);
    if ($validar == false)
    {
        header('location: ../datosU/try_login.html'); 
    }
    else //verdadero
    {
        header('Location: ../index.php');
    }
?>


