<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />

	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width" />
	
	<title>Welcome to Foundation</title>
	<link rel="stylesheet" href="stylesheets/foundation.min.css">
	<link rel="stylesheet" href="stylesheets/app.css">
	
	<script src="javascripts/modernizr.foundation.js"></script>
	<script src="javascripts/jquery.js"></script>
	
	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
	  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<style>
		body {
			margin:0;
			padding:0;
			font-family:sans-serif;
			background-color:#fff;
		}
		
		.clear {
			clear:both;
		}
		
		#nav {
			position:absolute;
			top:0px;
			left:0px;
			width:100%;
			background-color:#F2F2F2;
			box-shadow: 2px 2px 10px 0 rgba(0,0,0,.3);
			z-index:1;
			min-width: 793px;
		}
		
		#nav-offset, #nav, #nav div.holder {
			height:50px;
		}
		
		#nav div.holder, #nav div.holder-no-hover {
			position:relative;
			line-height: 50px;
			font-size:14px;
			font-weight:bold;
			text-align: center;
			text-transform: uppercase;
			border:1px solid #ddd;
			border-style: hidden;
		}
		
		#nav div.holder:hover {
			color:orangered;
		}
		
		#nav div.holder.left {
			border-right-style: solid;
			float:left;
		}
		
		#nav div.holder.right {
			border-left-style:solid;
			float:right;
		}
		
		#nav div.holder-active, #nav div.bridge {
			background-image: url('images/grid.png');
			background-repeat: repeat;
			box-shadow: inset 0 0 5px rgba(0,0,0, .3);
		}
		
		#nav div.bridge {
			position:absolute;
			width:81px;
			height:14px;
			left:1px;
			bottom:-9px;
			display:none;
			border:0;
			box-shadow:none;
		}
		
		#nav .nav-tall {
			width:50px;
		}
		
		#nav .nav-grande {
			width:84px;
		}
		
		#banner {
			position:absolute;
			background-image: url('images/grid.png');
			background-repeat: repeat;
			z-index:0;
			display:none;
			top:50px;
			box-shadow: 1px 1px 10px 0 rgba(0,0,0,.3);
			
		}
		
		#banner.full {
			left:0px;
			width:100%;
			height:150px;
		}
		
		#banner.small-right {
			right:0px;
			width:200px;
			height:225px;
		}
		
		#search {
			min-width:100px;
		}
		
		.padder-5 {
			padding:5px;
		}
		
		.padder-10 {
			padding:10px;
		}
		
		@media screen and (max-width:980px) {
			
		}
	</style>
</head>
<body>
	
	<script type="text/javascript">
		$(function(){
			
			function toggleBanner(display, class_to_add) {
				var el = $('#banner');
				var speed = 200;
				el.removeClass();
				
				if(display == 'show') {
					el.addClass(class_to_add);
					el.slideDown(speed);
				}else {
					el.hide();
				}
			}//toggleBanner()
			
			$('#nav .holder')
				.mouseenter(function(){
					if(!$(this).attr('banner-id')) return false;
					$(this).addClass('holder-active');
					$(this).find('.bridge').show();
					var class_to_add = $(this).attr('banner-id') == 'login' ? 'small-right' : 'full';
					toggleBanner('show', class_to_add);
				})
				.mouseleave(function(){
					if(!$(this).attr('banner-id')) return false;
					$(this).removeClass('holder-active');
					$(this).find('.bridge').hide();
					toggleBanner('hide', '');
				});
				
			$(window).resize();
		});
		
		$(window).resize(function(){
			var offset = (7 * 84) + (2 * 50);
			var calced_width = $(window).width() - offset;
			$('#search').width(calced_width);
			
		});
	</script>
	
	
	<div id="nav">
		<div class="holder nav-grande left">[logo]</div>
		<div class="holder nav-grande left hoverable" banner-id="shop"> shop <div class="bridge"></div> </div>
		<div class="holder nav-grande left" banner-id="sports"> sports <div class="bridge"></div> </div>
		<div class="holder nav-grande left" banner-id="nike-id"> nike-id <div class="bridge"></div> </div>
		<div class="holder nav-grande left" banner-id="nike-plus"> nike+ <div class="bridge"></div> </div>
		
		<div class="holder-no-hover nav-venti left" id="search" style="border:0;">
			<div class="padder-5" style="padding-top:8px;">
				<input type="text" placeholder="search"/>
			</div>
		</div>
		
		<div class="holder nav-grande right" banner-id="login">log in<div class="bridge"></div></div>
		<div class="holder nav-grande right" banner-id="register">join<div class="bridge"></div></div>
		<div class="holder nav-tall right">[ic]</div>
		<div class="holder nav-tall right">[ic]</div>
		<div class="clear"></div>
	</div>
	
	<div id="banner">
		
	</div>
	
	<div id="content">
		
	</div>
	
	<div id="footer">
		
	</div>
	
</body>
</html>