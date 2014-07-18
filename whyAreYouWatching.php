<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <?php include("head.php"); ?>
</head>
<body>
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
	<div id="topImageWrapper">
		<div id="topImageProject">
			<div id="groupProjectImage">
				<img src="img/project/wayw/wayw-topImg-1.png">
				<img src="img/project/wayw/wayw-topImg-2.png">
				<img src="img/project/wayw/wayw-topImg-3.png">
			</div>
		</div>
	</div>
	<ul class="grid projectTitle" id="projectDescription">
		<h3>Why are you watching</h3> 
		
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
		<div>
			<p>

			</p>
		</div>
		<video class="video" controls>
			<!-- MP4 must be first for iPad! -->
			<source src="video/wayw/wayw.appleuniversal.mp4" type="video/mp4" />
			<source src="video/wayw/wayw_wondershare.webm" type="video/webm" />
		</video>
	</ul>
</div>
	<!-- Scripts -->
	<script src="js/jquery.parallax.js"></script>
    <script src="js/modernizr.custom.js"></script>
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
		$(".galleryStyle").delay(1000).animate({
		  		marginTop: "-=800"
		  	}, 500, function(){
		  		$(this).animate({ marginTop: "40px" }, 100 );
		  		$(this).animate({ marginTop: "-=40px" }, 100 );
		  		$(this).animate({ marginTop: "10px" }, 100 );
		  		$(this).animate({ marginTop: "-=10px" }, 100 );
		  		$("html").css("overflow", "auto");
		  });
		var myRandomColor = 'rgba(' + (Math.floor((256-199)*Math.random()) + 200) + ',' + (Math.floor((256-199)*Math.random()) + 200) + ',' + (Math.floor((256-199)*Math.random()) + 200) + ',.65)';
		$(".projectTitle figcaption").css("visibility", "visible");
		$('.grid li').hover(function(){
            $(this).siblings().addClass('fadeOutImages');
        }, function(){
            $(this).siblings().removeClass('fadeOutImages');
        });

		$(".spacer").css("background-color", myRandomColor);

		$(".grid li, #navigation a").mouseover(function() {
			$(this).css("background-color",myRandomColor);
			$(this).find("figcaption").css("visibility", "visible").animate({ marginTop: "40px"}, 200 );
			$(".grid li").not(this).fadeOut('slow', .5);

		}).mouseout(function() {
			$(this).css("background-color","#f6f6f6");
			$(this).find("figcaption").css("visibility", "hidden").animate({ marginTop: "40px"}, 50 );
		});
		$("#meImageStart").css("marginTop", "500px");
	});
</script>
  </body>
</html>
