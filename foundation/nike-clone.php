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

	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
	  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<style>
		body {
			margin:0;
			padding:0;
			font-family:sans-serif;
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
		}
		
		#nav-offset, #nav, #nav div.holder {
			height:50px;
		}
		
		#nav div.holder {
			line-height: 50px;
			font-size:14px;
			font-weight:bold;
			text-align: center;
			text-transform: uppercase;
			border-right:1px solid #ddd;
			border-style: hidden;
		}
		
		#nav div.holder.left {
			border-right-style: solid;
		}
		
		#nav div.holder.right {
			border-left:1px solid #ddd;
		}
		
		#nav div.left {
			float:left;
		}
		
		#nav div.right {
			float:right;
		}
		
		.nav-tall {
			width:50px;
		}
		
		.nav-grande {
			width:84px;
		}
		
		@media screen and (max-width:980px) {
			
		}
	</style>

</head>
<body>
	<div id="nav">
		<div class="holder nav-grande left">[logo]</div>
		<div class="holder nav-grande left">shop</div>
		<div class="holder nav-grande left">sports</div>
		<div class="holder nav-grande left">nike-id</div>
		<div class="holder nav-grande left">nike+</div>
		<div class="holder nav-venti left" style="border:0;"> </div>
		<div class="holder nav-grande right">log in</div>
		<div class="holder nav-grande right">join</div>
		<div class="holder nav-tall right">[ic]</div>
		<div class="holder nav-tall right">[ic]</div>
		
		<div class="clear"></div>
	</div>
	
	<div id="banner" style="display:none;">
		
	</div>
	
	<div id="content">
		
	</div>
	
	<div id="footer">
		
	</div>
	
</body>
</html>