<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

    <head>
        <title>Registro Electrónico - MyEmpresa</title>

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
                    <div class="title"><h1>Signature Service</h1></div>
                    <div class="pagenation">&nbsp;<a href="index.php">Inicio</a> <i>/</i> <a>html">Registro Electrónico
                        </a> <i></i></div>
                </div>
            </div><!-- end page title --> 

            <div class="clearfix"></div>


            <!-- Contant
            ======================================= -->

            <div class="container">

                <div class="content_left">

                    <div class="blog_post">	
                        <div class="blog_postcontent">

                            

                            


                            <div class="post_info_content">
                                <h3><a >Gestión Documental Electrónica</a></h3>
                                <div class="clearfix"></div>
                                <br/>
                                <img class="imagen_mini" src="images/carpeta.jpg" alt="" />

                                <p>Te ofrecemos una herramienta para avanzar en la <strong>sustitución del documento papel por el soporte electrónico</strong>, además garantizando que cumple toda la normativa de digitalización certificada y almacenamiento a largo plazo según las         			        especificaciones y requerimientos del <a href="http://administracionelectronica.gob.es/pae_Home?_nfpb=true&_pageLabel=P60215901274203521811&langPae=es#" target="_blank">Esquema Nacional de Intereopereabilidad ENI</a>.</p>



                                <br/>
                                 <br/>

                                <ul>
                                    <li><i class="fa fa-caret-right"></i>Comunicaciones Fehacientes</li>
                                    <li><i class="fa fa-caret-right"></i>Búsqueda documental inteligente</li>
                                    <li><i class="fa fa-caret-right"></i>Disco duro virtual</li>
                                    <li><i class="fa fa-caret-right"></i>Digitalización Certificada</li>
                                    <li><i class="fa fa-caret-right"></i>Notificaciones</li>

                                </ul>


                                <p>Como es bien conocido en el periodo de tránsito hacia el documento electrónico, tenemos que seguir conviviendo con el soporte papel, para lo cual incorpora el módulo de digitalización certificada.</p>

                                <p>Para garantizar la autoría de los documentos soporta el eDNI y los certificados digitales X509 v3.</p>

                                <p>Gereramos un recibo acreditando la entrega de los documentos garantizando la integridad y el no repudio de los documentos aportados.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /# end post -->



            <!-- right sidebar starts -->
            <div class="right_sidebar">

                

                <div class="clearfix mar_top4"></div>

                <div class="sidebar_widget">

                    <div class="sidebar_title"><h3> <i>Información de interés</i></h3></div>
                    <ul class="arrows_list1">		
                        <li><a href="http://administracionelectronica.gob.es/ctt/verPestanaGeneral.htm?idIniciativa=eni#.Usb75l-Vs2o"><i class="fa fa-angle-right"></i> Esquema Nacional de Interoperabilidad</a></li>
                        
                        <li><a href="http://www.redmoon.es/edocpki.html"><i class="fa fa-angle-right"></i> Libreria especializada en el Esquema Nacional de Interoperabilidad</a></li>
                    </ul>

                </div><!-- end section -->

                <div class="clearfix mar_top4"></div>







            </div>

        </div>





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

<!-- scroll up -->
<script type="text/javascript">
                            $(document).ready(function() {

                                $(window).scroll(function() {
                                    if ($(this).scrollTop() > 100) {
                                        $('.scrollup').fadeIn();
                                    } else {
                                        $('.scrollup').fadeOut();
                                    }
                                });

                                $('.scrollup').click(function() {
                                    $("html, body").animate({scrollTop: 0}, 500);
                                    return false;
                                });


                            });
</script>



</body>
</html>
