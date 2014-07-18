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
						<img src="img/project/vertigo/vertigo-topImg-2.jpg">
						<img src="img/project/vertigo/vertigo-topImg-3.jpg">
						<img src="img/project/vertigo/vertigo-topImg-4.jpg">
						<img src="img/project/vertigo/vertigo-topImg-5.jpg">
						<img src="img/project/vertigo/vertigo-topImg-6.jpg">
						<img src="img/project/vertigo/vertigo-topImg-7.jpg">
						<img src="img/project/vertigo/vertigo-topImg-8.jpg">
						<img src="img/project/vertigo/vertigo-topImg-9.jpg">
					</div>
				</div>
			</div>
			<ul class="grid projectTitle" id="projectDescription">
				<h3>Vertigo</h3> 
				
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
				<video>		<!-- MP4 must be first for iPad! -->
					<source src="video/vertigo/wayw.appleuniversal.mp4" type="video/mp4" />
					<source src="video/vertigo/wayw_wondershare.webm" type="video/webm" />
				</video>
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
		$(".galleryStyle").delay(1000).animate({
		  		marginTop: "-=800"
		  	}, 500, function(){
		  		$(this).animate({ marginTop: "40px" }, 100 );
		  		$(this).animate({ marginTop: "-=40px" }, 100 );
		  		$(this).animate({ marginTop: "10px" }, 100 );
		  		$(this).animate({ marginTop: "-=10px" }, 100 );
		  		$("html").css("overflow", "auto")
		  	// $(".grid li").fadeTo(1, 400);
		  	// $(".grid li").delay( 2000 ).css("display", "inline-block");
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

	var queries = [
	{
		context: 'mobile',
		match: function() {
			console.log('Mobile callback. Maybe hook up some tel: numbers?');
            // Your mobile specific logic can go here. 
        },
        unmatch: function() {
            // We're leaving mobile.    
        }
    },
    {
    	context: 'skinny',
    	match: function() {
    		console.log('skinny callback! Swap the class on the body element.');
            // Your tablet specific logic can go here.
        },
        unmatch: function() {
        	console.log('leaving skinny context!');
        }

    },
    {
    	context: 'wide-screen',
    	match: function() {
    		console.log('wide-screen callback woohoo! Load some heavy desktop JS badddness.');
            // your desktop specific logic can go here.
        }
    }
    ];
// Go!
MQ.init(queries);

</script>
<script>
var my_query = MQ.addQuery({
    context: ['skinny','desktop'],
    call_for_each_context: false, 
    match: function() { 
        console.log( 'second skinny callback!' )
    }
});
</script>
	</body>
	</html>
