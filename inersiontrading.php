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
<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98" style="background: rgb(247, 247, 247); overflow: visible;">
	<authentication mode="Forms">
		<forms loginurl="~/login_register.html" protection="All" timeout="20">
	   </forms></authentication>

   	<!-- LOADER -->
	   <div id="preloader" style="display: none;">
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
                        <li><a class="nav-link active" href="#ahorro">Inicio</a></li>                    						
					<li><a class="nav-link" href="inversion.php">Regrsar</a></li>
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
    <section class="page-hero ">
        <div class="container">
            <div class="columns">
                <div class="column is-7">
                    <div class="page-hero__content">
                        <h1 class="page-hero__title">Trading</h1>
                        <p>¿Quieres empezar a invertir en línea?
                            Una de las mejores opciones es el 
                            trading online. Gracias a este podrás
                            realizar inversiones con un solo click.
                            ¡En este artículo te explicamos cómo!</p>
                    </div>
                </div>
                <div class="column is-5">
                    <div class="page-hero__image-outer is-hidden-mobile">
                        <figure class="page-hero__image">
                            <img width="800" height="493" src="img/trading.jpg.webp" class="attachment-full size-full wp-post-image lazyloaded" alt="Criptomonedas" loading="lazy" data-ll-status="loaded">
                            </figure>
                    </div>
                </div>
             </div>
        </div>
    </section>
    <section class="items-content">
        <div class="container">
            <h2 class="items-content__title">Gana dinero invirtiendo en bolsa</h2>
            <div class="items-content__cards">
                <div class="items-content__card items-content__card--company_single" data-tags="">
                    <div class="items-content__card-top">
                        <div class="items-content__card-left">
                            <a href="https://promo.fxclub.org/lp/es-lm/demo_account/?aff_sys=gc&aff_id=704&aff_oid=15&aff_rid=15070727&sub1=&sub2=2001020204&sub3=&sub4=&sub5=&udid=" target="blank" data-tid="0" title="Más información" class="items-content__card-logo">
                            <img width="180" height="55" src="img/libertex.png" class="attachment-full size-full lazyloaded" alt="Libertex" loading="lazy" data-ll-status="loaded">                        
                        </a><span class="items-content__card-chosen">Elegido <strong>2,073</strong> veces</span>
                    </div>
                    <div class="items-content__card-center">
                        <ul class="items-content__card-list">
                            <li>Premio a la mejor plataforma broker</li>
                            <li>Mejor plataforma broker online</li>
                            <li>Premio mejor broker de criptomonedas</li>
                            <li>La sección de noticias está en inglés</li>
                        </ul>
                    </div>
                    <div class="items-content__card-right">
                        <a  class="simple-rating">
                          <div class="simple-rating__stars">
                                <img src="img/strella llena.svg" alt="Financer star icon" class="lazyloaded" data-ll-status="loaded">
                                <noscript><img src="img/strella llena.svg" alt="Financer star icon"></noscript>
                                <img src="img/strella llena.svg" alt="Financer star icon" class="lazyloaded" data-ll-status="loaded">
                                <noscript><img src="img/strella llena.svg" alt="Financer star icon"></noscript>
                                <img src="img/strella llena.svg" alt="Financer star icon" class="lazyloaded" data-ll-status="loaded">
                                <noscript><img src="img/strella llena.svg" alt="Financer star icon"></noscript>
                                <img src="img/strella llena.svg" alt="Financer star icon" class="lazyloaded" data-ll-status="loaded">
                                <noscript><img src="img/strella llena.svg" alt="Financer star icon"></noscript>
                                <img src="img/strella.svg" alt="Financer star icon" class="lazyloaded" data-ll-status="loaded">
                                <noscript><img src="img/strella.svg" alt="Financer star icon"></noscript>
                            </div>
                            <span class="simple-rating-value rating_green" data-rating-value="4.3">4.3</span>                        
                        </a>
                    </div>
                    <a href="#" class="simple-rating">
                    </a>
                </div>
                <a href="#" class="simple-rating">
                    <div class="items-content__card-description">                        
                    </div>
                    </a>
                    <div class="items-content__card-actions "><a href="#" class="simple-rating">
                        </a><a href="https://promo.fxclub.org/lp/es-lm/demo_account/?aff_sys=gc&aff_id=704&aff_oid=15&aff_rid=15070727&sub1=&sub2=2001020204&sub3=&sub4=&sub5=&udid=" target="blank" class="items-content__card-more-info">Más información</a>
                        <a href="https://promo.fxclub.org/lp/es-lm/demo_account/?aff_sys=gc&aff_id=704&aff_oid=15&aff_rid=15070727&sub1=&sub2=2001020204&sub3=&sub4=&sub5=&udid=" target="blank" data-url_param_tid="0" class="button is-primary is-rounded is-arrow items-content__card-see-offer items-content__card-see-offer--" target="_blank" rel="nofollow">Ver oferta</a>
                    </div>
                </div>
            <div class="items-content__card items-content__card--company_single" data-tags="">
                <div class="items-content__card-top"><div class="items-content__card-left">
                    <a href="https://www.xm.com/register/account/real?lang=es&utm_source=financer.com&utm_content=1081741&utm_medium=affiliate" target="blank" data-tid="1" title="Más información" class="items-content__card-logo">
                    <img width="300" height="168" src="https://financer.com/app/uploads/sites/20/2020/04/xm.png" class="attachment-full size-full lazyloaded" alt="" loading="lazy" data-ll-status="loaded">
                </a><span class="items-content__card-chosen">Elegido <strong>305</strong> veces</span>
            </div>
            <div class="items-content__card-center">
                <ul class="items-content__card-list">
                    <li>Más de 10 años de experiencia e el mercado</li>
                    <li>Abre una cuenta demo para practicar primero</li>
                    <li>Invierte en acciones, Forex, CFD's, índices o materias primas</li>
                    <li>La mayoría de operaciones son libres de tarifas</li>
                </ul>
            </div>
            <div class="items-content__card-right">
                <a class="simple-rating">
                <div class="simple-rating__stars">
                    <img src="img/strella.svg" alt="Financer star icon" class="lazyloaded" data-ll-status="loaded">
                    <noscript><img src="img/strella.svg" alt="Financer star icon"></noscript>
                    <img src="img/strella.svg" alt="Financer star icon" class="lazyloaded" data-ll-status="loaded">
                    <noscript><img src="img/strella.svg" alt="Financer star icon"></noscript>
                    <img src="img/strella.svg" alt="Financer star icon" class="lazyloaded" data-ll-status="loaded">
                    <noscript><img src="img/strella.svg" alt="Financer star icon"></noscript>
                    <img src="img/strella.svg" alt="Financer star icon" class="lazyloaded" data-ll-status="loaded">
                    <noscript><img src="img/strella.svg" alt="Financer star icon"></noscript>
                    <img src="img/strella.svg" alt="Financer star icon" class="lazyloaded" data-ll-status="loaded">
                    <noscript><img src="img/strella.svg" alt="Financer star icon"></noscript>
                </div>
                <span class="simple-rating-value rating_gray" data-rating-value="0">N/A</span>
            </a>            
            </div>
        </div>
        <div class="items-content__card-description"></div>
        <div class="items-content__card-actions ">
            <a href="https://www.xm.com/register/account/real?lang=es&utm_source=financer.com&utm_content=1081741&utm_medium=affiliate" target="blank" class="items-content__card-more-info">Más información</a>
            <a href="https://www.xm.com/register/account/real?lang=es&utm_source=financer.com&utm_content=1081741&utm_medium=affiliate" target="blank" data-url_param_tid="1" class="button is-primary is-rounded is-arrow items-content__card-see-offer items-content__card-see-offer--" target="_blank" rel="nofollow">Ver oferta</a>
        </div>
    </div>
    <div class="items-content__card items-content__card--company_single" data-tags="">
        <div class="items-content__card-top">
            <div class="items-content__card-left">
                <a href="https://www.etoro.com/?dl=30001923&utm_medium=Affiliate&utm_source=78229&utm_content=0&utm_serial=financermx&utm_campaign=financermx&utm_term=&epi=inversion&from_lp=whiteLP" target="blank" data-tid="2" title="Más información" class="items-content__card-logo">
                <img width="768" height="447" src="https://financer.com/app/uploads/sites/20/2020/05/etoro.jpg.webp" class="attachment-full size-full lazyloaded" alt="etoro" loading="lazy" sizes="(max-width: 768px) 100vw, 768px" srcset="https://financer.com/app/uploads/sites/20/2020/05/etoro.jpg.webp 768w,https://financer.com/app/uploads/sites/20/2020/05/etoro-300x175.jpg.webp 300w" data-ll-status="loaded">
            </a><span class="items-content__card-chosen">Elegido <strong>458</strong> veces</span>
        </div>
        <div class="items-content__card-center">
            <ul class="items-content__card-list">
                <li>Una de las plataformas más populares del mundo</li>
                <li>Practica con 100.000$ virtuales en la cuenta demo</li>
                <li>Puedes copiar las mejores estrategias de inversión</li>
                <li>Gracias a la comunidad de usuarios, aprenderás mucho más</li>
            </ul>
        </div>
        <div class="items-content__card-right">
            <a class="simple-rating">
            <div class="simple-rating__stars">
                <img src="img/strella llena.svg" alt="Financer star icon" class="lazyloaded" data-ll-status="loaded">
                <noscript><img src="img/strella llena.svg" alt="Financer star icon"></noscript>
                <img src="img/strella llena.svg" alt="Financer star icon" class="lazyloaded" data-ll-status="loaded">
                <noscript><img src="img/strella llena.svg" alt="Financer star icon"></noscript>
                <img src="img/strella llena.svg" alt="Financer star icon" class="lazyloaded" data-ll-status="loaded">
                <noscript><img src="img/strella llena.svg" alt="Financer star icon"></noscript>
                <img src="img/strella llena.svg" alt="Financer star icon" class="lazyloaded" data-ll-status="loaded">
                <noscript><img src="img/strella llena.svg" alt="Financer star icon"></noscript>
                <img src="img/strella llena.svg" alt="Financer star icon" class="lazyloaded" data-ll-status="loaded">
                <noscript><img src="img/strella llena.svg" alt="Financer star icon"></noscript>
            </div>
            <span class="simple-rating-value rating_green" data-rating-value="5">5.0</span>
            </a>
            
    </div>
