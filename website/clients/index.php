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
			iniciarClients();			
		
        });
		
		
    </script>
   
   
</head>
<body>
<?php include("../header.html"); ?>
 <!-- CLIENTS -->
    <div id="divClients">
        <section id="SecClients">
			<div id="titles"><h2 id="Clients">Clients /</h2><h3 class="subtitle" >What they think of us...</h3></div>
			<div id="arrowsClients">
				<ul>
					<li class="btnleftClients"><a href="#"></a></li>
					<li class="btnrightClients"><a href="#"></a></li>
				</ul>
			</div>
			<!-- lista clientes -->
			<!-- linea 1 -->
			<div class="min-900">

				<!----------------- TITLES LINE 1 --------------------->

				<!-- kindara -->
				<div id="client01" class="client">
					<div id="imgClient01" class="imgClient">
						<div class="imageCircular" style="width: 136px; height: 135px; background-image: url(img/KindaraC.png);"></div>
					</div>										
					<div id="nameClient01" class="nameClient"><h5>Kindara</h5><br></div>	
				</div>

				<!--19 Seacoast -->
				<div id="client19" class="client">
					<div id="imgClient01" class="imgClient">
						<!--no tenemos la imagen recortada circular lo hice por css por eso añado la clase imageCircular y cambio las medidas del css porque sino el borde blanco hace que la imagen se vea mas grande-->
						<div class="imageCircular" style="width: 122px; height: 122px; background-image: url(img/geacoast.png);"></div>
					</div>
					<!--div id="imgClient19" class="imgClient"><img src="img/clientsImg.png"></div-->
					<div id="nameClient19" class="nameClient"><h5>Seacoast.com</h5><br></div>
				</div>

				<!--20You+-->
				<div id="client20" class="client">
					<div id="imgClient01" class="imgClient">
						<!--no tenemos la imagen recortada circular lo hice por css por eso añado la clase imageCircular y cambio las medidas del css porque sino el borde blanco hace que la imagen se vea mas grande-->
						<div class="imageCircular" style="width: 122px; height: 122px; background-image: url(img/you.png);"></div>
					</div>						
					<div id="nameClient20" class="nameClient"><h5>You+</h5><br></div>
				</div>								
				
				<!--22 RadU -->
				<div id="client22" class="client">
					<div id="imgClient01" class="imgClient">
						<div class="imageCircular" style="width: 122px; height: 122px; background-image: url(img/radU.png);"></div>
					</div>
					<div id="nameClient22" class="nameClient"><h5>RadU</h5><br></div>
				</div>
				
				
				<!------------------------ END TITLES LINE 1------------------>


				<!------------------------ DESCRIPTIONS LINE 1------------------>

				<!-- 01 kindara -->
				<div id="hideClient01" class="hideClient">
					<div id="lineUpClient01" class="lineUpClient"></div>
					<div id="closeClient01" class="closeClient" ></div>
					<div id="infoClient01" class="infoClient">
						<p>"I give you guys a solid 4.5/5 - I find everyone at CDS competent and trustworthy and easy to work with." William Sacks</p>
					</div>
					<div id="lineDownClient01" class="lineDownClinet"></div>
				</div>

				<!-- 19 SeaCoast -->
				<div id="hideClient19" class="hideClient">
					<div id="lineUpClient14" class="lineUpClient"></div>
					<div id="closeClient19" class="closeClient"></div>
					<div id="infoClient19" class="infoClient">
						<p>"I get asked all the time, "How do I find a technical partner to build my idea?" I say, don't. Use Codigo Del Sur. The team setup is wonderful, there is great support from project management, and all the devs in house get to ask each other tough questions. They're really smart, nice people. I never have to worry about the time zone and I can't wait to visit Montevideo! Thank you for always being there for us". Neal Bozeman</p>
					</div>
					<div id="lineDownClient15" class="lineDownClinet"></div>
				</div>
				<!-- 20 You+ -->
				<div id="hideClient20" class="hideClient">
					<div id="lineUpClient15" class="lineUpClient"></div>
					<div id="closeClient20" class="closeClient"></div>
					<div id="infoClient20" class="infoClient">
						<p>"So far, it has been wonderful working with you guys. Expectations are planned and executed, while the team seems to really enjoy each and every day of work. Highly recommended." Charlie Hale</p>
					</div>
					<div id="lineDownClient16" class="lineDownClinet"></div>
				</div>
				
				<!-- RadU -->
				<div id="hideClient22" class="hideClient">
					<div id="lineUpClient16" class="lineUpClient"></div>
					<div id="closeClient22" class="closeClient"></div>
					<div id="infoClient22" class="infoClient">
						<p>"CodigoDelSur was a pleasant surprise. I will definitely hire them again next project. It all started with the briefing phase and project overall estimation. It helped scale team size. Programmers were quick and efficient in their work. But I did not even have to worry about it. The key element to this was the project coordinator. It interfaces with all teams (IT backend, programming, design and client - myself) to provide precise deadlines and task coordination. My IT backend team, for instance, that programmed the server side wasn't even CodigoDelSur and I did not have to worry about this issue. One of them was in Canada, the other one in remote area of Brazil and designer in another. Application was delivered on-time and work was very well documented and reported in realtime through latest technologies such as Pivotal Tracking." Dario Souza</p></div>
					<div id="lineDownClient14" class="lineDownClinet"></div>
				</div>

				<!------------------------ END DESCRIPTIONS LINE 1------------------>

				<!-- linea 2 -->
				<!----------------- TITLES LINE 2 --------------------->

				<!-- Storyly -->
				<div id="client05" class="client">
					<div id="imgClient01" class="imgClient">
						<div style="width: 140px; height: 140px; background-image: url(img/clientsStoryly.png);"></div>
					</div>
					<!--div id="imgClient05" class="imgClient"><img src="img/clientsStoryly.png"></div-->
					<div id="nameClient05" class="nameClient"><h5>Storyly</h5><br /></div>
				</div>
				<!-- Webátix -->
				<div id="client06" class="client">
					<div id="imgClient01" class="imgClient">
						<div style="width: 136px; height: 135px; background-image: url(img/clientsWebatix.png);"></div>
					</div>
					<!--div id="imgClient06" class="imgClient"><img src="img/clientsImg.png"></div-->
					<div id="nameClient06" class="nameClient"><h5>Webátix</h5><br /></div>
				</div>
				<!-- BiznessApps -->
				<div id="client07" class="client">
					<div id="imgClient01" class="imgClient">
						<div style="width: 136px; height: 135px; background-image: url(img/clientsBiznessApps.png);"></div>
					</div>
					<!--div id="imgClient07" class="imgClient"><img src="img/clientsBiznessApps.png"></div-->
					<div id="nameClient07" class="nameClient"><h5>BiznessApps</h5><br /></div>
				</div>
				<!-- Appracadabra -->
				<div id="client08" class="client">
					<div id="imgClient01" class="imgClient">
						<div style="width: 136px; height: 135px; background-image: url(img/clientsAppracadabra.png);"></div>
					</div>
					<!--div id="imgClient08" class="imgClient"><img src="img/clientsAppracadabra.png"></div-->
					<div id="nameClient08" class="nameClient"><h5>Appracadabra</h5><br /></div>
				</div>

				<!----------------- END TITLES LINE 2 --------------------->

				<!----------------- DESCRIPTIONS LINE 2 --------------------->

				<!-- 05 Storyly -->
				<div id="hideClient05" class="hideClient">
					<div id="lineUpClient05" class="lineUpClient"></div>
					<div id="closeClient05" class="closeClient"></div>
					<div id="infoClient05" class="infoClient"><p>“This was a small test job - but I was impressed with the results and the effective communication.”</p></div>
					<div id="lineDownClient05" class="lineDownClinet"></div>
				</div>
				<!-- 06 Webátix -->
				<div id="hideClient06" class="hideClient">
					<div id="lineUpClient06" class="lineUpClient"></div>
					<div id="closeClient06" class="closeClient"></div>
					<div id="infoClient06" class="infoClient">
						<p>“Project was ended before completion, but these guys stood behind their work and were very fair in working through some issues we had in the beginning. I'd recommend them for your next .net program.”</p>
					</div>
					<div id="lineDownClient06" class="lineDownClinet"></div>
				</div>
				<!-- 07 BiznessApps -->
				<div id="hideClient07" class="hideClient">
					<div id="lineUpClient07" class="lineUpClient"></div>
					<div id="closeClient07" class="closeClient"></div>
					<div id="infoClient07" class="infoClient"><p>“They did a great job working for our company. Their work was on time and according to our deadline. I would definitely recommend to any company. Thanks!”</p></div>
					<div id="lineDownClient07" class="lineDownClinet"></div>
				</div>
				<!-- 08 Appracadabra -->
				<div id="hideClient08" class="hideClient">
					<div id="lineUpClient08" class="lineUpClient"></div>
					<div id="closeClient08" class="closeClient"></div>
					<div id="infoClient08" class="infoClient"><p>“Our experience with this provider is great, we are very happy to have worked with them. They are professional, great and clear communicators and they deliver what they promise. We will certainly work with them for future projects.”</p></div>
					<div id="lineDownClient08" class="lineDownClinet"></div>
				</div>

				<!----------------- END DESCRIPTIONS LINE 2 --------------------->

				<!-- linea 3 -->

				<!----------------- TITLES LINE 3 --------------------->
				<!-- Leapgo -->
				<div id="client09" class="client">
					<div id="imgClient01" class="imgClient">
						<div style="width: 136px; height: 135px; background-image: url(img/clientsLeapGo.png);"></div>
					</div>
					<!--div id="imgClient09" class="imgClient"><img src="img/clientsLeapGo.png"></div-->
					<div id="nameClient09" class="nameClient"><h5>Leapgo</h5><br /></div>
				</div>
				<!-- Zoom International -->
				<div id="client10" class="client">
					<div id="imgClient01" class="imgClient">
						<div style="width: 136px; height: 135px; background-image: url(img/clientsZoom.png);"></div>
					</div>
					<!--div id="imgClient10" class="imgClient"><img src="img/clientsZoom.png"></div-->
					<div id="nameClient10" class="nameClient"><h5>Zoom International</h5><br /></div>
				</div>
				<!-- StrongerLabs -->
				<div id="client11" class="client">
					<div id="imgClient01" class="imgClient">
						<div style="width: 136px; height: 135px; background-image: url(img/clientsStrongerLabs.png);"></div>
					</div>
					<!--div id="imgClient11" class="imgClient"><img src="img/clientsStrongerLabs.png"></div-->
					<div id="nameClient11" class="nameClient"><h5>StrongerLabs</h5><br /></div>
				</div>
				<!-- BHA Financial Solutions -->
				<div id="client12" class="client">
					<div id="imgClient01" class="imgClient">
						<div style="width: 140px; height: 140px; background-image: url(img/clientsBHA.png);"></div>
					</div>
					<!--div id="imgClient12" class="imgClient"><img src="img/clientsBHA.png"></div-->
					<div id="nameClient12" class="nameClient"><h5>BHA Financial Solutions</h5></div>
				</div>

				<!----------------- END TITLES LINE 3 --------------------->

				<!----------------- DESCRIPTIONS LINE 3 --------------------->
				<!-- 09 Leapgo -->
				<div id="hideClient09" class="hideClient">
					<div id="lineUpClient09" class="lineUpClient"></div>
					<div id="closeClient09" class="closeClient"></div>
					<div id="infoClient09" class="infoClient"><p>“CodigoDelSur is a great, young company with tons of talent. If you can afford to work with them you will not be disappointed.”</p></div>
					<div id="lineDownClient09" class="lineDownClinet"></div>
				</div>
				<!-- 10 Zoom International -->
				<div id="hideClient10" class="hideClient">
					<div id="lineUpClient10" class="lineUpClient"></div>
					<div id="closeClient10" class="closeClient"></div>
					<div id="infoClient10" class="infoClient"><p>“Great job, thank you :)”</p></div>
					<div id="lineDownClient10" class="lineDownClinet"></div>
				</div>
				<!-- 11 StrongerLabs -->
				<div id="hideClient11" class="hideClient">
					<div id="lineUpClient11" class="lineUpClient"></div>
					<div id="closeClient11" class="closeClient"></div>
					<div id="infoClient11" class="infoClient"><p>“CodigoDelSur was able to complete the assignment and provided valuable feedback.”</p></div>
					<div id="lineDownClient11" class="lineDownClinet"></div>
				</div>
				<!-- 12 BHA Financial Solutions -->
				<div id="hideClient12" class="hideClient">
					<div id="lineUpClient12" class="lineUpClient"></div>
					<div id="closeClient12" class="closeClient"></div>
					<div id="infoClient12" class="infoClient">
						<p>“The team at Codigo del Sur did a great job on this project and I'll definitely hire them again.”
						<br><br>“The standard of their work was excellent, they communicate frequently and were very reasonable on the odd occasion we had to resolve some ambiguity.”</p>
					</div>
					<div id="lineDownClient12" class="lineDownClinet"></div>
				</div>

				<!----------------- END DESCRIPTIONS LINE 3 --------------------->

				<!-- linea 4 -->
				<!----------------- TITLES LINE 4 --------------------->
				<!-- Cortexa -->
				<div id="client13" class="client">
					<div id="imgClient01" class="imgClient">
						<div style="width: 136px; height: 135px; background-image: url(img/clientsCortexa.png);"></div>
					</div>
					<!--div id="imgClient13" class="imgClient"><img src="img/clientsCortexa.png"></div-->
					<div id="nameClient13" class="nameClient"><h5>Cortexa</h5><br /></div>
				</div>
				<!-- IonGrid Inc. -->
				<div id="client14" class="client">
					<div id="imgClient01" class="imgClient">
						<div style="width: 136px; height: 135px; background-image: url(img/clientsIongrid.png);"></div>
					</div>
					<!--div id="imgClient14" class="imgClient"><img src="img/clientsIongrid.png"></div-->
					<div id="nameClient14" class="nameClient"><h5>IonGrid Inc.</h5><br /></div>
				</div>
				<!-- jGraph -->
				<div id="client15" class="client">
					<div id="imgClient01" class="imgClient">
						<div style="width: 136px; height: 135px; background-image: url(img/clientsJgraph.png);"></div>
					</div>
					<!--div id="imgClient16" class="imgClient"><img src="img/clientsJgraph.png"></div-->
					<div id="nameClient15" class="nameClient"><h5>jGraph</h5><br /></div>
				</div>
				<!-- Auerbach Group -->
				<div id="client16" class="client">
					<div id="imgClient01" class="imgClient">
						<div style="width: 140px; height: 140px; background-image: url(img/clientsAuerbach.png);"></div>
					</div>
					<!--div id="imgClient17" class="imgClient"><img src="img/clientsAuerbach.png"></div-->
					<div id="nameClient16" class="nameClient"><h5>Auerbach Group</h5><br /></div>
				</div>

				<!----------------- END TITLES LINE 4 --------------------->

				<!-- 13 Cortexa -->
				<!---------------- DESCRIPTIONS LINE 4 ---------->
				<div id="hideClient13" class="hideClient">
					<div id="lineUpClient13" class="lineUpClient"></div>
					<div id="closeClient13" class="closeClient"></div>
					<div id="infoClient13" class="infoClient">
						<p>“The CodigodelSur team have been exceptionally valuable team members, and a true pleasure to work with. They jumped head first into a very unusual software architecture, master many new skills and techniques quickly, and demonstrated enthusiasm, ingenuity, quality, and sensibility throughout the project. Their work ethic is solid and consistent. And, their English language skills really are excellent.”
						<br><br>“I will absolutely use CodigodelSur in future projects. As soon as possible!”</p>
					</div>
					<div id="lineDownClient13" class="lineDownClinet"></div>
				</div>
				<!-- 14 IonGrid Inc. -->
				<div id="hideClient14" class="hideClient">
					<div id="lineUpClient14" class="lineUpClient"></div>
					<div id="closeClient14" class="closeClient"></div>
					<div id="infoClient14" class="infoClient">
						<p>“We were happy with the work they did. It became very difficult to keep their team and our team from tripping over each other in the code, but they did implement the changes we requested and did a really good job. I would recommend this team especially if you need a whole app developed, including perhaps some of the visual design work, etc. We asked them to add some functionality to an existing app, while we were working in other parts of the code, and that is much more challenging (probably true with any outside dev team).”</p></div>
					<div id="lineDownClient14" class="lineDownClinet"></div>
				</div>
				<!-- 15 jGraph -->
				<div id="hideClient15" class="hideClient">
					<div id="lineUpClient15" class="lineUpClient"></div>
					<div id="closeClient15" class="closeClient"></div>
					<div id="infoClient15" class="infoClient">
						<p>“Codigo pulled out all the stops to get me a resource and turn the project around as quickly as possible. Top marks, as always.”
						<br><br>“Yet again, Codigodelsur have provided a far more professional contracting service than any other contractor we've found on ODesk. Great communication, but in this case it was hardly needed. They were given a high level task and the update emails were just that. They proceeded with the job without taking up any of our time and delivered the task correctly in good time. Would always recommend.”
						<br><br>“CodigoDelSur provided excellent quality, communications and project management as always...” 
						<br><br>“The quality of the work and communication was first-class. I would strongly recommend this provider and intend to use them again. The task was very detailed and they undertook it in a very professional way with the minimum of supervision.”</p>
					</div>
					<div id="lineDownClient15" class="lineDownClinet"></div>
				</div>
				<!-- 16 Auerbach Group -->
				<div id="hideClient16" class="hideClient">
					<div id="lineUpClient16" class="lineUpClient"></div>
					<div id="closeClient16" class="closeClient"></div>
					<div id="infoClient16" class="infoClient">
						<p>“Excellent Job! Highly Recommended!”</p>
					</div>
					<div id="lineDownClient16" class="lineDownClinet"></div>
				</div>

				<!----------------- END DESCRIPTIONS LINE 4 --------------------->

				<!-- linea 5 -->
				<!----------------- TITLES LINE 5 --------------------->

				<!--17 Paradigm Web Architects -->
				<div id="client17" class="client">
					<div id="imgClient01" class="imgClient">
						<div style="width: 136px; height: 135px; background-image: url(img/clientsParadigm.png);"></div>
					</div>
					<!--div id="imgClient18" class="imgClient"><img src="img/clientsParadigm.png"></div-->
					<div id="nameClient17" class="nameClient"><h5>Paradigm Web Architects</h5></div>
				</div>
				<!--18 Blaychon -->
				<div id="client18" class="client">
					<div id="imgClient01" class="imgClient">
						<div style="width: 136px; height: 135px; background-image: url('img/clientsBlaychon.png');"></div>
					</div>
					<!--div id="imgClient19" class="imgClient"><img src="img/clientsImg.png"></div-->
					<div id="nameClient18" class="nameClient"><h5>Blaychon</h5><br /></div>
				</div>
				
				<!-- Scrum IT -->
				<div id="client02" class="client">
					<div id="imgClient01" class="imgClient">
						<div style="width: 136px; height: 135px; background-image: url(img/clientsScrumIT.png);"></div>
					</div>
					<!--div id="imgClient02" class="imgClient"><img src="img/clientsScrumIT.png"></div-->
					<div id="nameClient02" class="nameClient"><h5>Scrum IT</h5><br /></div>
				</div>

				<!-- Rokk3rLabs -->
				<div id="client03" class="client">
					<div id="imgClient01" class="imgClient">
						<div style="width: 136px; height: 135px; background-image: url(img/clientsRokk3.png);"></div>
					</div>
					<!--div id="imgClient03" class="imgClient"><img src="img/clientsRokk3.png"></div-->
					<div id="nameClient03" class="nameClient"><h5>Rokk3rLabs</h5><br /></div>
				</div>

				<!----------------- END TITLES LINE 5 --------------------->

				<!----------------- DESCRIPTIONS LINE 5 --------------------->
				<!-- 17 Paradigm Web Architects -->
				<div id="hideClient17" class="hideClient">
					<div id="lineUpClient13" class="lineUpClient"></div>
					<div id="closeClient17" class="closeClient"></div>
					<div id="infoClient17" class="infoClient">
						<p>“This was an incredibly challenging project and they were the fourth resource we had engaged. They were also the first to actually complete the work. There were some communication challenges as far as us having to remove idioms from our project documents other than that their English was quite excellent. All points of contact on their end were very easy to work with. 
						<br>We will be engaging them again in the future.”</p></div>
					<div id="lineDownClient17" class="lineDownClinet"></div>
				</div>
				<!-- 18 Blaychon -->
				<div id="hideClient18" class="hideClient">
				<!--el id ese es por la rallita blanca de arriba-->
					<div id="lineUpClient14" class="lineUpClient"></div>
					<div id="closeClient18" class="closeClient"></div>
					<div id="infoClient18" class="infoClient">
						<p>“CodigoDelSur has been great to work with. Very pleased with their skills and the quality of their work. We would definitely work with them again in the future.”</p>
					</div>
					<div id="lineDownClient14" class="lineDownClinet"></div>
				</div>
				
				<!-- 02 Scrum IT -->
				<div id="hideClient02" class="hideClient">
					<div id="lineUpClient03" class="lineUpClient"></div>
					<div id="closeClient02" class="closeClient"></div>
					<div id="infoClient02" class="infoClient">
						<p>“Team was excellent, communicated well with good tools. The development progressed smoothly, with a continuously changing backlog that allowed us to respond to our customers.”
						<br><br>“This has been a complex project development that is a foundation of other project and Codigo Del Sur are the team that did that and will do the other work.”</p>
					</div>
					<div id="lineDownClient02" class="lineDownClinet"></div>
				</div>

				<!-- 03 Rokk3rLabs -->
				<div id="hideClient03" class="hideClient">
					<div id="lineUpClient04" class="lineUpClient"></div>
					<div id="closeClient03" class="closeClient"></div>
					<div id="infoClient03" class="infoClient"><p>“Very professional team!”</p></div>
					<div id="lineDownClient03" class="lineDownClinet"></div>
				</div>


				<!----------------- END DESCRIPTIONS LINE 5 --------------------->

				<!-- linea 6 -->
				<!----------------- TITLES LINE 6 --------------------->
				<!-- 21 Dropprops -->
				<div id="client21" class="client">
					<div id="imgClient01" class="imgClient">
						<!--no tenemos la imagen recortada circular lo hice por css por eso añado la clase imageCircular y cambio las medidas del css porque sino el borde blanco hace que la imagen se vea mas grande-->
						<div class="imageCircular" style="width: 122px; height: 122px; background-image: url(img/clientsDropprops.png);"></div>
					</div>						
					<div id="nameClient21" class="nameClient"><h5>Dropprops</h5><br></div>
				</div>					

				<!-- DreamScape Multimedia -->
				<div id="client04" class="client">
					<div id="imgClient01" class="imgClient">
						<div style="width: 140px; height: 140px; background-image: url(img/clientsDream.png);"></div>
					</div>
					<!--div id="imgClient04" class="imgClient"><img src="img/clientsDream.png"></div-->
					<div id="nameClient04" class="nameClient"><h5>DreamScape Multimedia</h5></div>
				</div>
				
				<!--Carrejun -->
				<div id="client27" class="client">
					<div id="imgClient01" class="imgClient">
						
						<div style="width: 136px; height: 135px; background-image: url(img/Carrejunlogo.png);"></div>
					</div>
					<!--div id="imgClient04" class="imgClient"><img src="img/Carrejunlogo.png"></div-->
					<div id="nameClient27" class="nameClient"><h5>Carrejun</h5><br></div>
				</div>

				<!----------------- END TITLES LINE 6 ---------------------->

				<!----------------- DESCRIPTIONS LINE 6 ---------------------->
				<!-- dropprops -->
				<div id="hideClient21" class="hideClient">
					<div id="lineUpClient13" class="lineUpClient"></div>
					<div id="closeClient21" class="closeClient"></div>
					<div id="infoClient21" class="infoClient">
						<p>“As many of you know, choosing an outsourcing partner is a difficult process and in many cases, does not end well. My experience with Codigodelsur has been amazing. I had previously tried to work with another company found on eLance to take a Sencha touch web app and add Phone Gap functionality like FB login, camera integration, etc. They failed miserably and cost us a lot of time in the process. Everyone at Codigodelsur is professional, on time, on budget and they are easy to communicate with via Skype. I cannot give a higher recommendation for your iOS development.” Kevin Growney</p>
					</div>
					<div id="lineDownClient14" class="lineDownClinet"></div>
				</div>

				<!-- 04 DreamScape Multimedia -->
				<div id="hideClient04" class="hideClient">
					<div id="lineUpClient02" class="lineUpClient"></div>
					<div id="closeClient04" class="closeClient"></div>
					<div id="infoClient04" class="infoClient">
						<p>“CodigoDelSur has put up with us for a while now. More often than not, they do solid work. I'm comfortable giving them a 5-star rating. Recommended.”
						<br><br>“We continue to receive solid work from CodigoDelSur. Thank you!”
						<br><br>“The team at CodigoDelSur do great work. Highly recommended”
						<br><br>“The customer has been pleased! Good work!”
						<br><br>“Brilliant work. Thank you.”</p>
					</div>
					<div id="lineDownClient04" class="lineDownClinet"></div>
				</div>
				
				<!-- Carrejun -->
				<div id="hideClient27" class="hideClient">
					<div id="lineUpClient03" class="lineUpClient"></div>
					<div id="closeClient27" class="closeClient"></div>
					<div id="infoClient27" class="infoClient">
						<p>"Working with Codigo: Weekly discussions were always very professional and responsive to customer requirements. All of the team were a pleasure to work with." Robert Childs</p>
					</div>
					<div id="lineDownClient27" class="lineDownClinet"></div>
				</div>

				<!----------------- END DESCRIPTIONS LINE 6 ---------------------->
			</div>
			<div class="max-900">
				<div id="client450" class="content450" >
					<a onClick="GoBackClientItem()" class="btnleftPort"></a>
					<a class="btnrightPort" onClick="GoNextClientItem()"></a>
					<div>
						<ul class="TitlePortfolio" id="clientItems">
							<li id="c1">Kindara</li>
							<li id="c2">Seacoast.co</li>
							<li id="c3">You+</li>	
							<li id="c4">RadU</li>													
							<li id="c5">Storyly</li>
							<li id="c6">Webátix</li>
							<li id="c7">BiznessApps</li>
							<li id="c8">Appracadabra</li>										
							<li id="c9">Leapgo</li>
							<li id="c10">Zoom International</li>
							<li id="c11">StrongerLabs</li>
							<li id="c12">BHA Financial Solutions</li>										
							<li id="c13">Cortexa</li>
							<li id="c14">IonGrid Inc.</li>
							<li id="c15">jGraph</li>
							<li id="c16">Auerbach Group</li>
							<li id="c17">Paradigm Web Architects</li>
							<li id="c18">Blaychon</li>
							<li id="c19">Scrum IT</li>
							<li id="c20">Rokk3rLabs</li>
							<li id="c21">Dropprops</li>
							<li id="c22">DreamScape</li>	
							<li id="c23">Carrejun</li>		
														
							
						</ul>
					</div>
				</div>
				<div id="ClientDesc" onriz  class="contInfoDesc450">
					<ul id="infoClientDesc" class="InfoPortfolio">
					<!---->
						<li id="cli_cont1">
							<img class="porfImg imageCircular" src="Img/kindaraC.png"/>
							<p>"I give you guys a solid 4.5/5 - I find everyone at CDS competent and trustworthy and easy to work with." William Sacks</p>
						</li>
						<!-- para movile solo se carga el primer cliente, los otros se traen a demanda por ajax con el slider-->
					</ul>
				</div>	
			</div>
		</section>
    </div>
    <!-- 4to triangulo -->
    <div class="triangulo">
        <img src="img/green02.png" />
    </div>
    <!-- Fin -->
	<?php include("../footer.html"); ?>
</body>
</html>		