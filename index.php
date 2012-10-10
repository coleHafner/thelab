<html>

    <head>

        <title>The Lab - Fixed Scroller</title>
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
	<link rel="icon" link="image/png" href="favicon.ico" />
        <script> google.load("jquery", "1.7.1"); </script>
        <script type="text/javascript" src="/js/underscore.js"></script>
	<script type="text/javascript" src="/js/backbone.js"></script>

        <script>
            $(function() {
		
		//controller class
		var AppRouter = Backbone.Router.extend({
		    routes: {
			'post/:id' : 'post',
                        '*anything_else' : 'defaultRoute'
		    },
		  
		    post: function(id) {
			alert('posting #' + id);
		    },
                    
                    defaultRoute: function(vars) {
                        alert('default: ' + vars);
                    }
		});
	       
                //init router
                var router = new AppRouter;
                Backbone.history.start();
                
                
                
            });
	    
        </script>

        <style type="text/css">
        </style>

    </head>

    <body>
	<a href="#post/12">Go to post</a>
    </body>

</html>
