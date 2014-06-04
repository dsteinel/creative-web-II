
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
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
        <meta name="viewport" content="width=1400">
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta property="ga:property_id" content="UA-39461765-1"/>
        <meta property="og:title" content="Dimitri Steinel | Interaction Design" />
        <meta property="og:site_name" content="Dimitri Steinel" />
        <meta property="og:description" content="This is my website - enjoy it!" />
        <meta property="og:url" content="http://dsteinel.com" />
        <meta property="og:type" content="website" />
        <meta property="og:locale" content="en_us" />
        <link rel="shortcut icon" href="favicon.ico" />
        
        <link href="//fonts.googleapis.com/css?family=Archivo+Narrow:400italic,400,700italic,700" rel="stylesheet" type="text/css">


<!--         <link rel="stylesheet" href="css/bootstrap.css"> -->
        <link rel="stylesheet" href="css/fonts.css">
        <link rel="stylesheet" href="css/style.css">
        
        <link href='http://fonts.googleapis.com/css?family=Fjalla+One|Archivo+Narrow:400,700' rel='stylesheet' type='text/css'>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<!--
        <script type="text/javascript">
          if(navigator.userAgent.match(/iPhone/i)) {
            window.location = "http://thekingsofsummermovie.com/m";
          }
-->
        </script>

        
        
    </head>
    <body>

<div id="container">
	
	<?php include("navigation.php"); ?>
	
	<ul id="scene" class="scene">
		<li class="layer" data-depth="2.00"><img src="img/rectangle/layer1.png"></li>
		<li class="layer" data-depth="1.50"><img src="img/rectangle/layer2.png"></li>
		<li class="layer" data-depth="1.00"><img src="img/rectangle/layer3.png"></li>
		<li class="layer" data-depth="0.50"><img src="img/rectangle/layer4.png"></li>
		<li class="layer" data-depth="0.00"><img src="img/rectangle/layer5.png"></li>
		<li class="layer" data-depth="-0.50"><img src="img/rectangle/layer6.png"></li>
	</ul>
	
	<div id="fish" class="fish"><img src="img/fish-upside.png"></div>
	

</div>


	
	<div id="bigImage">
		<img class="bigImage" src="img/me/me.png" />
	</div>
		<p id="myText">
		Ich bin Dimitri Steinel.
Ich studiere Interaction-Design an der Berliner Technischen Kunsthochschule im 5. Semester. Meine Projekte zeichnen sich oftmals dadurch aus, dass sie ein sehr genau durchdachtes und auf den Nutzer zugeschnittenes Konzept besitzen. Durch meine Freelancetätigkeiten habe ich das professionelle Arbeiten, vorallem mit Fireworks und Photoshop, erlernt. Allgemein habe ich sehr gute Programmkenntnisse in der Adobe Creative Suite (Fireworks, Illustrator, InDesign, Photoshop, AfterEffects, Premiere Pro). Durch meine 1 jährige Fotoassistenz bei Ralph Geiling habe ich sehr gute Kenntnisse im Umgang mit digitaler Fotografie, Bearbeitung und Lichttechnik. 

Außerdem behersche ich folgende Programmiersprachen: VVVV, Html, CSS, Javascript/jQuery, Processing, Arduino, Isadora und PHP. 
	</p>
	<!-- Scripts -->
	<script src="js/jquery.parallax.js"></script>
        <script src="js/PxLoader.js"></script>
        <script src="js/modernizr.js"></script>
        	<!-- Scripts -->
	<script src="js/jquery.parallax.js"></script>
        <script src="js/PxLoader.js"></script>
        <script src="js/modernizr.js"></script>
        <script>
        $(window).scroll(function(e){
			parallax();
		    
			if ($(this).scrollTop() > 100) {
		        console.log('there');
		        $( "#bigImage" ).fadeTo(200, 0.5);
		    }
		    if ($(this).scrollTop() < 100) {
		        console.log('there');
		        $( "#bigImage" ).fadeIn();
		    }
		
		
		});
		
		function parallax(){
		  var scrolled = $(window).scrollTop();
		}
	// Yep, that's it!
	$('#scene').parallax();

	</script>


   <!-- MAIN FRAMEWORK -->
    <script data-main="scripts/preloader" src="scripts/libs/vendor/requirejs/require.js"></script>
    <!-- END MAIN FRAMEWORK -->

  </body>
</html>