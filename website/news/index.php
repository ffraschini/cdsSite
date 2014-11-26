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
			iniciarSpinner();
            //iniciarPorfolio();
			//getWorkContainer('filter');		
		
			/*if(location.href == "http://www.codigodelsur.com/website/" || location.href == "http://codigodelsur.com/website/" ){
				location.href = "#divPortfolio";
					
			}*/
			
        });
		
		
    </script>
   
   
</head>
<body>
<?php include("../header.html"); ?>
 <!-- NEWS -->
    <div id="divNews">
        <section id="SecNews">
			<div id="titles">
				<h2 id="News">News /</h2>
			</div>					
			<ul id="carousel">
				
				<li class="icon-news icon-news2" onclick="verNews01()"><div class="imageCircular" style="background-image: url('img/news/Stan-Lee.jpg');"></div><h5>Stan Lee on Weev</h5><br><br></li>
				<li class="icon-news icon-news1" onclick="verNews02()"><div class="imageCircular" style="background-image: url('img/news/Toymail Cisco.png');"></div><h5>ToyMail<br>won 3rd prize at Cisco IoT <br> innovation contest</h5></li>
				<li class="icon-news icon-news1" onclick="verNews03()"><div class="imageCircular" style="background-image: url('img/news/Sting.jpg');"></div><h5>Sting on Weev</h5><br><br></li>				

				<li class="icon-news icon-news2" onclick="verNews04()"><div class="imageCircular" style="background-image: url('img/news/Jimmy Fallon.png');"></div><h5>Stephen Moyer </br> at the Jimmy Fallon Show</h5><br></li>			
				<!--li class="icon-news icon-news4" onclick="verNews04()"><div style=" background-image: url(img/newsViajeIsrael.png);"></div><h5>Trip to Israel</h5><br/></li-->			
				<li class="icon-news icon-news5" onclick="verNews05()"><div class="imageCircular" style="background-image: url('img/news/Wink Kindara.jpg');"></div><h5> Introducing Wink <br> by Kindara </h5><br></li>	
			</ul>
			
			<!--ul id="carousel">
				
			</ul-->

			<div id="newshide" class="mT25">     <!-- NOVA 2013 - ESTO VA OCULTO -->
				<div id="firstlineNews"></div>
				<div id="txtNews">
					<div class="close" onclick="ocultarNews('newshide')"></div>
					
					<p>
						You ask on Weev and STAN LEE answered on the Hot Topic main stage at Comikaze Expo, powered by Weev. Check their responses to YOU! 
						<br><br>
						Download Weev, be a part of the conversation and check out all the great questions and answers — with Stan Lee. 
					</p>
					<div class="LinkStore01"><a href="https://www.facebook.com/video.php?v=305852549603769" target="_blank">https://www.facebook.com/video.php?v=305852549603769</a></div>
					
				</div>
				
				<div id="secondlineNews"></div>
			</div>
			<div id="newshide02" class="mT25">     <!-- NOVA 2013 - ESTO VA OCULTO -->
				<div id="firstlineNews02"></div>
				<div id="txtNews">
					<div class="close" onclick="ocultarNews('newshide02')"></div>
					
					
					<p>
						We're very happy to know that Toymail won 3rd place at the Cisco IoT innovation contest.
						This is a very exciting accomplishment! It will help change the world by connecting the unconnected. 
					</p>
					<div class="LinkStore01"><a href="https://iotchallenge.cisco.spigit.com/Page/Home" target="_blank" >https://iotchallenge.cisco.spigit.com/Page/Home</a></div>
					
					
					
				</div>
				<div id="secondlineNews"></div>
			</div>
			<div id="newshide03" class="mT25">     <!-- Launch of Fun Time Timer - ESTO VA OCULTO -->
				<div id="firstlineNews03"></div>
				<div id="txtNews">
					<div class="close" onclick="ocultarNews('newshide03')"></div>
					<p>
						Sting (yes STING) was on Weev on October 15th! You asked and The Last Ship's Sting and Michael Esper responded. 
						<br><br>
						Download Weev, be a part of the conversation and check out all the great questions and answers! — with Sting. 
					</p>
					<div class="LinkStore01"><a href="https://www.facebook.com/video.php?v=298744830314541" target="_blank">https://www.facebook.com/video.php?v=298744830314541</a></div>
				</div>
				<div id="secondlineNews"></div>
			</div>
			<div id="newshide04" class="mT25">     <!-- How to Hire the Right Mobile App Developer - ESTO VA OCULTO -->
				<div id="firstlineNews04"></div>
				<div id="txtNews">
					<div class="close" onclick="ocultarNews('newshide04')"></div>
					<p>	Stephen Moyer invented a social media app (Weev) and we're the developers! Check out this video of him at the Jimmy Fallon show: <a src="http://www.nbc.com/the-tonight-show/segments/8621">http://www.nbc.com/the-tonight-show/segments/8621</a> 
					</br>We're very happy to be a part of the Weev team! Weev, is social video that talks back. Ask any question, and have the world answer it in short videos that are stitched together to give you all the insight you need. And, if you are too shy to ask, knock yourself out responding to as many questions you like. 
					</p>
					<div class="LinkStore01"><a href="https://itunes.apple.com/us/app/weev/id669729170?mt=8" target="_blank">https://itunes.apple.com/us/app/weev/id669729170?mt=8</a></div>
				</div>
				<div id="secondlineNews">
				</div>
			</div>

			<div id="newshide05" class="mT25">     <!-- How to Hire the Right Mobile App Developer - ESTO VA OCULTO -->
				<div id="firstlineNews05"></div>
				<div id="txtNews">
					<div class="close" onclick="ocultarNews('newshide05')"></div>
					<p>	
					Another of our AWESOME customers is doing history! Kindara has introduced Wink, the world's most advanced basal thermometer. This discreet and beautiful wireless oral fertility thermometer seamlessly syncs with your Kindara app. <br><br>Learn more at www.kindara.com/wink 
					</p>
					<div class="LinkStore01"><a href="https://www.youtube.com/watch?v=47mvygsKo_Q" target="_blank">https://www.youtube.com/watch?v=47mvygsKo_Q</a></div>
				</div>
				<div id="secondlineNews">
				</div>
			</div>

			<!-- solo para 640 -->
			<div id="slides">
				<div id="slidesNews">
					<div class="slidesTitle"><p>News Fine Citizens</p></div>
					<div class="slidesImg"><img src="img/news_480.png"></div>
					<div class="slidesText">
						<p>Everything we [Fine Citizens] do is connected and responsive, unless specified otherwise,” says Marketing Coordinator, Julianna White. “It would be irresponsible for us to do anything else. The fact is, the internet is not just on a desktop or laptop anymore. ” According to the International Telecommunications Union, roughly 25 billion devices will be able to connected to the internet by 2020 (ITU). This includes everything from the largest home appliances to the smallest consumer electronics along with smartphones, tablets, and PCs.
							The use of RWD lets web designers have more control over the way a brand will look on a wide range of devices. “We cannot predict what device will be closest when our clients’ brands will be accessed. Our job is to make them look as great as possible no matter the size of the screen,” says White.
							In conjunction with</p>
					</div>
				</div>
			</div>
			<!--max 450px-->
			<div class="content450" id="newsContent450" >						
				<a onClick="GoBackNewsItem()" class="btnleftPort"></a>
				<div>
					<ul id="news_Tilte" class="TitlePortfolio">
						<li id="n1">Toymail won 3rd prize at Cisco IoT innovation contest</li>
						<li id="n2">Sting on Weev</li>
						<li id="n3">Google Glass now in CodigoDelSur!</li>
						<li id="n4">NOVA 2013</li>
						<li id="n5">Introducing Wink by Kindara</li>
					</ul>
				</div>
				<a class="btnrightPort" onClick="GoNextNewsItem()"></a>
			</div>		
			<div id="newsDesc" class="contInfoDesc450" >
				<ul class="InfoNews">
					<!-- para movile solo se carga la primera noticia, las otras se traen a demanda por ajax con el slider-->
					<li id="News1">
						<img class="porfImg" src="img/news/Toymail Cisco.png"/>
						<p>We're very happy to know that Toymail won 3rd place at the Cisco IoT innovation contest. This is a very exciting accomplishment! It will help change the world by connecting the unconnected.
						<br><br>Reference:	<a href="https://iotchallenge.cisco.spigit.com/Page/Home">https://iotchallenge.cisco.spigit.com/Page/Home</a></p>
					</li>
					<!-- para movile solo se carga la primera noticia, las otras se traen a demanda por ajax con el slider-->
				</ul>
			</div>
		</section>
    </div>
    <!-- 2er triangulo -->
    <div class="triangulo">
        <img src="img/blue01.png" />
    </div>
    <!-- Fin -->
	<?php include("../footer.html"); ?>
</body>
</html>		