</div>
<div class="items-content__card-description">
</div>
<div class="items-content__card-actions ">
    <a href="https://www.etoro.com/?dl=30001923&utm_medium=Affiliate&utm_source=78229&utm_content=0&utm_serial=financermx&utm_campaign=financermx&utm_term=&epi=inversion&from_lp=whiteLP" target="blank" class="items-content__card-more-info">Más información</a>
    <a href="https://www.etoro.com/?dl=30001923&utm_medium=Affiliate&utm_source=78229&utm_content=0&utm_serial=financermx&utm_campaign=financermx&utm_term=&epi=inversion&from_lp=whiteLP" target="blank" data-url_param_tid="2" class="button is-primary is-rounded is-arrow items-content__card-see-offer items-content__card-see-offer--" target="_blank" rel="nofollow">Ver oferta</a>
</div>
</div>
<div class="items-content__card is-hidden items-content__card--company_single" data-tags="">
    <div class="items-content__card-top"><div class="items-content__card-left">
        <a href="https://www.thinkmarkets.com/es/?clickid=TF9777416&aid=113703&aexid=&clickid=TF9777416&aid=113703&aexid=" target="blank" data-tid="3" title="Más información" class="items-content__card-logo">
        <img width="1000" height="500" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20500'%3E%3C/svg%3E" class="attachment-full size-full" alt="" data-lazy-srcset="https://financer.com/app/uploads/sites/20/2020/04/thinkmarkets.png 1000w, https://financer.com/app/uploads/sites/20/2020/04/thinkmarkets-300x150.png 300w, https://financer.com/app/uploads/sites/20/2020/04/thinkmarkets-768x384.png 768w" data-lazy-sizes="(max-width: 1000px) 100vw, 1000px" loading="lazy" data-lazy-src="https://financer.com/app/uploads/sites/20/2020/04/thinkmarkets.png">
    </a><span class="items-content__card-chosen">Elegido <strong>146</strong> veces</span>
