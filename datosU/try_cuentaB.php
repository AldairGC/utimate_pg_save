<?php
session_start();
if (!isset($_SESSION['user']) && !isset($_SESSION['contacto']) && !isset($_SESSION['domicilio'])) {
	header("location: login_register.html");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>CuentaB</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="#" type="image/x-icon" />
    <link rel="apple-touch-icon" href="#" />
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/pogo-slider.min.css">
    <link rel="stylesheet" href="../css/style.css">    
	<link rel="stylesheet" href="../css/responsive.css">
	<link rel="stylesheet" href="../css/datos.css">
	<link rel="icon" href="../img/icon.ico">
</head>
<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">
	   <div id="preloader">
            <div class="loader">
                <div class="box"></div>
                <div class="box"></div>
            </div>
        </div>
	<header class="top-header">
		<nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
				<a class="navbar-brand" href="index.html"><img src="../img/savenet1.png" alt="image" width="100px"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
						<li><a href="#form"></a></li>
						<span style="color: white;">Proporciona tus datos de contacto</span>
						<buttto class="shwit">
							<span><i class="fad fa-sun"></i></span>
							<span><i class="fad fa-moon"></i></span>
						</buttto>
                    </ul>
                </div>
            </div>
        </nav>
	</header>
	<div id="abono" class="gallery-box" style="background: #f7f7f7;"> 
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
					<p style="color: red;">datos ya registrados o incorresctos</p>
						<form action="../php/cuentaB.php" id="form" method="POST">
							<input id="userPw" name="numero_Cuenta" type="tex" placeholder="nuemero de cuanta bancaria" require>
							<input id="userPw" name="nombre_Banco" type="tex" placeholder="nombre del banco" required>
                            <input id="userPw" name="clave" type="tex" placeholder="clave bancaria" required>
                            <input id="userPw" name="Beneficiario" type="text" placeholder="beneficiario" required>                
                			<input type="submit" class="btn" action="../php/cuentaB.php" value="guardar">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer style="position: fixed; @media(max-width: 732px){ position: inherit;}">
		<tr>
     		<td><a href="" target="_blank" ><img name="utpdir04" src="http://www.utpuebla.edu.mx/00imagenes/dir/utpdir04.png" width="50" alt="redes sociales"></a></td>
			<td><a href="" target="_blank"><img name="utpdir05" src="http://www.utpuebla.edu.mx/00imagenes/dir/utpdir05.png" width="50"  alt="redes sociales"></a></td>
			<td><a href="" target="_blank"><img name="utpdir06" src="http://www.utpuebla.edu.mx/00imagenes/dir/utpdir06.png" width="50"  alt="redes sociales"></a></td>
		  </tr>
	</footer>
	<script src="../js/jquery.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/jquery.pogo-slider.min.js"></script> 
	<script src="../js/slider-index.js"></script>
	<script src="../js/smoothscroll.js"></script>
	<script src="../js/form-validator.min.js"></script>
    <script src="../js/contact-form-script.js"></script>
	<script src="../js/isotope.min.js"></script>
	<script src="../js/images-loded.min.js"></script>	
    <script src="../js/custom.js"></script>
</body>
</html>
