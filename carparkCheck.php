<!DOCTYPE html>

<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Transport Me</title>
    <link rel="stylesheet" href="css/jquery.mobile-1.4.2.css">
    <link rel="stylesheet" href="css/jquery.mobile-core.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/jquery.mobile-1.4.2.js"></script>

    <!-- Panel -->
    <script>
        $(document).ready(function(){


            $("#destination").hide();
            $("#carpark").hide();
            $("#mainTitle").hide();

            $("#driving").click(function(){
                $("#destination").show(100);
            });

            $("#next").click(function(){
                $("#carpark").show(100);
                $("#mainQuestion").hide();
                $("#mainTitle").show(100);
            });

        });
    </script>
    <!-- END PANEL -->

    <!-- For Chart -->
    <script src="js/Chart.js"></script>

    <!-- DATE TIME PICKER -->
    <link rel="stylesheet" type="text/css" href="js/src/DateTimePicker.css" />

    <script type="text/javascript" src="js/src/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/src/DateTimePicker.js"></script>

    <!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" href="js/src/DateTimePicker-ltie9.css" />
    <script type="text/javascript" src="js/src/DateTimePicker-ltie9.js"></script>
    <![endif]-->
</head>

<body>

<div data-role="page" data-theme="a">
    <!--start top bar-->
    <div data-role="header" id="header_brown">
        <?php require("banner.php"); ?>
    </div>
    <!--end top bar-->

    <!--nav bar-->
    <?php require("menu.php"); ?>
    <!--end nav bar-->


    <section class="info">
        <div class="info-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div role="main" class="ui-content">
                            <div data-role="tabs">
                                <div data-role="navbar" style="padding-bottom: 20px;">
                                    <ul>
                                        <li><a href="#fragment-1" class="ui-btn-active">UQ Car Park</a></li>
                                        <li><a href="#fragment-2">UQ Map</a></li>
                                        <li><a href="#fragment-3">Predictions</a></li>
                                    </ul>
                                </div>
                                <div id="fragment-1">
                                    <object type="text/html" data="https://pg.pf.uq.edu.au" width="100%" height="596px" style="overflow:auto; padding-top: 10px;">
                                    </object>
                                </div>
                                <div id="fragment-2">
                                    <img src="img/UQcarpark.png" class="img-responsive" style="display: -webkit-inline-box" />
                                </div>
                                <div id="fragment-3">
                                    <label for="inputPassword3">Choose Prediction Time:</label>
                                    <input type="text" data-field="time" name="predictTime" placeholder="Current Time" class="form-control boxNotDriving" readonly>
                                    <div id="dtBox"></div>
                                    <script type="text/javascript">
                                        $(document).ready(function()
                                        {
                                            $("#dtBox").DateTimePicker();
                                        });
                                    </script>

                                    <p style="white-space: normal">The graph below shows the percentage chance of finding a car park lot in UQ at the selected time.</p>
                                    <object type="text/html" data="http://deco3800-tm.uqcloud.net/carparkPrediction.php" width="100%" height="320px" style="overflow:auto; padding-top: 10px;">
                                    </object>


                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
    </section>
    <script>
        var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
        var lineChartData = {
            labels : ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
            datasets : [
                {
                    label: "UQ Car Park Dataset",
                    fillColor : "rgba(151,187,205,0.2)",
                    strokeColor : "rgba(151,187,205,1)",
                    pointColor : "rgba(151,187,205,1)",
                    pointStrokeColor : "#fff",
                    pointHighlightFill : "#fff",
                    pointHighlightStroke : "rgba(151,187,205,1)",
                    //data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
                    data : [0, 12, 16, 21, 43, 80, 100]
                }
            ]

        }

        window.onload = function(){
            var ctx = document.getElementById("canvas").getContext("2d");
            window.myLine = new Chart(ctx).Line(lineChartData, {
                responsive: true
            });
        }


    </script>

</div>

</body>
</html>
