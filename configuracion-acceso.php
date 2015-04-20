<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
	<title>Configuración de la Seguridad de Acceso- MyEmpresa</title>
	
	<meta charset="utf-8">
	<meta name="keywords" content="" />
	<meta name="description" content="" />
    
    <!-- Favicon --> 
	<link rel="shortcut icon" href="images/favicon.ico">
    
    <!-- this styles only adds some repairs on idevices  -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- Google fonts - witch you want to use - (rest you can just remove) -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700italic,700,600italic,600,400italic,300italic,300|Roboto:100,300,400,500,700&amp;subset=latin,latin-ext' type='text/css' />
    
    <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    
    <!-- ######### CSS STYLES ######### -->
	
    <link rel="stylesheet" href="css/reset.css" type="text/css" />
	<link rel="stylesheet" href="css/style.css" type="text/css" />
    
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    
    <!-- responsive devices styles -->
	<link rel="stylesheet" media="screen" href="css/responsive-leyouts.css" type="text/css" />
    

    <!-- sticky menu -->
    <link rel="stylesheet" href="js/sticky-menu/core.css">
 	
    <!-- jquery jcarousel -->
    <link rel="stylesheet" type="text/css" href="js/jcarousel/skin.css" />
    <link rel="stylesheet" type="text/css" href="js/jcarousel/skin2.css" />
    
    <!-- tab widget -->
	<link rel="stylesheet" type="text/css" href="js/tabs/tabwidget/tabwidget.css" />
    

</head>

<body>

<div class="site_wrapper">
   
<?php require './menu.php'; ?>
   

<div class="clearfix"></div>
 
<div class="page_title">
	<div class="container">
		<div class="title"><h1>Configuración de la Seguridad de Acceso</h1></div>
                <div class="pagenation">&nbsp;<a href="index.php">Inicio</a> <i>/</i> <a >Configuración de la seguridad</a> <i></i></div>
	</div>
</div><!-- end page title --> 

<div class="clearfix"></div>


<!-- Contant
======================================= -->

<div class="container">

<div class="content_fullwidth">
        	
    <div class="one_full">	
        
        
        <h3><a >Pasos para la configuración de la seguridad de acceso</a></h3>
        
        
                
         
        
        <p>La identificación de un usuario se realiza mediante el uso de un certificado X.509 v3 emitido por la empresa 
        Tetbury Software Services Ltd.</p>
        
        <blockquote>En el proceso de alta en el servicio se realiza mediante identidad federada, es decir usted tiene que disponer de una cuenta de Google, Twiter, Facebook, Linked In. Etc.</blockquote>
        
        <p>Con solo aceptar que podamos consultar su identidad federada, usted es admitido directamente en la aplicación sin 
        más, <strong>no hay que rellenar formularios ni usuarios ni contraseñas</strong>.</p>
        
        </br>
        
        <h5>Proceso de instalación del certificado</h5>
        
        <p>Una vez dentro de la aplicación usted puede elevar el nivel de confidencialidad de su cuenta mediante el uso de certificados digitales.</p>
        
        </br>
        
        <p><strong>Para esto le facilitamos de forma gratuita un certificado digital que usted se puede descargar.</strong> </p>
        
	</br>
            <ul>
                <li><i class="fa fa-caret-right"></i>  Tras su descarga tiene que instalar dos certificados uno el de la CA que se llama <strong><a href="chain.crt">chain.crt</a></strong> y el otro <strong>token.p12</strong></li>
            <li><i class="fa fa-caret-right"></i> Que es el que identifica su dirección de email con su cuenta de usuario.
            </li>
            <li><i class="fa fa-caret-right"></i> Una vez instalados los certificados en el navegador Web se puede dirigir al 
                <a href="https://secure.tetburyss.co.uk">sección de login</a> donde se le mostrará una página de bienvenida al servicio. En caso de cualquier error o falta de autorización se mostrará una página con toda la información disponible acerca de ese error.</li>
            <li><i class="fa fa-caret-right"></i> En la página de bienvenida le pide su dirección de e-mail y el fichero token.p12.</li>
            </ul>
			    
        
     

        <p>Lo ideal desde nuestro punto de vista con relación a la seguridad sería guardar este fichero token.p12 en un dispositivo USB, que usted puede llevar de forma cómoda por su pequeño tamaño a cualquier parte.</p>
        
        </br>

        <p>Tenga presente que sólo con este token se puede acceder a la aplicación, una vez elevado el nivel de confidencialidad, por lo tanto no lo deje al alcance de otros para preservar su información confidencial.</p>
        
        </br>

        <p>Una vez dentro de la aplicación si transcurridos 15 minutos sin actividad la sesión de la aplicación se cierra de forma automática, por su seguridad.</p>
        
        </br>

        <p><strong>Nunca algo tan complejo fue tan fácil, sin usuarios ni contraseñas. <a href="https://secure.tetburyss.co.uk/AltaServicioIdentidadFederada.php">Pruébalo ahora.</a></strong></p>

        
        
        </div>
        </div>
    </div><!-- /# end post -->
    
    


		
		</div>
                
	</div><!-- end section -->
    
  
   


<?php require './footer.php'; ?>

    
<!-- ######### JS FILES ######### -->
<!-- get jQuery from the google apis -->
<script type="text/javascript" src="js/universal/jquery.js"></script>

<!-- style switcher -->
<script src="js/style-switcher/jquery-1.js"></script>
<script src="js/style-switcher/styleselector.js"></script>

<!-- main menu -->
<script type="text/javascript" src="js/mainmenu/ddsmoothmenu.js"></script>
<script type="text/javascript" src="js/mainmenu/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/mainmenu/selectnav.js"></script>



<script type="text/javascript" src="js/mainmenu/scripts.js"></script>

<!-- tabs script -->
<script type="text/javascript" src="js/tabs/tabs.js"></script>





</body>
</html>
