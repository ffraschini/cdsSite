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
			
            iniciarStaff();           
            iniciarAbout();
            iniciarSpinner();
		
        });
		
		
    </script>
   
   
</head>
<body>
<?php include("../header.html"); ?>
 <!-- ABOUT US -->
    <div id="divAboutUs">
        <section id="SecAboutUs">
			<div id="titles"><h2 id="AboutUs">About us /</h2><h3 class="subtitle" >What is CDS?</h3></div>
			<p> Since 2007 (THE beginning) we have been growing exponentially, incorporating the best and most creative members of our community. 
				<br><br>Today, we are over 40 members including programmers, designers, engineers, mobile developers, and executives. We have worked <h8>+40.000 hours</h8> in the past four years. We have worked <h8>+50.000 hours</h8> in the past five year.
				<br><br>We consider our team to be our main asset, aiming to have the most professionally-fun environment. Our team is composed of highly skilled developers (yes, you can call us <h8>geeks</h8>) eager to get into the <h8>latest technologies</h8> and use them to leverage the products we make for our customers. Our team also includes <h8>designers</h8> who make our freaking advanced engineering machine products look like a <h8>piece of art</h8>.
				<br><br>We work in a <h8>professional</h8> and <h8>planned</h8> way within a fun and motivating environment,  knowing that <h8>communication</h8> and <h8>quality</h8> are crucial when working offshore. Meeting deadlines is the difference between success and failure - no matter how good your final product is.
				<br><br>This is who we are, this is what you can expect from us, and it is what we eagerly want to show you! 
			</p>
		</section>
    </div>
    <!-- 5to triangulo con CANVAS // no funciona en IE -->
    <div class="triangulo">
        <img src="../img/blue02.png" />
    </div>
    <!-- Fin -->
    <div id="divStaff">
        <section id="SecStaff">
			<div id="titles"><h2 id="Staff">Staff /</h2><h3 class="subtitle" >Our team</h3></div>
			<div id="members"></div>					
			<div id="contenedordefotos">
				<a id="photo01"  onclick="verStaff('01')"></a>	<!-- Nicolas A. -->
				<!--<a id="photo02" onclick="verStaff('02')"></a>	<!-- Alfredo L. -->
				<a id="photo03"	onclick="verStaff('03')"></a>	<!-- Nicolas J. -->
				<a id="photo04"	onclick="verStaff('04')"></a>	<!-- Luciano A. -->
				<!--a id="photo08"	href="#divStaff" onclick="verStaff('08')"></a-->	<!-- Yael O. -->
				<a id="photo06"	onclick="verStaff('06')"></a>	<!-- Noelia R. -->
				<a id="photo07"	onclick="verStaff('07')"></a>	<!-- Pablo A. -->
				<a id="photo50"	onclick="verStaff('50')"></a>	<!-- Jorge M. -->
				<a id="photo53"	onclick="verStaff('53')"></a>	<!-- Jonas S. -->
				<a id="photo52"	onclick="verStaff('52')"></a>	<!-- Valentina M. -->
				<a id="photo37"	onclick="verStaff('37')"></a>	<!-- Natalia A. -->
				<a id="photo09"	onclick="verStaff('09')"></a>	<!-- Gabriel V. -->
				<!--a id="photo10" onclick="verStaff('10')"></a>	<!-- Mauricio M. -->
				<a id="photo11" onclick="verStaff('11')"></a>	<!-- Federico F. -->
				<a id="photo13" onclick="verStaff('13')"></a>	<!-- Enrique B. -->
				<a id="photo14" onclick="verStaff('14')"></a>	<!-- Agustin Leira -->
				<a id="photo15" onclick="verStaff('15')"></a>	<!-- Damian D. -->
				<a id="photo16" onclick="verStaff('16')"></a>	<!-- Agustin De Leon -->
				<a id="photo17" onclick="verStaff('17')"></a>	<!-- Noelia C. -->
				<a id="photo19"	onclick="verStaff('19')"></a>	<!-- Veronica M. -->
				<!--<a id="photo20"	onclick="verStaff('20')"></a>	<!-- Nicolas B. -->
				<a id="photo21"	onclick="verStaff('21')"></a>	<!-- Marcos A. -->
				<!--<a id="photo22"	onclick="verStaff('22')"></a>	 Sergio O. -->
				<a id="photo23"	onclick="verStaff('23')"></a>	<!-- Ignacio R. -->
				<!--<a id="photo25"	onclick="verStaff('25')"></a>	<!-- Carlos N. -->
				<a id="photo26"	onclick="verStaff('26')"></a>	<!-- Nicolas T. -->
				<a id="photo27" onclick="verStaff('27')"></a>	<!-- Diego A. -->
				<!--<a id="photo28"	onclick="verStaff('28')"></a>	<!-- Juan O. -->
				<a id="photo29"	onclick="verStaff('29')"></a>	<!-- Juan G. -->
				<a id="photo30"	onclick="verStaff('30')"></a>	<!-- Mathias dB. -->
				<!--<a id="photo32"	onclick="verStaff('32')"></a>	<!-- Pablo G. -->
				<a id="photo34"	onclick="verStaff('34')"></a>	<!-- Williams O. -->
				<a id="photo36"	onclick="verStaff('36')"></a>	<!-- Leonardo M. -->
				<a id="photo39"	onclick="verStaff('39')"></a>	<!-- Diego V. -->
				<!--<a id="photo40"	onclick="verStaff('40')"></a>	<!-- Alejandro -->
				<!--<a id="photo41"	onclick="verStaff('41')"></a>	<!-- Alejandro C -->
				<a id="photo43"	onclick="verStaff('43')"></a>	<!-- Gaston N -->
				<a id="photo44"	onclick="verStaff('44')"></a>	<!-- Pablo Y -->
				<a id="photo46"	onclick="verStaff('46')"></a>	<!-- Pablo E. -->
				<a id="photo47"	onclick="verStaff('47')"></a>	<!-- Daniela M. -->
				<a id="photo48"	onclick="verStaff('48')"></a>	<!-- Maximiliano T. -->
				<a id="photo51"	onclick="verStaff('51')"></a>	<!-- Leandro L. -->
				<a id="photo54"	onclick="verStaff('54')"></a>	<!-- Maximiliano G. -->
				<a id="photo45"	onclick="verStaff('45')"></a>	<!-- Constanza F. -->
				<a id="photo49"	onclick="verStaff('49')"></a>	<!-- Esperanza de L. -->
				<a id="photo42"	onclick="verStaff('42')"></a>	<!-- Camila P -->
				<a id="photo38"	onclick="verStaff('38')"></a>	<!-- Beatriz S. -->
				<div style="clear: both;"></div>
			</div>
		</section>
    </div>
    <!-- 6to triangulo -->
    <div class="triangulo">
        <img src="../img/red02.png" />
    </div>
    <!-- Fin -->
	<?php include("../footer.html"); ?>
</body>
</html>		