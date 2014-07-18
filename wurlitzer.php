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
			<!-- <ul id="language">
				<li>de</li>
				<li>//</li>
				<li>en</li>
			</ul> -->
			<div id="topImageWrapper">
				<div id="topImageProject">
					<div id="groupProjectImage">
						<img src="img/project/recent/141506-TheWurlitzer-explosion-halb.png">
						<img src="img/project/recent/141506-TheWurlitzer-konstruktion-1.png">
						<img src="img/project/recent/141506-TheWurlitzer-konstruktion-1beschriftet.png">
						<img src="img/project/recent/141506-TheWurlitzer-konstruktion-top.png">
						<img src="img/project/recent/141506-TheWurlitzer-konstruktion-top2.png">
						<img src="img/project/recent/theW-zusammenstecken.png">
					</div>
				</div>
			</div>
			<ul class="grid projectTitle" id="projectDescription">
				<h3>Der Wurlitzer</h3> 

				<div class="textSet deutschText">
					<p> 
						Diese Installation ist eine interaktive Jukebox. Wenn du es schaffst die Frequenz zu singen, die der Schrank dir vorgibt,
						dann bekommst du eine Melodie vorgespielt, die sich nach jedem Level verändert. Jeder Spieler kann also Einfluß auf die Melodie,
						die der Wurlitzer wiedergeben soll, nehmen.

						<br>
						<br>

						Der Wurlitzer befindet sich gerade im Aufbau und wird voraussichtlich Anfang Juli fertiggestellt.
					</p>
				</div>
			</ul>
		</div>

		<div class="grid"><h3>Class D Amplifier</h3></div>
		<div id="topImageWrapper" style="margin-top: -100px;">
			<div id="middleImageProject">
				<div id="groupProjectMiddleImage">
					<img src="img/project/recent/classD-amp.jpg" style="width: 50%;">
				</div>
			</div>
		</div>
		<div class="textSet deutschText">
			<p> 
				Diese Installation ist eine interaktive Jukebox. Wenn du es schaffst die Frequenz zu singen, die der Schrank dir vorgibt,
				dann bekommst du eine Melodie vorgespielt, die sich nach jedem Level verändert. Jeder Spieler kann also Einfluß auf die Melodie,
				die der Wurlitzer wiedergeben soll, nehmen.

				<br>
				<br>

				Der Wurlitzer befindet sich gerade im Aufbau und wird voraussichtlich Anfang Juli fertiggestellt.
			</p>
		</div>
		<!-- Scripts -->
		<script src="js/jquery.parallax.js"></script>
		<script src="js/modernizr.custom.js"></script>
		<script>
	// Picture element HTML5 shiv
	document.createElement( "picture" );
	</script>
	<script src="js/picturefill.js" async></script>
	<script>
	$('#logo').parallax();
	$( document ).ready(function() {
		var myRandomColor = 'rgba(' + (Math.floor((256-199)*Math.random()) + 200) + ',' + (Math.floor((256-199)*Math.random()) + 200) + ',' + (Math.floor((256-199)*Math.random()) + 200) + ',.65)';

		$(".spacer").css("background-color", myRandomColor);

		$(".grid li, #navigation a").mouseover(function() {
			$(this).css("background-color",myRandomColor);
		}).mouseout(function() {
			$(this).css("background-color","#f6f6f6");
		});
	});
	</script>
</body>
</html>
