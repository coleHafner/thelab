<?php require_once('input.php'); ?>

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

	<!-- Included CSS Files (Uncompressed) -->
	<!--
	<link rel="stylesheet" href="stylesheets/foundation.css">
	-->

	<!-- Included CSS Files (Compressed) -->
	<link rel="stylesheet" href="stylesheets/foundation.min.css">
	<link rel="stylesheet" href="stylesheets/app.css">

	<script src="javascripts/modernizr.foundation.js"></script>

	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
	  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<style>
		ul.tabs-content h4, .goal-set h4 {
			font-size: 13px;
			color:#000;
		}
		
		ul.tabs-content h4 {
			margin-left:12px;
			display:block;
			clear:both;
			marigin-top:10px;
		}
		
		ul.tabs-content li ul {
			list-style-type: disc;
		}
		
		.goal-tabs{
			min-height:440px;
		}
		
		.border {
			border: solid 1px #e6e6e6;
			border-style:hidden;
		}
		
		.top-left-border {
			border-top-style: solid;
			border-left-style: solid;
		}
		
		#display-tabs {
			display:block;
		}
		
		#display-columns {
			display:none;
		}
		
		.panel span {
			display:block;
			font-size:12px;
			color:#aaa;
			padding-left:10px;
			padding-top:5px;
		}
		
		@media screen and (max-width:767px) {
			.border {
				border-style: hidden;
			}
		}
		
		@media screen and (max-width:860px) {
			#display-tabs {
				display:none;
			}
			
			#display-columns {
				display:block;
			}
		}
		
	</style>

</head>
<body>
	
	<div class="row">
		<div class="twelve columns">
			<h1><?php echo $title; ?></h1>
		</div>
	</div>
	
<!-- goals layout -->
<div id="display-tabs">
	<div class="row goal-tabs">
		<div class="twelve column">
			
			<dl class="tabs">
<?php $i = 1; foreach($input as $category => $collection) : ?>
				<dd <?php echo $i == 1 ? 'class="active"' : ''; ?>>
					<a href="#goal<?php echo $i; ?>">
						<?php echo $category; ?>
					</a>
				</dd>
<?php $i++; endforeach; ?>
			</dl>
			
			<ul class="tabs-content">
<?php $i = 1; foreach($input as $category => $collection) : ?>
				<li <?php echo $i == 1 ? 'class="active"' : '';?> id="goal<?php echo $i; ?>Tab">
				
	<?php foreach($collection['sets'] as $set) : ?>
					
		<?php echo $set['header'] ? '<h4>' . $set['header'] . '</h4>' : ''; ?>
			
					<ul>
		<?php foreach($set['items'] as $item => $sub_items) : ?>
						<li><?php echo $item; ?>
					
			<?php if($sub_items) :  ?>
							<ul>
				<?php foreach($sub_items as $item) :  ?>
								<li><?php echo $item; ?></li>
				<?php endforeach;?>
							</ul>
			<?php endif; ?>
					
						</li>
			
		<?php endforeach; ?>
					</ul>
	<?php endforeach; ?>
				</li>
<?php $i++; endforeach; ?>
			</ul>
		</div>
	</div>
</div>

<!-- column layout -->
<div id="display-columns">
	
<?php foreach($input as $category => $collection) : ?>
	<div class="row">
		<div class="three columns panel">
			<?php echo $category; ?>
			<?php echo $collection['sub_header'] ? '<span>' . $collection['sub_header'] . '</span>' : ''; ?>
		</div>
		<div class="nine columns border top-left-border goal-set">
			
	<?php foreach($collection['sets'] as $set) : ?>
		<?php echo $set['header'] ? '<h4>' . $set['header'] . '</h4>' : ''; ?>
			
			<ul>
		<?php foreach($set['items'] as $item => $sub_items) : ?>
				<li><?php echo $item; ?>
					
			<?php if($sub_items) :  ?>
					<ul>
				<?php foreach($sub_items as $item) :  ?>
						<li><?php echo $item; ?></li>
				<?php endforeach;?>
					</ul>
			<?php endif; ?>
					
				</li>
			
		<?php endforeach; ?>
			</ul>
	<?php endforeach; ?>
		</div>
	</div>
<?php endforeach; ?>
</div>
	<!-- Included JS Files (Uncompressed) -->
	<!--
	
	<script src="javascripts/jquery.js"></script>
	
	<script src="javascripts/jquery.foundation.mediaQueryToggle.js"></script>
	
	<script src="javascripts/jquery.foundation.forms.js"></script>
	
	<script src="javascripts/jquery.foundation.reveal.js"></script>
	
	<script src="javascripts/jquery.foundation.orbit.js"></script>
	
	<script src="javascripts/jquery.foundation.navigation.js"></script>
	
	<script src="javascripts/jquery.foundation.buttons.js"></script>
	
	<script src="javascripts/jquery.foundation.tabs.js"></script>
	
	<script src="javascripts/jquery.foundation.tooltips.js"></script>
	
	<script src="javascripts/jquery.foundation.accordion.js"></script>
	
	<script src="javascripts/jquery.placeholder.js"></script>
	
	<script src="javascripts/jquery.foundation.alerts.js"></script>
	
	<script src="javascripts/jquery.foundation.topbar.js"></script>
	
	-->

	<!-- Included JS Files (Compressed) -->
	<script src="javascripts/jquery.js"></script>
	<script src="javascripts/foundation.min.js"></script>

	<!-- Initialize JS Plugins -->
	<script src="javascripts/app.js"></script>
</body>
</html>
