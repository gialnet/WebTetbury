<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<title>Acceso myEmpresa</title>

<!--[if IE 8]><link href="css/ie8.css" rel="stylesheet" type="text/css" /><![endif]-->
<!--[if IE 9]><link href="css/ie9.css" rel="stylesheet" type="text/css" /><![endif]-->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>


<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>

<script type="text/javascript" src="js/plugins/forms/jquery.uniform.min.js"></script>

<script type="text/javascript" src="js/files/bootstrap.min.js"></script>

<script type="text/javascript" src="js/files/login.js"></script>

<link href="css/main.css" rel="stylesheet" type="text/css" />
</head>

<body class="no-background">

	<!-- Fixed top -->
	<div id="top">
		<div class="fixed">
			<a href="inicio.jsp" title="" class="logo"><img src="img/logo.png" alt="" /></a>
			<!--<ul class="top-menu">
				<li class="dropdown">
					<a class="login-top" data-toggle="dropdown"></a>
					<ul class="dropdown-menu pull-right">
						<li><a href="#" title=""><i class="icon-group"></i>Change user</a></li>
						<li><a href="#" title=""><i class="icon-plus"></i>New user</a></li>
						<li><a href="#" title=""><i class="icon-cog"></i>Settings</a></li>
						<li><a href="#" title=""><i class="icon-remove"></i>Go to the website</a></li>
					</ul>
				</li>
			</ul>-->
		</div>
	</div>
	<!-- /fixed top -->


    <!-- Login block -->
    <div class="login">
        <div class="navbar">
            <div class="navbar-inner">
                <h6><i class="icon-user"></i>Acceso</h6>
                
            </div>
        </div>
        <div class="well">
            <form  class="row-fluid">
               
                
                <div class="control-group">
                    
                   
                    
                    <div class="login-btn"><div onclick="window.location.href='php/callbackGoogle.php';" class="btn btn-danger btn-block" ><i class="icon-google-plus-sign login-icono"></i>Google</div></div>
                </div>
                
                <div class="control-group">
                    
                    <div class="login-btn"><div onclick="window.location.href='php/callbackFacebook.php';"  class="btn btn-info btn-block" ><i class="icon-facebook-sign login-icono"></i>Facebook</div></div>
                </div>

                

                
            </form>
        </div>
    </div>
    <!-- /login block -->


	<!-- Footer -->
	<div id="footer">
		<div class="copyrights">2014 &copy;  Tetbury Software Service LTD.</div>
		<ul class="footer-links">
			<li><a href="" title=""><i class="icon-cogs"></i>Contactar con el administrador</a></li>
			<li><a href="" title=""><i class="icon-screenshot"></i>Reportar bug</a></li>
		</ul>
	</div>
	<!-- /footer -->

</body>
</html>