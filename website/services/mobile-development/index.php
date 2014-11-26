<html lang="en">
<head>
    <meta charset="utf-8" />
    <!--meta name="viewport" content="target-densitydpi=device-dpi, initial-scale=1.0, user-scalable=no" /-->
    <title>Código del Sur</title>
    <link rel="shortcut icon" href="../../Img/iconoBrowser.png">
    <!-- To allow your media queries to take full effect a typical mobile-optimized site contains something like the following: -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="../../webCDS.css">
    <!-- jQuery library (served from Google) -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <!-- Para SCROLL -->
    <--!script type="text/javascript" src="js/scrollTo.js"></script-->
    <!--LAS ANTERIORES SE UNIERON EN UNO-->
    <script type="text/javascript" src="../../js/unified.js"></script>
    <!-- bxSlider Javascript file -->
    <script src="../../jquery.bxslider/jquery.bxslider.min.js"></script>
    <!-- bxSlider CSS file -->
    <link href="../../jquery.bxslider/jquery.bxslider.css" rel="stylesheet" />
    <!-- Para SLIDES -->
    <script type="text/javascript" src="../../js/slides.js"></script>
    <!-- about us-->
    <script type="text/javascript" src="../../js/slides-portfolio.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.66.0-2013.10.09/jquery.blockUI.min.js"></script>
    <script type="text/javascript" src="../../js/spin.js"></script>
    <script type="text/javascript" src="../../js/jquery.spin.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../../css/jquery-ui.min.css">
    <!--jCarousel library
		<link rel="stylesheet" type="text/css" href="css/demo.css" />-->
    <link rel="stylesheet" type="text/css" href="../../css/elastislide.css" />
    <link rel="stylesheet" type="text/css" href="../../css/custom.css" />
    <script src="../../js/modernizr.custom.17475.js"></script>
    <!--Carousel Simple 02-->
    <link rel="stylesheet" type="text/css" href="" />
	 <script>
        jQuery(document).ready(function () {
			//iniciarServices();
			
        });
		function goTo(direction){
			location.href = direction;
		
		}
    </script>
   
   