</div>
<div class="items-content__card-center">
    <ul class="items-content__card-list">
        <li>Plataforma trader regulada por varios países</li>
        <li>Posibilidad de abrir una cuenta demo</li>
        <li>Invierte en acciones, Forex, CFD's, índices o materias primas</li>
        <li>Análisis de los principales eventos económicos del día</li>
    </ul>
</div>
<div class="items-content__card-right">
    <a class="simple-rating">
        <div class="simple-rating__stars">
            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Financer star icon" data-lazy-src="img/strella.svg">
            <noscript><img src="img/strella.svg" alt="Financer star icon"></noscript>
            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Financer star icon" data-lazy-src="img/strella.svg">
            <noscript><img src="img/strella.svg" alt="Financer star icon"></noscript>
            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Financer star icon" data-lazy-src="img/strella.svg">
            <noscript><img src="img/strella.svg" alt="Financer star icon"></noscript>
            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Financer star icon" data-lazy-src="img/strella.svg">
            <noscript><img src="img/strella.svg" alt="Financer star icon"></noscript>
            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Financer star icon" data-lazy-src="img/strella.svg">
            <noscript><img src="img/strella.svg" alt="Financer star icon"></noscript>
        </div>
        <span class="simple-rating-value rating_gray" data-rating-value="0">N/A</span>
    </a>    
</div>
</div>
<div class="items-content__card-description">
</div>
<div class="items-content__card-actions ">
    <a href="https://www.thinkmarkets.com/es/?clickid=TF9777416&aid=113703&aexid=&clickid=TF9777416&aid=113703&aexid=" target="blank" class="items-content__card-more-info">Más información</a>
    <a href="https://www.thinkmarkets.com/es/?clickid=TF9777416&aid=113703&aexid=&clickid=TF9777416&aid=113703&aexid=" target="blank" data-url_param_tid="3" class="button is-primary is-rounded is-arrow items-content__card-see-offer items-content__card-see-offer--" target="_blank" rel="nofollow">Ver oferta</a>
    </div>
</div>
</div>
</div></section>
	<!-- Footer -->
	<footer>
		
     		<a href="" target="_blank"><img name="utpdir04" src="http://www.utpuebla.edu.mx/00imagenes/dir/utpdir04.png" width="50" alt="redes sociales"></a>
			<a href="" target="_blank"><img name="utpdir05" src="http://www.utpuebla.edu.mx/00imagenes/dir/utpdir05.png" width="50" alt="redes sociales"></a>
			<a href="" target="_blank"><img name="utpdir06" src="http://www.utpuebla.edu.mx/00imagenes/dir/utpdir06.png" width="50" alt="redes sociales"></a>
		  
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