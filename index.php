<html>

    <head>

        <title>The Lab - Fixed Scroller</title>
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <script> google.load("jquery", "1.7.1"); </script>
        <script type="text/javascript" src="js/waypoints.js"></script>

        <script>
            $(function() {
                $('#body').waypoint(function(event, direction) {

                    var $details = $('#details');

                    if(direction == 'down') {

                        $details.slideDown(250);
                        $('body').append('<div style="height:500px;">this is some new content...</div>');

                    }else {
                        $details.slideUp(250);
                    }
                });

                $('#footer').waypoint(function(event, direction) {

                });
            });
        </script>

        <style type="text/css">
            .header {
                position:relative;
                height:300px;
                border-top:1px solid #000;
                border-bottom:1px solid #000;
                margin-bottom:10px;"
            }

            .body {
                position:relative;
                height:800px;
                border-top:1px solid #000;
                border-bottom:1px solid #000;
                margin-bottom:10px;
            }

            .footer {
                position:relative;
                height:300px;
                border-top:1px solid #000;
                border-bottom:1px solid #000;
            }

            .details {
                position:fixed;
                right:0;
                top:0;
                box-shadow:3px 3px 3px rgba(0, 0, 0, .3);
                width:100%;
                height:100px;
                display:none;
            }

            .padder-10 {
                padding:10px;
            }
        </style>

    </head>

    <body>
        <div class="header" id="header">&nbsp;</div>
        <div class="body" id="body">&nbsp;</div>
        <div class="footer" id="footer">&nbsp;</div>

        <div class="details" id="details">
            <div class="padder-10">
                These are the details...
            </div>
        </div>
    </body>

</html>