</head>
<body>
<?php include("../../header.html"); ?>
<!-- SERVICES -->
    <div id="divServices">
        <section id="SecServices">
		    <div id="titles"><h2 id="Services">Services /</h2><h3 class="subtitle" >What we do best</h3></div>					
			<div class="min-900">
			    <div id="iconServices">
				    <ul>
					    <li class="buttonServ icon-software" onclick="goTo('../software-development')" ></li>
					    <li class="buttonServ icon-mobile" onclick="goTo('')" data-name="verServ2"></li>
					    <li class="buttonServ icon-web" onclick="goTo('../web-developmen')" data-name="verServ3"></li>
					    <li class="buttonServ icon-game" onclick="goTo('../games')" data-name="verServ5" ></li>
					    <li class="buttonServ icon-graphic" onclick="goTo('../graphic-design')" data-name="verServ4" ></li>
				    </ul>
			    </div>
			    <div id="titleServices">
				    <ul>
					    <li><h5>Software development / Programming & Maintenance</h5></li>
					    <li><h5>Mobile development</h5></li>
					    <li><h5>Web development</h5></li>
					    <li><h5>Games</h5></li>
					    <li><h5>Graphic design</h5></li>
				    </ul>
			    </div>
			    <div style="clear: both;"></div>
			   
			    <div id="serviceshide2">        <!-- Mobile development -->
				    <div id="firstlineServ3"></div>
				    <div id="txtServices">
					    <div class="close" onclick="ocultarServ('serviceshide2')"></div>
				    <p> We have been developing mobile applications since 2007, and have more than 30 applications under our belt that are available at the different Application Stores (App Store and Google Play).</p>
				    <p> We have a dedicated team of over 20 mobile developers that just breathe mobile technologies and have developed medical, financial, and social networking applications, plus many games and animations - to name a few.</p>
				    <p> Our core mobile skills are focused on iOS, Android, Cordova (PhoneGap) and HTML5. </p>
				    </div>
				    <div id="secondlineServ"></div>
			    </div>
			
			    <div id="titleMethod"><h2 id="Method">Methodology /</h2><h3 class="subtitle">Agile software development</h3></div>
			    <div id="scrum"></div>
			    <div id="scrumLogo"><a href="http://www.scrum.org/" target="_blank"><img src="img/scrumLogo.png"></a></div>
			</div>
			<div class="max-900">
				<div id="iconServices">
					<ul>
						<li class="buttonServ ">
							<div class="titleS"> 
								<span  onclick="viewService('softwareText')">
								<img class="iconService" src="img/iconsoftware600.png"/> Software development </span>
							</div>
							<div class="softwareText contS" style="display:none">
								<img class="arrowgreen" src="img/arrowgreen.png" />
								<p> Due to the nature of our business, we’ve had the chance to work on a wide range of technologies and in various industries. Because of this, we have extensive experience in medical software, stock investment, game industry, education, and many other fields, becoming better professionals each day.</p>
								<p> When it comes down to developing any kind of Software, we take each stage very seriously: </p>
								<p> <img src="img/tick.png"/> Problem Analysis 
									<br><img src="img/tick.png"/> Market research
									<br> <img src="img/tick.png"/> Gather requirements for the proposed business solution
									<br> <img src="img/tick.png"/> Establish a plan or design for the software-based solution
									<br> <img src="img/tick.png"/> Implement (coding) the software - THE BEST PART! :D
									<br> <img src="img/tick.png"/> Test the software
									<br> <img src="img/tick.png"/> Deployment
									<br> <img src="img/tick.png"/> Maintenance and bug fixing
								</p>
							</div>
						</li>
						<li class="buttonServ ">
							<div class="titleS"> 
								<span onclick="viewService('mobileText')"><img class="iconService" src="img/iconmobile600.png"/>Mobile development</span>
							</div>
							<div class="mobileText contS" style="display:none">
								<img class="arrowgreen" src="img/arrowgreen.png" />
								<p> We have been developing mobile applications since 2007, and have more than 30 applications under our belt that are available at the different Application Stores (App Store and Google Play).</p>
								<p> We have a dedicated team of over 20 mobile developers that just breathe mobile technologies and have developed medical, financial, and social networking applications, plus many games and animations - to name a few.</p>
								<p> Our core mobile skills are focused on iOS, Android, Cordova (PhoneGap) and HTML5. </p>
							</div>
						</li>
						<li class="buttonServ ">
							<div class="titleS"> 
								<span onclick="viewService('webText')"><img class="iconService" src="img/iconwork600.png" />Web development</span>
							</div>
							<div class="webText contS" style="display:none">
								<img class="arrowgreen" src="img/arrowgreen.png" />
								<p> We can create your website from scratch and take care of everything - from graphic design to programming and QA. Our experience goes from Client side coding to Server side coding, including development of a CMS (Content Management Systems) which gives you independence from us when updating content.</p>
								<p> We use major web development programming languages like J2EE, .NET, PHP, Flex, RoR and frameworks like Joomla and Wordpress.</p>
							
							</div>
						</li>
						<li class="buttonServ">
							<div class="titleS"> 
								<span onclick="viewService('gameText')"><img class="iconService" src="img/icongame600.png" />Games</span>
							</div>
							<div class="gameText contS" style="display:none">
								<img class="arrowgreen" src="img/arrowgreen.png" />
								<p> This is what we love to do the most! We have worked with many games in many platforms, including web games, desktop and mobile. </p>
								<p> We cover these game development phases:	</p>
								<p> <img src="img/tick.png"/> Graphics
									<br> <img src="img/tick.png"/> Physics
									<br> <img src="img/tick.png"/> Scripting
									<br> <img src="img/tick.png"/> Sound
									<br> <img src="img/tick.png"/> Gameplay
									<br> <img src="img/tick.png"/> UI
									<br> <img src="img/tick.png"/> Input processing
									<br> <img src="img/tick.png"/> Game tools
									<br> <img src="img/tick.png"/> Network communications
								</p>
							</div>
						</li>
						<li class="buttonServ">
							<div class="titleS"> 
								<span onclick="viewService('graphicText')"><img class="iconService" src="img/icongraphic600.png"/>Graphic design</span>
							</div>
							<div class="graphicText contS" style="display:none">
								<img class="arrowgreen" src="img/arrowgreen.png" />
								<p>	As creative minds in a digital world, we certainly know the importance of things looking awesome, and the direct impact it has on the success (or not) of a good idea. </p>
								<p> Our graphic design team will provide a creative and aesthetic way to make your ideas come true, by combining typography, visual arts and page layout and creating a balanced, focused and symmetrical result. </p>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</section>
    </div>
    <!-- 3er triangulo -->
    <div class="triangulo">
        <img src="img/green01.png" />
    </div>
    <!-- Fin -->
	<?php include("../../footer.html"); ?>
</body>
</html>		