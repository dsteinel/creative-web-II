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
	<ul class="grid projectTitle">
		<h3>Vertigo</h3> 
		<video class="video" controls>
			<!-- MP4 must be first for iPad! -->
			<source src="video/vertigo.mp4" type="video/mp4" />
			<source src="video/vertigo.webm" type="video/webm" />
		</video>
		<div class="textSet deutschText">
			<p> 
				Das Projekt Vertigo soll, ohne dass der Besucher auf eine hohe 
				Erhebung steigen muss, das Gef&uuml;hl der H&ouml;henangst vermitteln.
				<br>
				<br>
				<strong>Warum?</strong>
				<br>
				Jeder kennt das Gef&uuml;hl von Angst, aber nicht alle das der H&ouml;henangst.
				Kann man durch die visuelle Simulation eines freien Falls, jedem
				Besucher ein H&ouml;henangstgef&uuml;hl erleben lassen? Vertigo soll dem
				Besucher den eigentlichen Stand vergessen lassen und in ihm ein
				Schwindelgef&uuml;hl erwecken.
				<br>
				<br>
				<strong>Resultat</strong>
				<br>
				Der Besucher sieht vor sich einen dunklen Raum, in dem mittig ein
				Podest mit Gel&auml;nder steht. Steigt der Besucher auf das Podest,
				erscheint das Video des freien Falls.
				<br>
				<br>
				<strong>Umsetzung</strong>
				<br>
				Das Team bestand aus 4 Personen. Das Konzept haben wir zusammen
				erarbeitet, ich habe f&uuml;r die Ausstellung die technische Umsetzung
				realisiert. Sobald der Besucher die Plattform betritt, wird er von der
				Microsoft Kinect erkannt und das Video wird abgespielt.
				Umgesetzt mit Processing.

			</p>
		</div>
	</ul>
</div>
	<!-- Scripts -->
	<script src="js/jquery.parallax.js"></script>
    <script src="js/PxLoader.js"></script>
    <script src="js/modernizr.custom.js"></script>
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
</script>
  </body>
</html>
