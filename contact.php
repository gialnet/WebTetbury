<?php 
$name_of_your_site = "http://secure.tetburyss.co.uk/"; 
$email_adress_reciever = "mariadelmarpf@gmail.com";

if(isset($_POST['Send']))
{
	include('send.php');	
}
?>

<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
	<title>Contacto - MyEmpresa</title>
	
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
 

</head>

<body>

<div class="site_wrapper">
   

<!-- HEADER -->
<?php include 'menu.php'; ?>
   

<div class="clearfix"></div>
 
<div class="page_title">
	<div class="container">
		<div class="title"><h1>Contacto</h1></div>
        <div class="pagenation">&nbsp;<a href="index.php">Inicio</a> <i>/</i> Contacto</div>
	</div>
</div><!-- end page title --> 

<div class="clearfix"></div>


<!-- Contant
======================================= -->

<div class="container">

	<div class="content_fullwidth">
        	
    <div class="one_half">
        

    
    <br />
    

    <br />
    <h3><i>Formulario de Contacto</i></h3>
    
    <h5>Estamos encantados de escucharte y responder todas tus dudas.</h5>

    <form action="" method="post">
    
        <fieldset>
        
        <?php if (!isset($errorC) || $errorC == true){ ?>
        
        <label for="name" class="blocklabel">Nombre*</label>
        <p class="<?php if (isset($the_nameclass)) echo $the_nameclass; ?>" ><input name="yourname" class="input_bg" type="text" id="name" value='<?php if (isset($the_name)) echo $the_name?>'/></p>
        
        
        <label for="email" class="blocklabel">E-Mail*</label>
        <p class="<?php if (isset($the_emailclass)) echo $the_emailclass; ?>" ><input name="email" class="input_bg" type="text" id="email" value='<?php if (isset($the_email)) echo $the_email ?>' /></p>
        
        
        <label for="website" class="blocklabel">Website</label>
        <p><input name="website" class="input_bg" type="text" id="website" value="<?php if (isset($the_website))  echo $the_website?>"/></p>
        
        
        <label for="message" class="blocklabel">Mensaje*</label>
        <p class="<?php if (isset($the_messageclass)) echo $the_messageclass; ?>"><textarea name="message" class="textarea_bg" id="message" cols="20" rows="7" ><?php  if (isset($the_message)) echo $the_message ?></textarea></p>
        
        
        <p>
        <input type="hidden" id="myemail" name="myemail" value="<?php echo $email_adress_reciever; ?>" />
        <input type="hidden" id="myblogname" name="myblogname" value="<?php echo $name_of_your_site; ?>" />
        <div class="clearfix"></div>
        <input name="Send" type="submit" value="Enviar" class="comment_submit" id="send"/></p>
        <?php } else { ?> 
        
        <div class="success">
            <div class="message-box-wrap">
               Tu mensaje ha sido  <strong>recibido satisfactoriamente!</strong> Gracias!</div>
        </div>
        
        <?php } ?>
        
        </fieldset>
        
        </form> 
    
    </div>
               
    <div class="one_half last">
    
        <div class="address-info">
            <h3><i>Dirección</i></h3>
                <ul>
                <li>
                <strong>Tetbury Software Service LTD</strong><br />
               <!-- 2901 Marmora Road, Glassgow, Seattle, WA 98122-1090<br />
                Telephone: +1 1234-567-89000<br />
                FAX: +1 0123-4567-8900<br />-->
                E-mail: <a href="mailto:info@tetburyss.co.uk">info@tetburyss.co.uk</a><br />
                Website: <a href="index.html">www.myempresa.eu</a>
                </li>
            </ul>
        </div>

        <!-- <h3><i>Aqui estamos</i></h3>
            <iframe class="google-map" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=WA,+United+States&amp;aq=0&amp;oq=WA&amp;sll=47.605288,-122.329296&amp;sspn=0.008999,0.016544&amp;ie=UTF8&amp;hq=&amp;hnear=Washington,+District+of+Columbia&amp;t=m&amp;z=7&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=WA,+United+States&amp;aq=0&amp;oq=WA&amp;sll=47.605288,-122.329296&amp;sspn=0.008999,0.016544&amp;ie=UTF8&amp;hq=&amp;hnear=Washington,+District+of+Columbia&amp;t=m&amp;z=7&amp;iwloc=A">Ampliar Mapa</a></small>
        -->
    </div>
            
