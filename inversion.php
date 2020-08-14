<?php
session_start();
if (!isset($_SESSION['user'])) {
	header("location: login_register.html");
}
?>
<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>inversion</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="#" type="image/x-icon" />
    <link rel="apple-touch-icon" href="#" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="css/pogo-slider.min.css">
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
	<!-- ventana pop ajustes CSS -->
	<link rel="stylesheet" href="css/userSetngs.css">

	<link rel="stylesheet" href="css/ultim.css">

	<link rel="icon" href="img/icon.ico">


</head>
<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98" style="background:#f7f7f7;">
	<authentication mode="Forms">
		<forms loginUrl="~/login_register.html" protection="All" timeout="20" />
	   </authentication>

   	<!-- LOADER -->
	   <div id="preloader">
            <div class="loader">
                <div class="box"></div>
                <div class="box"></div>
            </div>
        </div>
         <!--end loader -->

	<!-- Start header -->
	<header class="top-header">
		<nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
				<a class="navbar-brand" href="index.php"><img src="img/savenet1.png" alt="image" width="100px"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" href="#ahorro">Ahorro</a></li>                    						
					<li><a class="nav-link" href="index.php">Inicio</a></li>
						<li><a class="nav-link" href="#myForm"><button class="open-button" onclick="openForm()"></button><?php echo $_SESSION['user']?></a></li>
						<buttto class="shwit">
							<span><i class="fad fa-sun"></i></span>
							<span><i class="fad fa-moon"></i></span>
						</buttto>
                    </ul>
                </div>
            </div>
        </nav>
	</header>
	<!-- End header -->
	<!-- popup ajustes -->
	<div class="form-popup" id="myForm">
 	 <div class="form-container">
    	<h2>AJUSTES<img src="img/ajuste.png" style="padding: 9px; width: 40px;padding-top: 0px;padding-bottom: 5px;" ></h2>
				<button  type="submit" class="btn" onclick="openPass()">cambiar contraseña</button>
				<div id="botones" style="display:none;">
      		<form  action="php/NewPass.php" method="POST">
            	<input class="btn" name="user" type="text" placeholder="<?php echo $_SESSION['user']?>" disabled>
            	<br>
            	<input class="btn" name="passA" type="password" placeholder="Nueva Contraseña">    
            	<br>
				<input class="btn" type="submit" name="enviar" value="cambiar" require>
			</form>		
			<button type="button" class="btn cancel" onclick="closePass()"><img src="img/cerrar.png" style="padding:13px; width:13px;padding: 3px; width: 20px;padding-top: 0px;padding-bottom: 4px;" >Cancelar</button>		
    			</div>
        	<a href="php/logaut.php">
            	<button  type="submit" class="btn" >cerrar sesion</button>
        	</a>
    	<button type="button" class="btn cancel" onclick="closeForm()"><img src="img/cerrar.png" style="padding:13px; width:13px;padding: 3px; width: 20px;padding-top: 0px;padding-bottom: 4px;" >Cerrar</button>
  	</div>
	</div>
	<!-- popup end -->
	<!-- script -->
	<script>
	function openForm() {
  		document.getElementById("myForm").style.display = "block";
	}

	function closeForm() {
 		document.getElementById("myForm").style.display = "none";
	}
	function openPass(){
		document.getElementById("botones").style.display = "contents";
	}
	function closePass(){
		document.getElementById("botones").style.display = "none";
	}
		</script>
	<!-- script -->
				
    <!-- invercio -->
    <div id="invercion" class="gallery-box" style="background: #f7f7f7;"> 
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box">
                    <a href=""><h2>Invercion</h2></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end ahorro -->
	<section class="category-hero">
		<div class="container">
			<div class="columns">
				<div class="column is-6-tablet is-5-desktop">
					<div class="category-hero__left">
						<h1 class="category-hero__title">Inversión</h1>
						<div class="category-hero__description">
							<p style="font-size: 18px;">¿Tienes unos ahorros y no sabes qué hacer con ellos? ¿Quieres sacarle la mayor rentabilidad posible a tu dinero? Aquí descubrirás cómo invertir y qué tipos de inversión puedes hacer.</p>
					    </div>
					</div>
				</div>
				<div class="column is-6-tablet is-7-desktop">
					<div class="category-hero__right">
						<div class="main-categories ">
						<a href="inversionbolsa.php" class="main-categories__item ">
	 					<figure class="main-categories__icon">
						<img src="img/LA_BOLSA.svg" alt="La Bolsa" class="lazyloaded" data-ll-status="loaded">					
						</figure>
					 	<h6 class="main-categories__title">La Bolsa</h6> 
						</a>
						<a href="inersiontrading.php" class="main-categories__item ">
						<figure class="main-categories__icon">
						<img src="img/calculadora.svg" alt="Trading" class="lazyloaded" data-ll-status="loaded">					
						</figure>
						<h6 class="main-categories__title">Trading</h6> 
						</a>
						<a href="inversioncripto.php" class="main-categories__item ">
					   	<figure class="main-categories__icon">
					   	<img src="img/criptomonedas.svg" alt="Criptomonedas" class="lazyloaded" data-ll-status="loaded">					   	
					   	</figure>
						<h6 class="main-categories__title">Criptomonedas</h6>
						</a>
						<a href="Ahorro.php" class="main-categories__item ">
						<figure class="main-categories__icon">
						<img src="img/ahorra%20ahora.svg" alt="Ahorra desde ya" class="lazyloaded" data-ll-status="loaded">																		
						</figure>
						<h6 class="main-categories__title">Ahorra desde ya</h6> 
						</a>
						</div>				
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="questions" style="display: block;">
		<div class="container">
			<h2 class="questions__title">Preguntas más frecuentes</h2>
			<div class="question" style="height:80px">
			<h5 class="question__title">¿Qué es una inversión?<span class="question__button"></span></h5>
				<div class="question__text">
					<p>Una inversión es una cantidad de dinero que se da a terceros, ya puede ser a una empresa 
					o a un conjunto de acciones, con la finalidad de que se incrementen los beneficios que se generen 
					del proyecto empresarial. O sea que, en otras palabras, consiste en que se renuncia al consumo 
					actual a cambio que se obtengan unos beneficios en el futuro que estarán distribuidos en el 
					tiempo. En definitiva, se pone capital en algún tipo de actividad económica para 
					tratar de incrementarlo.</p>
				</div>
			</div>
		<div class="question" style="height:80px">
		<h5 class="question__title">¿Cuáles son las características de una inversión?<span class="question__button"></span></h5>
			<div class="question__text">
				<p>Las principales características que tienen todas las inversiones son: Requieren de una disposición
				de recursos | Hay un intercambio de beneficios | Se espera que de la inversión salda una rentabilidad 
				| Toda inversión acarrea cierto riesgo | Se precisa de un tiempo para saber si funciona o no</p>
			</div>
		</div>
		<div class="question" style="height:80px">
		<h5 class="question__title">¿Qué tipos de inversión hay?<span class="question__button"></span></h5>
			<div class="question__text">
				<p>Hay muchas formas de invertir tu dinero. Pero, el objetivo siempre es el mismo: que el dinero 
				produzca una serie de beneficios. Lo importante aquí es que sepas de qué recursos cuentas para saber 
				en dónde invertir tu dinero. Las principales formas de inversión que existen son: Los bonos | 
				Las acciones | Los fondos de inversión | Las opciones | Las criptomonedas.</p>
			</div>
		</div>
	</div>
</section>

	<!-- Footer -->
	<footer >
		<tr>
     		<td><a href="" target="_blank" ><img name="utpdir04" src="http://www.utpuebla.edu.mx/00imagenes/dir/utpdir04.png" width="50" alt="redes sociales"></a></td>
			<td><a href="" target="_blank"><img name="utpdir05" src="http://www.utpuebla.edu.mx/00imagenes/dir/utpdir05.png" width="50"  alt="redes sociales"></a></td>
			<td><a href="" target="_blank"><img name="utpdir06" src="http://www.utpuebla.edu.mx/00imagenes/dir/utpdir06.png" width="50"  alt="redes sociales"></a></td>
		  </tr>
	</footer>
	<!-- End Footer -->
	
	<a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>

	<!-- ALL JS FILES -->
	<script>src="js/main.js"</script>
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/js.js"></script>
	<script src="js/123.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script> 
	<script src="js/slider-index.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/images-loded.min.js"></script>	
    <script src="js/custom.js"></script>
</body>
</html>