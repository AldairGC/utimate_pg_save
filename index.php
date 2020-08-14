<?php
session_start();
if(isset($_SESSION['finish'])){
	header("location: principal.php");
}
else if (!isset($_SESSION['user']) && !isset($_SESSION['contacto']) && !isset($_SESSION['domicilio']) && !isset($_SESSION['cuentaB'])) {
	header("location: login_register.html");
}
else if (isset($_SESSION['user']) && !isset($_SESSION['contacto']) && !isset($_SESSION['domicilio']) && !isset($_SESSION['cuentaB'])) {
	header("location: datosU/contacto.php");
}
else if (isset($_SESSION['user']) && isset($_SESSION['contacto']) && !isset($_SESSION['domicilio']) && !isset($_SESSION['cuentaB'])) {
	header("location: datosU/domicilio.php");
}
else if (isset($_SESSION['user']) && isset($_SESSION['contacto']) && isset($_SESSION['domicilio']) && !isset($_SESSION['cuentaB'])) {
	header("location: datosU/cuentaB.php");
}
?>