</div>

</div><!-- end content area -->


<div class="bottom_section">

	<div class="waves_graph2"></div>
   
    <div class="container">
        <div class="big_text2"><i>Con MyEmpresa</i> podrás manejar toda tu facturación y contabilidad de manera sencilla, <a href="AltaServicioIdentidadFederada.php">pruébalo ya.</a></div>
    </div>
    
    <div class="clearfix mar_top3"></div>
    
</div><!-- end bottom section -->







<?php include './footer.php'; ?>

 
</div>

    
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

<!-- jquery jcarousel -->
<script type="text/javascript" src="js/jcarousel/jquery.jcarousel.min.js"></script>

<!-- REVOLUTION SLIDER -->
<script type="text/javascript" src="js/revolutionslider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<script type="text/javascript" src="js/mainmenu/scripts.js"></script>

<!-- tabs script -->
<script type="text/javascript" src="js/tabs/tabs.js"></script>

<!-- scroll up -->
<script type="text/javascript">
    $(document).ready(function(){
 
        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('.scrollup').fadeIn();
            } else {
                $('.scrollup').fadeOut();
            }
        });
 
        $('.scrollup').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 500);
            return false;
        });
 
    });
</script>

<!-- jquery jcarousel -->
<script type="text/javascript">

	jQuery(document).ready(function() {
			jQuery('#mycarousel').jcarousel();
	});
	
	jQuery(document).ready(function() {
			jQuery('#mycarouseltwo').jcarousel();
	});
	
	jQuery(document).ready(function() {
			jQuery('#mycarouselthree').jcarousel();
	});
	
	jQuery(document).ready(function() {
			jQuery('#mycarouselfour').jcarousel();
	});
	
</script>

<!-- accordion -->
<script type="text/javascript" src="js/accordion/custom.js"></script>

<!-- REVOLUTION SLIDER -->
<script type="text/javascript">

	var tpj=jQuery;
	tpj.noConflict();

	tpj(document).ready(function() {

	if (tpj.fn.cssOriginal!=undefined)
		tpj.fn.css = tpj.fn.cssOriginal;

		var api = tpj('.fullwidthbanner').revolution(
			{
				delay:9000,
				startwidth:1170,
				startheight:500,

				onHoverStop:"on",						// Stop Banner Timet at Hover on Slide on/off

				thumbWidth:100,							// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
				thumbHeight:50,
				thumbAmount:3,

				hideThumbs:200,
				navigationType:"none",				// bullet, thumb, none
				navigationArrows:"solo",				// nexttobullets, solo (old name verticalcentered), none

				navigationStyle:"round",				// round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom


				navigationHAlign:"center",				// Vertical Align top,center,bottom
				navigationVAlign:"bottom",					// Horizontal Align left,center,right
				navigationHOffset:30,
				navigationVOffset:-40,

				soloArrowLeftHalign:"left",
				soloArrowLeftValign:"center",
				soloArrowLeftHOffset:0,
				soloArrowLeftVOffset:0,

				soloArrowRightHalign:"right",
				soloArrowRightValign:"center",
				soloArrowRightHOffset:0,
				soloArrowRightVOffset:0,

				touchenabled:"on",						// Enable Swipe Function : on/off


				stopAtSlide:-1,							// Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
				stopAfterLoops:-1,						// Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic

				hideCaptionAtLimit:0,					// It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
				hideAllCaptionAtLilmit:0,				// Hide all The Captions if Width of Browser is less then this value
				hideSliderAtLimit:0,					// Hide the whole slider, and stop also functions if Width of Browser is less than this value


				fullWidth:"on",

				shadow:0								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)

			});

});



</script>

<script type="text/javascript" src="js/sticky-menu/core.js"></script>

<!-- testimonials -->
<script type="text/javascript">//<![CDATA[ 
$(window).load(function(){
$(".controlls li a").click(function(e) {
    e.preventDefault();
    var id = $(this).attr('class');
    $('#slider div:visible').fadeOut(500, function() {
        $('div#' + id).fadeIn();
    })
});
});//]]>  

</script>


</body>
</html>
