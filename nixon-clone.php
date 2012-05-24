<html>
   <head>

      <title>The Lab - Fixed Scroller</title>
      <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine|Jolly+Lodger|Comfortaa|Graduate|Press+Start+2P">
      <script type="text/javascript" src="https://www.google.com/jsapi"></script>
      <script> google.load("jquery", "1.7.1"); </script>
      <script type="text/javascript" src="js/waypoints.js"></script>

      <script>
	 $(function() {
	    $('#menu').waypoint(function(event, direction) {

	       var $menu = $(this);

	       if(direction == 'down') {
		  $menu.addClass('fixed');
	       }else {
		  $menu.removeClass('fixed');
	       }
	    });

	    $('#menu-button').click(function(event){

	       event.stopPropagation();
	       event.preventDefault();

	       var expanded = $(this).attr('expanded');
	       var ex_yes = '1';
	       var text_yes = 'Hide Options ^';
	       var ex_no = '0';
	       var text_no = 'Show Options';
	       var $sub = $('#menu-options');

	       if(expanded == ex_no) {
		  $sub.slideDown('fast');
		  $(this).attr('expanded', ex_yes);
		  $(this).text(text_yes);
	       }else {
		  $sub.slideUp('fast');
		  $(this).attr('expanded', ex_no);
		  $(this).text(text_no);
	       }
	    });

	    $('.filter').click(function(event){

	       event.stopPropagation();
	       event.preventDefault();

	       var $ban = $('#banner');
	       var num = $(this).attr('num');

	       if(num == '1') {
		  $ban.slideDown('slow');
	       }else {
		  $ban.slideUp('slow');
	       }
	    });
	 });
      </script>

      <style type="text/css">
	 h1, .header-text {
	    font-size:30px;
	    font-weight:bold;
	    font-family: 'Graduate';
	 }

	 h2 {
	    font-size:15px;
	    /*font-family: 'Press Start 2P';*/
	 }

	 h3 {
	    font-size:20px;
	    float:left;
	    margin-right:50px;
	    font-weight:normal;
	    font-family: 'Graduate';
	 }

	 body {
	    padding:0;
	    margin:0;
	 }

	 .page {
	    position:relative;
	    margin:auto;
	 }

	 .menu {
	    position:relative;
	    border-top:1px solid #000;
	    border-bottom:1px solid #000;
	    min-height:100px;
	    /*background-color:#fff;*/
	 }

	 .menu-button {
	    position:absolute;
	    display:block;
	    right:0px;
	    bottom:0px;
	    height:40px;
	    width:200px;
	    line-height:40px;
	    background-color:#000;
	    color:#fff;
	    font-weight:bold;
	    text-align:center;
	    text-decoration: none;
	 }

	 .menu-options {
	    position:relative;
	    height:400px;
	    width:100px;
	    display:none;
	    width:100%;
	 }

	 .menu-quick-filter-options {
	    position:absolute;
	    top:0;
	    right:0;
	    width:200px;
	    height:40px;
	 }

	 .menu-quick-filter-options a {
	    float:right;
	    margin-left:15px;
	    text-decoration: none;
	    color:#666;
	    font-size:13px;
	 }

	 .menu-padder {
	    position:relative;
	    margin-bottom:45px;
	 }

	 .banner {
	    position:relative;
	    width:100%;
	    border-bottom:1px solid #000;
	    height:300px;
	    margin-top:20px;
	    margin-bottom:20px;
	    line-height: 300px;
	    text-align: center;
	 }

	 .content {
	    position:relative;
	 }

	 .footer {
	    position:relative;
	    border-top:1px solid #000;
	    height:100px;
	 }

	 .fixed {
	    position:fixed;
	    top:0;
	    background-color:rgba(255, 255, 255, .85);
	    margin:auto;
	    z-index:1;
	    border-top:none;
	 }

	 .padder-5 {
	    padding:5px;
	 }

	 .padder-10 {
	    padding:10px;
	 }

	 .padder-30-top {
	    padding-top:30px;
	 }

	 .left {
	    position:relative;
	    float:left;
	 }

	 .right {
	    position:relative;
	    float:right;
	 }

	 .clear {
	    clear:both;
	 }

	 .nav {
	    float:right;
	    font-size:13px;
	    margin-left:20px;
	    text-decoration:none;
	    color:#000;
	 }

	 .search {
	    width:200px;
	    height:33px;
	 }

	 .search-button {
	    height:30px;
	    width:30px;
	    background-color:#ccc;
	    border:1px solid #666;
	    border-radius:3px;
	    margin-left:10px;
	 }

	 .item {
	    float:left;
	    margin-right:10px;
	    margin-bottom:15px;
	    /*background-color:#ccc;*/
	    border-radius:3px;
	    border:1px solid #666;
	    height:200px;
	    width:155px;

	 }

	 .center {
	    margin:auto;
	 }

	 .center, .page, .fixed {
	    width:1020px;
	 }


      </style>

   </head>

   <body>
      <div class="page">

	 <div class="header" id="header">
	    <div class="left">
	       <h1>HEADER AND LOGO</h1>
	       <h3>NAV 1</h3>
	       <h3>NAV 2</h3>
	       <h3>NAV 3</h3>
	       <h3>NAV 4</h3>
	       <div class="clear"></div>
	    </div>

	    <div class="right">
	       <div class="padder-30-top">
		  <a href="" class="nav">Sub Option 1</a>
		  <a href="" class="nav">Sub Option 2</a>
		  <a href="" class="nav">Sub Option 3</a>
		  <div class="clear"></div>
	       </div>

	       <div class="padder-30-top">
		  <div class="right">
		     <div class="search-button"></div>
		  </div>

		  <div class="right">
		     <input type="text" class="search" />
		  </div>
		  <div class="clear"></div>
	       </div>
	    </div>

	    <div class="clear"></div>
	 </div>

	 <div class="menu" id="menu">
	    <div class="menu-padder">
	       <div class="padder-10">
		  <h2>This is a sub menu</h2>
		  <div class="menu-options" id="menu-options">this is some extra content</div>
	       </div>
	    </div>

	    <div class="menu-quick-filter-options">
	       <div class="padder-5">
		  <a href="#" class="filter" num="3">Filter 3</a>
		  <a href="#" class="filter" num="2">Filter 2</a>
		  <a href="#" class="filter" num="1">Filter 1</a>
	       </div>
	    </div>

	    <a href="#" class="menu-button" id="menu-button" expanded="0">
	       Show Options
	    </a>
	 </div>

	 <div class="banner" id="banner">
	    <span class="header-text">This is a banner</span>
	 </div>

	 <div class="content" id="body">
	    <div class="padder-10 center">
	       <?php for ($i = 0; $i < 120; $i++) { ?>
   	       <div class="item"></div>
	       <?php } ?>
	       <div class="clear"></div>
	    </div>
	 </div>

	 <div class="footer" id="footer">
	    <div class="padder-10">
	       This is the footer for my minimalist site
	    </div>
	 </div>
      </div>

   </body>
</html>