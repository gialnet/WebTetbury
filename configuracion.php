<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

    <head>
        <title>Configuración - MyEmpresa</title>

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
                    <div class="title"><h1>Configuración básica</h1></div>
                    <div class="pagenation">&nbsp;<a href="index.php">Inicio</a> <i>/</i> <a >Configuración básica</a> <i></i></div>
                </div>
            </div><!-- end page title --> 

            <div class="clearfix"></div>


            <!-- Contant
            ======================================= -->

            <div class="container">

                <div class="content_fullwidth">

                    <div class="one_full">	


                        <h3><a >Pasos de configuración básica para comenzar a utilizar MyEmpresa</a></h3>





                        <p>Para comenzar a utilizar MyEmpresa una vez dado de alta en el servivio deberás introducir en la sección de Configuración > Datos de Configuración </p>

                        <blockquote>Es importante que introduzca todos sus datos pues son los que luego aparecerán en las facturas que emita, además del NIF/CIF ya que MyEMpresa se adapatará a las obligaciones fiscales de su empresa según este dato.</blockquote>

                        <p>Con solo guardar, ya podrá a comenzar a utilizar el servicio.</p>

                        </br>

                        <p>Puede consultar como configurar su seguridad de acceso en <a href="configuracion-acceso.php">Configurar la seguridad de Acceso</a></p>


                    </div>
                </div>
            </div><!-- /# end post -->





        </div>














    </div><!-- end content area -->


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



    <script type="text/javascript" src="js/sticky-menu/core.js"></script>

  


</body>
</html>
