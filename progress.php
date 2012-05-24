<html>

    <head>
        <title>Progress Bar Mess-around</title>

        <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function(){

                 var steps = ['step-1', 'connector-1-2', 'step-2', 'connector-2-3', 'step-3', 'connector-3-4', 'step-4'];

                $('#trigger-highlight').click(function(){
                    var step_num = parseInt($('#step-num').val());
                    var max = (step_num > 1) ? step_num + (step_num - 2) : 0;
                    //alert(step_num + ' - ' + max);

                    for(i = 0; i < steps.length; i++) {
                        var target = $('#' + steps[i])
                        target.delay(500).animate({backgroundColor:'#9c3290'}, 1000);
                        if(i == max) {
                            break;
                        }
                    }

                });

                $('#reset').click(function(){
                    $('#meter div').css('backgroundColor', '#ffffff');
                });
            });
        </script>

        <style type="text/css">

            .connector, .step {
                border:1px solid #000;
            }

            .step{
                position:relative;
                width:55px;
                height:55px;
                border-radius:55px;
                line-height:55px;
                font-size:25px;
                font-weight:bold;
                color:#000;
                text-align:center;
                float:left;
                z-index:1;
            }

            .connector {
                position:relative;
                top:22px;
                height:10px;
                float:left;
                border-style: solid hidden solid hidden;
                width:75px;
                background-color:#fff;
                z-index:0;
            }

            .step-bg {
                background-color:#9c3290;
            }

            .connector-overlap {
                left:-3px;
            }

            .clear {
                clear:both;
            }

        </style>

    </head>

    <body>

        <div id="meter">
            <div id="step-1" class="step">1</div>
            <div id="connector-1-2" class="connector step-overlap"></div>
            <div id="step-2" class="step step-overlap">2</div>
            <div id="connector-2-3" class="connector step-overlap"></div>
            <div id="step-3" class="step step-overlap">3</div>
            <div id="connector-3-4" class="connector step-overlap"></div>
            <div id="step-4" class="step step-overlap">4</div>
            <div class="clear"></div>
        </div>

        <br/><br/>
        <input type="text" style="width:50px;" id="step-num" />
        <input type="button" id="trigger-highlight" value="Go" />
        <input type="button" id="reset" value="Reset" />

    </body>
</html>