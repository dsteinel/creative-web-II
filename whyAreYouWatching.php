<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Dimitri Steinel</title>
        <meta name="description" content="Dimitri Steinel, Berlin based interaction artist  " />
        <meta name="keywords" content="Interaction Design, Interactive, Installation, web design" />
        <meta name="author" content="Dimitri Steinel" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=1400">
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta property="ga:property_id" content="UA-39461765-1"/>
        <meta property="og:title" content="Dimitri Steinel | Interaction Design" />
        <meta property="og:site_name" content="Dimitri Steinel" />
        <meta property="og:description" content="This is my website - enjoy it!" />
        <meta property="og:url" content="http://dsteinel.com" />
        <meta property="og:type" content="website" />
        <meta property="og:locale" content="en_us" />
        <link rel="shortcut icon" href="img/logo/favicon/favicon.png" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="assets/css/style.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
        <script src="js/jquery-1.10.2.min.js"></script>
      </script>
    </head>
    <body>
<div id="container">
	<?php include("navigation.php"); ?>
	<div class="spacer"></div>
	<ul id="logo" class="logo">
		<li class="layer" data-depth="2.00"><img src="img/logo/V1/layer1.png"></li>
		<li class="layer" data-depth="1.50"><img src="img/logo/V1/layer2.png"></li>
		<li class="layer" data-depth="1.00"><img src="img/logo/V1/layer3.png"></li>
		<li class="layer" data-depth="0.50"><img src="img/logo/V1/layer4.png"></li>
		<li class="layer" data-depth="0.00"><img src="img/logo/V1/layer5.png"></li>
	</ul>
	<ul id="language">
		<li>de</li>
		<li>//</li>
		<li>en</li>
	</ul>
	<ul class="grid projectTitle">
		<h3>Why are you watching</h3> 
		<video class="video" controls>
			<!-- MP4 must be first for iPad! -->
			<source src="video/wayw/wayw.appleuniversal.mp4" type="video/mp4" />
			<source src="video/wayw/wayw_wondershare.webm" type="video/webm" />
		</video>
		<div class="textSet deutschText">
			<p> 
				Soll dem Besucher die Sinnlosigkeit des Gaffens vor Augen f&uuml;hren. Die meisten Menschen tun es und denken nicht weiter dar&uuml;ber nach. Warum schauen Menschen Promi-Sendungen, warum kaufen sie sich Promi-Zeitschriften und warum ist die t&auml;gliche Zeitung voll von Schaulustigen-News? WhyAreYou_Watching?! soll das Interesse des Besuchers wecken und ihm anders, als die hei&szlig;geliebten Promis, alles offenlegen wo nichts zu sehen ist. Keine Mauern die umgangen werden m&uuml;ssen, keine heimlichen Fotos die geschossen werden und keine Tuscheleien &uuml;ber Sachen von denen man geh&ouml;rt hat das sie passiert sind. Hier wird einem der Blick ins Nichts offengelegt. Egal wie sich der Besucher bewegt, WhyAreYou_Watching?! zeigt ihm genau das, was die Promis versuchen zu verstecken, das intime Innenleben. Was der Betrachter sieht ist inhaltlich das Selbe, was er auch bei seinen Promimagazinen sieht: Nichts. 

				Auch Maschinen haben eine Schamgrenze. Kommt man der Maschine zu nah, dann verschlie&szlig;t sie all ihre Klappen!

				Why are you watching kann zurzeit in der btk-fh Berlin besichtigt werden!

				<br>
				<br>
				#Musik:

				Fall walk run - What is love
			</p>
		</div>
		<div class="textSet englishText">
			<p> 
				THIS IS eNGLICH
				Soll dem Besucher die Sinnlosigkeit des Gaffens vor Augen f&uuml;hren. Die meisten Menschen tun es und denken nicht weiter dar&uuml;ber nach. Warum schauen Menschen Promi-Sendungen, warum kaufen sie sich Promi-Zeitschriften und warum ist die t&auml;gliche Zeitung voll von Schaulustigen-News? WhyAreYou_Watching?! soll das Interesse des Besuchers wecken und ihm anders, als die hei&szlig;geliebten Promis, alles offenlegen wo nichts zu sehen ist. Keine Mauern die umgangen werden m&uuml;ssen, keine heimlichen Fotos die geschossen werden und keine Tuscheleien &uuml;ber Sachen von denen man geh&ouml;rt hat das sie passiert sind. Hier wird einem der Blick ins Nichts offengelegt. Egal wie sich der Besucher bewegt, WhyAreYou_Watching?! zeigt ihm genau das, was die Promis versuchen zu verstecken, das intime Innenleben. Was der Betrachter sieht ist inhaltlich das Selbe, was er auch bei seinen Promimagazinen sieht: Nichts. 

				Auch Maschinen haben eine Schamgrenze. Kommt man der Maschine zu nah, dann verschlie&szlig;t sie all ihre Klappen!

				Why are you watching kann zurzeit in der btk-fh Berlin besichtigt werden!

				<br>
				<br>
				#Musik:

				Fall walk run - What is love
			</p>
		</div>
	</ul>
</div>
	<!-- Scripts -->
	<script src="js/jquery.parallax.js"></script>
    <script src="js/PxLoader.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <script type="text/javascript" src="js/raphael-min.js" ></script>
	<script type="text/javascript" src="js/randomColor.js" ></script>
    <script>
    $("#language li").click(function(){
    	$(".deutschText, .englishText").toggle(200);
    })
    $(window).scroll(function(e){
		parallax();
	 $('.photoset').each(function () {
	        if (($(this).offset().top - $(window).scrollTop()) < 100) {
	        	$(this).stop().fadeTo(200, 0);
	        } else {
	            $(this).stop().fadeTo('fast', 1);
	        }
	    });
	});
	$('#logo').parallax();

	$( document ).ready(function() {
		var myRandomColor = randomColor();
		$(".spacer").css("background-color", myRandomColor);
		$(".spacer").css("opacity", 0.1);
		$("div#navigation a").mouseover(function() {
			$(this).css("background-color",myRandomColor);
			$(this).css("opacity", 0.1);

		}).mouseout(function() {
			$(this).css("background-color","#f6f6f6");
			$(this).css("opacity", 1);
		});
		$(".grid figcaption").css("background-color", myRandomColor);
		$(".grid figcaption").css("opacity", 0.9);
	});
</script>
  </body>
</html>
