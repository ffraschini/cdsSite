<html lang="en">
<head>
    <meta charset="utf-8" />
    <!--meta name="viewport" content="target-densitydpi=device-dpi, initial-scale=1.0, user-scalable=no" /-->
    <title>Código del Sur</title>
    <link rel="shortcut icon" href="../Img/iconoBrowser.png">
    <!-- To allow your media queries to take full effect a typical mobile-optimized site contains something like the following: -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="../webCDS.css">
    <!-- jQuery library (served from Google) -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <!-- Para SCROLL -->
    <--!script type="text/javascript" src="js/scrollTo.js"></script-->
    <!--LAS ANTERIORES SE UNIERON EN UNO-->
    <script type="text/javascript" src="../js/unified.js"></script>
    <!-- bxSlider Javascript file -->
    <script src="../jquery.bxslider/jquery.bxslider.min.js"></script>
    <!-- bxSlider CSS file -->
    <link href="../jquery.bxslider/jquery.bxslider.css" rel="stylesheet" />
    <!-- Para SLIDES -->
    <script type="text/javascript" src="../js/slides.js"></script>
    <!-- about us-->
    <script type="text/javascript" src="../js/slides-portfolio.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.66.0-2013.10.09/jquery.blockUI.min.js"></script>
    <script type="text/javascript" src="../js/spin.js"></script>
    <script type="text/javascript" src="../js/jquery.spin.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/jquery-ui.min.css">
    <!--jCarousel library
		<link rel="stylesheet" type="text/css" href="css/demo.css" />-->
    <link rel="stylesheet" type="text/css" href="../css/elastislide.css" />
    <link rel="stylesheet" type="text/css" href="../css/custom.css" />
    <script src="../js/modernizr.custom.17475.js"></script>
    <!--Carousel Simple 02-->
    <link rel="stylesheet" type="text/css" href="" />
	 <script>
        jQuery(document).ready(function () {
			
           
		
        });
		
		
    </script>
   
   
</head>
<body>
<?php include("../header.html"); ?>
 <div id="divContactUs">
        <section id="SecContactUs">
			<div id="titles"><h2 id="ContactUs">Contact us /</h2><h3 class="subtitle" >Getting started, support</h3></div>
			<div style="clear: both"></div>
            <div id="leftContactUs">
                <h4>Below you can find our contact information</h4>
                <span id="Contact_underline">Mailing Address </span>
                <div><span>Gaetán 988</span></div>
				<div><span>CP 11700 </span></div>
                <div><span>Montevideo - URUGUAY </span></div>
                <span id="Contact_underline">Phone General </span>
                <div><span style="color:#FFF"> +598 2336 1732 </span></div>
                <span id="Contact_underline">Inquiries </span>
                <div><span>info@codigodelsur.com </span></div>
				<span id="Contact_underline">RRHH </span>
                <div><span> rrhh@codigodelsur.com </span></div>
				<span id="Contact_underline">Skype </span>
				<div><span>nataliaacds</span></div>
				<div><span>CP 11700 </span></div>
                <div><span>Montevideo - URUGUAY </span></div>
            </div>
            <div id="rightContactUs">
                <form id="contact-form" action="mail.php" method="post">
                    <h4>Or you could use the following form to send us a message and we will contact you as soon as possible.</h4>
                    <div>
						<span>Name*: </span>
						<input id="Name" name="Name" type="text" tabindex="1" required>
                    </div>
                    <div>
						<span>Email*: </span>
						<input id="Email" name="Email" type="email" tabindex="2" required>
                    </div>
                    <div>
						<span>Company*: </span>
						<input id="Company" name="Company" type="tel" tabindex="3" required>
                    </div>
                    <div>
						<span>Comments*: </span>
						<textarea id="Comments" name="Comments" tabindex="4" required></textarea>
                    </div>
                    <div>	
                        <span id="message" style="float: left; width:200px; font-size:13px; line-height: 15px;"></span>
                        <div  style="float:right; width: 88px;  margin-bottom: 20px;">
                            <a id="contact-submit" style="margin: 0;" onclick="sendEmail()">Send</a>
                        </div>
                    </div>
                </form>
            </div>
            <div style="clear: both;"></div>
		</section>
    </div>
    <!-- 7mo triangulo -->
    <div class="triangulo" style="background-color: #40B4A6;">
        <img src="img/green03.png" />
    </div>
    <!-- fin -->
	<?php include("../footer.html"); ?>
</body>
</html>		