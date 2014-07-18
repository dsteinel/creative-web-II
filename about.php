
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<?php include("head.php"); ?>
</head>
<body>
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
		<div id="topImageWrapper">
			<div id="topImageProject">
				<div id="meImage"></div>
			</div>
		</div>
		<ul class="grid projectTitle" id="projectDescription">
			<h3>Dimitri Steinel</h3> 
			
			<div class="textSet deutschText">
				<p> 
					...is a Berlin based interaction designer. Likes to do some fancy arduion stuff.
				</p>
			</div>
	</ul>
</div>
	<!-- Scripts -->
	<script src="js/jquery.parallax.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <script>
		$('#logo').parallax();
		$( document ).ready(function() {
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
			}).mouseout(function() {
				$(this).css("background-color","#f6f6f6");
			});
		});
	</script>
</body>
</html>
