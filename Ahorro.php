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
    <title>Ahorro</title>  
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

	<link rel="stylesheet" href="css/pupop.css">

	<link rel="stylesheet" href="css/ultim.css">

	<link rel="icon" href="img/icono.ico">


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
	<!-- Ahorro -->
	<div id="ahorro" class="gallery-box" style="background: #f7f7f7;"> 
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<a href="#"><h2>Ahorro</h2></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end ahorro -->
	<div >
	<form id="MYFORM"  style="display: block;padding: 5% 5% 5%; padding-top:1px; background:#f7f7f7;">
	<input style="display: block; width: 100%; border: 1px solid; outline:none; font-size: 1.5rem; border-radius:10px" id="ingreso" name="nombreU" type="number" placeholder="ingreso mensual" required>
	<input style="display: block; width: 100%; border: 1px solid; outline:none; margin-top: 1rem; font-size: 1.5rem; border-radius:10px" id="gastos" name="nombreU" type="number" placeholder="gastos necesarios agua, luz, etc" required>
	<input  onclick="opendat()" style="width: 100%;margin-top: 1rem;color: white;font-size: 2rem;background: #691c32;border-radius: 10px;" type="button" class="btn" value="guardar">
	</form>
	</div>
	<div id="datos" style="display:block">
	<p id="money" style="text-align:center; font-size:2rem"></p>
	<p id="moneyT" style="text-align:center; font-size:2rem"></p>
	</div>
	<script>
		function opendat(){
			var gastosG = document.getElementById('gastos').value;
			var ingresos = document.getElementById('ingreso').value;
			if(ingreso > gastosG)
			{
			var num = ingresos - gastosG;
			var cantidad = 0;	
			var porceinto = 0;	
			parseInt(num);
				if(num <= 9 && num > 0){
				Unidades(num);
				porceinto = num * .70;
				cantidad = NumeroALetras(num);
				document.getElementById("money").innerHTML = cantidad;
				document.getElementById("datos").style.display = "block";				
				console.log(cantidad, num);
				}
				else if(num <= 99 && num > 9 ){
				Decenas(num);
				porceinto = num * .70;
				cantidad = NumeroALetras(num);
				document.getElementById("money").innerHTML = cantidad;
				document.getElementById("moneyT").innerHTML = "Tomaremos Cada Mes el 70% = "+ porceinto + " $ pesos de Este Sobrante Como Ahorro";
				document.getElementById("datos").style.display = "block";
				console.log(cantidad, num);
				}
				else if(num <= 999 && num > 99){
				Centenas(num);
				porceinto = num * .70;
				cantidad = NumeroALetras(num);
				document.getElementById("money").innerHTML = cantidad;
				document.getElementById("moneyT").innerHTML = "Tomaremos Cada Mes el 70% = "+ porceinto + " $ pesos de Este Sobrante Como Ahorro";
				document.getElementById("datos").style.display = "block";
				console.log(cantidad, num);
				}
				else if(num <= 999999 && num > 999){
				Miles(num);
				porceinto = num * .70;
				cantidad = NumeroALetras(num);
				document.getElementById("money").innerHTML = cantidad;
				document.getElementById("moneyT").innerHTML = "Tomaremos Cada Mes el 70% = "+ porceinto + " $ pesos de Este Sobrante Como Ahorro";
				document.getElementById("datos").style.display = "block";
				console.log(cantidad, num);
				}
				else if(num >= 1000000){
				Millones(num);
				porceinto = num * .70;
				cantidad = NumeroALetras(num);
				document.getElementById("money").innerHTML = cantidad;
				document.getElementById("moneyT").innerHTML = "Tomaremos Cada Mes el 70% = "+ porceinto + " $ pesos de Este Sobrante Como Ahorro";
				document.getElementById("datos").style.display = "block";
				console.log(cantidad, num);
				}
		    
			}
			else if (ingreso < gastosG){
				document.getElementById("money").innerHTML = "ingresos muy bajos";
				document.getElementById("datos").style.display = "block";
			}
		}
		function Unidades(num){
			switch(num){
				case 1: return "UN";
				case 2: return "DOS";
				case 3: return "TRES";
				case 4: return "CUATRO";
				case 5: return "CINCO";
				case 6: return "SEIS";
				case 7: return "SIETE";
				case 8: return "OCHO";
				case 9: return "NUEVE";
			}
			return "";
		}
		function Decenas(num){
			decena = Math.floor(num/10);
			unidad = num - (decena * 10);
			switch(decena){
			case 1:   
				switch(unidad)
				{
					case 0: return "DIEZ";
					case 1: return "ONCE";
					case 2: return "DOCE";
					case 3: return "TRECE";
					case 4: return "CATORCE";
					case 5: return "QUINCE";
					default: return "DIECI" + Unidades(unidad);
				}
				case 2:
					switch(unidad){
						case 0: return "VEINTE";
						default: return "VEINTI" + Unidades(unidad);
					}
					case 3: return DecenasY("TREINTA", unidad);
					case 4: return DecenasY("CUARENTA", unidad);
					case 5: return DecenasY("CINCUENTA", unidad);
					case 6: return DecenasY("SESENTA", unidad);
					case 7: return DecenasY("SETENTA", unidad);
					case 8: return DecenasY("OCHENTA", unidad);
					case 9: return DecenasY("NOVENTA", unidad);
					case 0: return Unidades(unidad);
				}			
		}//Unidades()
		function DecenasY(strSin, numUnidades){
			if (numUnidades > 0)
			return strSin + " Y " + Unidades(numUnidades)
			return strSin;			
		}//DecenasY()
		function Centenas(num){
			centenas = Math.floor(num / 100);
			decenas = num - (centenas * 100);
			switch(centenas){
				case 1:
					if (decenas > 0)
					return "CIENTO " + Decenas(decenas);
					return "CIEN";
					case 2: return "DOSCIENTOS " + Decenas(decenas);
					case 3: return "TRESCIENTOS " + Decenas(decenas);
					case 4: return "CUATROCIENTOS " + Decenas(decenas);
					case 5: return "QUINIENTOS " + Decenas(decenas);
					case 6: return "SEISCIENTOS " + Decenas(decenas);
					case 7: return "SETECIENTOS " + Decenas(decenas);
					case 8: return "OCHOCIENTOS " + Decenas(decenas);
					case 9: return "NOVECIENTOS " + Decenas(decenas);
				}
				return Decenas(decenas);
		}//Centenas()
		function Seccion(num, divisor, strSingular, strPlural){
			cientos = Math.floor(num / divisor)
			resto = num - (cientos * divisor)
			letras = "";
			if (cientos > 0)
			if (cientos > 1)
			letras = Centenas(cientos) + " " + strPlural;
			else
			letras = strSingular;
			if (resto > 0)
			letras += "";
			return letras;
		}//Seccion()
		function Miles(num){			
			divisor = 1000;
			cientos = Math.floor(num / divisor)
			resto = num - (cientos * divisor)
			strMiles = Seccion(num, divisor, "MIL", " MIL");
			strCentenas = Centenas(resto);
			if(strMiles == "")
			return strCentenas;
			return strMiles + " " + strCentenas;
			//return Seccion(num, divisor, "MIL", "MIL") + " " + Centenas(resto);
		}//Miles()
		function Millones(num){
			divisor = 1000000;
			cientos = Math.floor(num / divisor)
			resto = num - (cientos * divisor)
			strMillones = Seccion(num, divisor, "UN MILLON", "MILLONES");
			strMiles = Miles(resto);
			if(strMillones == "")
			return strMiles;
			return strMillones + " " + strMiles;
			//return Seccion(num, divisor, "UN MILLON", "MILLONES") + " " + Miles(resto);
		}//Millones()
		function NumeroALetras(num){
			var data = {
				numero: num,
				enteros: Math.floor(num),
				centavos: (((Math.round(num * 100)) - (Math.floor(num) * 100))),
				letrasCentavos: "",
				letrasMonedaPlural: "$ PESOS",
				letrasMonedaSingular: "$ PESOS"};
				if (data.centavos > 0)
				data.letrasCentavos = "CON " + data.centavos + "/100";
				if(data.enteros == 0)
				return "CERO " + data.letrasMonedaPlural + " " + data.letrasCentavos;
				if (data.enteros == 1)
				return Millones(data.enteros) + " " + data.letrasMonedaSingular + " " + data.letrasCentavos;
				else
				return Millones(data.enteros) + " " + data.letrasMonedaPlural + " " + data.letrasCentavos;
			}//NumeroALetras()
 	</script>
	<section class="questions">
	<div class="container">	
		<h2 class="questions__title">Preguntas más frecuentes</h2>
		<div class="question" style="height:80px">
			<h5 class="question__title">¿Qué es una cuenta de ahorro?<span class="question__button"></span></h5>
			<div class="question__text">
				<p>Una cuenta de ahorro es un depósito ordinario a la vista (un producto pasivo).
					En esta los fondos que están depositados tienen disponibilidad inmediata y, además,
					generan una cierta rentabilidad durante un período de tiempo según el importe que 
					se haya ahorrado.</p>
				</div>
			</div>
			<div class="question" style="height:80px">
				<h5 class="question__title">¿Qué tipos de cuenta de ahorro hay?<span class="question__button"></span></h5>
				<div class="question__text">
					<p>Las cuentas de ahorro se pueden clasificar de la siguiente manera: Cuenta de ahorro 
						para niños. Así pueden aprender a ahorrar y también les crea una consciencia de lo importante 
						que es el dinero. Las tarifas son más reducidas que para los adultos. Cuenta de ahorro para jóvenes. 
						La idea detrás de ésta es que la gente joven empiece a ahorrar y a aprender a manejar el dinero. 
						Cuenta de ahorro para adultos. Hay diferentes productos de ahorro como, por ejemplo, ahorrar 
				para poder tener una vivienda o unas vacaciones, u otro tipo de servicios como recibir los 
				pagos de la nómina.</p>
			</div>
		</div>
		<div class="question" style="height:80px">
			<h5 class="question__title">¿Qué es el fondo de garantía de depósitos para la cuenta de ahorro?<span class="question__button"></span></h5>
			<div class="question__text">
				<p>Este fondo de garantías de depósitos o seguro de depósitos es un fondo creado que sirve para 
				cubrir las pérdidas de los depositantes de forma total o parcial en caso de insolvencia de la 
				entidad financiera donde tienes el dinero.</p>
			</div>
		</div>
		<div class="question" style="height:80px">
			<h5 class="question__title">¿Cómo se pueden clasificar las cuentas de ahorro?<span class="question__button"></span></h5>
			<div class="question__text">
				<p>Las cuentas de ahorro se pueden clasificar según las siguientes características: Cuenta de ahorro 
				(de inversión o al plazo): mantener tus ahorros en un banco es una de las opciones más seguras que hay. 
				Los bancos tienen la obligación legal de devolver el dinero a sus depositantes. Pagaré bancario: son 
				instrumentos que ofrecen los bancos con la finalidad de que las personas acometan un ahorro con su dinero. 
				Además, son títulos que contienen una promesa de pagar una determinada cantidad a favor de una persona 
				en el vencimiento. Certificado de depósito: este documento que acredita que la propiedad de las mercancías
				o de los bienes depositados en instituciones que pueden recibir estos depósitos.</p>
			</div>
		</div>
	</div>
	</section>
	<!-- Footer -->
	<footer>
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