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

            $("#price").hide();
            $(".bestRatings").hide();
            $("#drivers").hide();

            $("#next").click(function(){
                $("#price").show(100);
            });

            $("#search").click(function(){
                $("#drivers").show(100);
                $("#destination").hide();
            });
        });
    </script>
    <!-- END PANEL -->

    <!-- DATE TIME PICKER -->
    <link rel="stylesheet" type="text/css" href="js/src/DateTimePicker.css" />

    <script type="text/javascript" src="js/src/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/src/DateTimePicker.js"></script>

    <!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" href="js/src/DateTimePicker-ltie9.css" />
    <script type="text/javascript" src="js/src/DateTimePicker-ltie9.js"></script>
    <![endif]-->

    <style type="text/css">
        input
        {
            width: 200px;
            padding: 10px;
            margin-left: 20px;
            margin-bottom: 20px;
        }
        div.ui-corner-all{
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            -o-box-shadow: none;
            box-shadow: none;
            border-style: none;
        }
        .boxNotDriving {
            border-color: #ddd /*{a-body-border}*/;
            box-shadow: inset 0 1px 3px /*{global-box-shadow-size}*/ rgba(0,0,0,.2) /*{global-box-shadow-color}*/;
            border-radius: .3125em /*{global-radii-blocks}*/;
        }
        .moreInfo{
            font-size: 12px;
        }
    </style>
    <!-- End Date Time Picker -->

    <!-- For star ratings -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/star-rating.css" media="all" rel="stylesheet" type="text/css"/>
    <script src="js/star-rating.js" type="text/javascript"></script>
    <!-- End Star Ratings -->

    <!-- For Sorting -->
    <script type="text/javascript">
        function getval(sel) {
            if (sel.value == "1")
            {
                $(".nearest").show();
                $(".bestRatings").hide();
            }
            else if (sel.value == "2")
            {
                $(".bestRatings").show();
                $(".nearest").hide();
            }
        }
    </script>
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
                        <!-- Start Title -->
                        <div id="mainTitle">
                            <h3 class="text-center">
                                Hop on!
                            </h3>
                        </div>
                        <!-- End Title -->

                        <!-- Destination -->
                        <form class="form-horizontal" role="form" id="forPassenger" method='POST' action=''>
                            <div id="destination">
                                <label for="inputPassword3">Destination:</label>
                                <input type="text" class="form-control boxNotDriving" id="destination" name="destination" value="The University of Queensland">
                                <div class="ui-grid-solo">
                                    <div class="ui-block-a"><button type="button" data-theme="b" id="next">Calculate</button></div>
                                    <br />
                                </div>
                            </div>
                            <!-- End Destination -->

                            <!-- Start Price Calculation -->
                            <div id="price">
                                <label for="inputPassword3">Distance: 3.90km</label>
<!--                                <label for="inputPassword3">Price: 1700 MePoints</label>-->

                                <br />

                                <label for="inputPassword3">Departure Time:</label>
                                <div>
                                    <input type="text" data-field="datetime" name="leavingTime" class="form-control boxNotDriving" readonly>
                                    <div id="dtBox"></div>
                                    <script type="text/javascript">
                                        $(document).ready(function()
                                        {
                                            $("#dtBox").DateTimePicker();
                                        });
                                    </script>
                                </div>

                                <div class="ui-grid-solo">
                                    <div class="ui-block-a"><button type="button" data-theme="b" id="search">Search Drivers</button></div>
                                </div>
                            </div>
                            <!-- End Price Calculation -->

                            <!-- Search Drivers -->
                            <div id="drivers">
                                <!-- Driver's Profile -->
                                <div class="ui-content">
                                    <ul data-role="listview" data-inset="true">
                                        <li>
                                            <div style="text-align:center; font-size: 16px;">Available Drivers</div>
                                            <!-- Sort Options -->
                                            <div class="ui-field-contain">
                                                <label for="select-native-1">Sort By:</label>
                                                <select name="select-native-1" id="select-native-1" onchange="getval(this);">
                                                    <option value="1">Nearest</option>
                                                    <option value="2">Best Ratings</option>
                                                    <option value="3">Most Punctual</option>
                                                    <option value="4">Most Accident Free Hours</option>
                                                </select>
                                            </div>
                                            <!-- End Sort Options -->
                                        </li>
                                        <!-- First Driver -->
                                        <li data-icon="false" class="nearest">
                                            <h5><img src="img/Letty.png" width="50px" height="50px" class="img-circle" />
                                                Letty Ortiz</h5>
                                            <p>&nbsp;</p>
                                            <input class="rating-input" type="number" value="3" readonly/>
                                            <p>Accident Free Hours: 200</p>
                                            <p>Car Model: 1995 Honda Civic</p>
                                            <p>Current seat availability:
                                                <span class="glyphicon glyphicon-user" style="color: #c7254e;"></span>
                                                <span class="glyphicon glyphicon-user" style="color: lime;"></span>
                                                <span class="glyphicon glyphicon-user" style="color: lime;"></span>
                                                <span class="glyphicon glyphicon-user" style="color: lime;"></span>
                                            </p>
                                            <p><b>ETA to your location: 10 mins</b></p>
                                            <p style="font-size: 12pt"><strong>Suggested Fee: <span style="color: red;">$3.00</span></strong></p>
                                            <p class="ui-li-aside" style="right: 2em;">
                                                <a href="#" data-rel="popup" data-position-to="window" data-role="button" data-inline="true" data-transition="pop" class="btn-default btn-sm">
                                                    &nbsp; &nbsp; <span class="glyphicon glyphicon-info-sign"></span> More Info &nbsp;
                                                </a>
                                                <br />
                                                <a href="#" data-rel="popup" data-position-to="window" data-role="button" data-inline="true" data-transition="pop" class="btn-default btn-sm">
                                                    <span class="glyphicon glyphicon-ok"></span> Select Driver
                                                </a>
                                                <!--<button type="button" class="btn-default btn-sm">
                                                    <span class="glyphicon glyphicon-ok"></span> Select Driver
                                                </button>-->
                                            </p>
                                        </li>
                                        <!-- End First Driver -->

                                        <!-- Second Driver -->
                                        <li data-icon="false" class="nearest">
                                            <h5><img src="img/Roman.png" width="50px" height="50px" class="img-circle" />
                                                Roman Pearce</h5>
                                            <p>&nbsp;</p>
                                            <input class="rating-input" type="number" value="4.5" readonly/>
                                            <p>Accident Free Hours: 500</p>
                                            <p>Car Model: 2010 Koenigsegg CCXR</p>
                                            <p>Current seat availability:
                                                <span class="glyphicon glyphicon-user" style="color: lime;"></span>
                                            </p>
                                            <p><b>ETA to your location: 15 mins</b></p>
                                            <p style="font-size: 12pt"><strong>Suggested Fee: <span style="color: red;">$1.00</span></strong></p>

                                            <p class="ui-li-aside" style="right: 2em;">
                                                <a href="#" data-rel="popup" data-position-to="window" data-role="button" data-inline="true" data-transition="pop" class="btn-default btn-sm">
                                                    &nbsp; &nbsp; <span class="glyphicon glyphicon-info-sign"></span> More Info &nbsp;
                                                </a>
                                                <br />
                                                <a href="#" data-rel="popup" data-position-to="window" data-role="button" data-inline="true" data-transition="pop" class="btn-default btn-sm">
                                                    <span class="glyphicon glyphicon-ok"></span> Select Driver
                                                </a>
                                            </p>
                                        </li>
                                        <!-- End Second Driver -->

                                        <!-- Third Driver -->
                                        <li data-icon="false" class="nearest">
                                            <h5><img src="img/mia.png" width="50px" height="50px" class="img-circle" />
                                                Mia Toretto</h5>
                                            <p>&nbsp;</p>
                                            <input class="rating-input" type="number" value="5" readonly/>
                                            <p>Accident Free Hours: 800</p>
                                            <p>Car Model: 2012 Alfa Romeo Giulietta JTD-M</p>
                                            <p>Current seat availability:
                                                <span class="glyphicon glyphicon-user" style="color: #c7254e;"></span>
                                                <span class="glyphicon glyphicon-user" style="color: #c7254e;"></span>
                                                <span class="glyphicon glyphicon-user" style="color: #c7254e;"></span>
                                                <span class="glyphicon glyphicon-user" style="color: lime;"></span>
                                            </p>
                                            <p><b>ETA to your location: 30 mins</b></p>
                                            <p style="font-size: 12pt"><strong>Suggested Fee: <span style="color: red;">$2.00</span></strong></p>

                                            <p class="ui-li-aside" style="right: 2em;">
                                                <a href="#popupDialog" data-rel="popup" data-position-to="window" data-role="button" data-inline="true" data-transition="pop" class="btn-default btn-sm">
                                                    &nbsp; &nbsp; <span class="glyphicon glyphicon-info-sign"></span> More Info &nbsp;
                                                </a>
                                                <br />
                                                <a href="selectedDriver.php" data-rel="popup" data-position-to="window" data-role="button" data-inline="true" data-transition="pop" data-ajax="false" class="btn-default btn-sm">
                                                    <span class="glyphicon glyphicon-ok"></span> Select Driver
                                                </a>
                                                <!--<button type="button" class="btn-default btn-sm" onclick="location.href=''">
                                                    <span class="glyphicon glyphicon-ok"></span> Select Driver
                                                </button>-->
                                            </p>
                                        </li>
                                        <!-- End Third Driver -->

                                        <!-- Sort by Ratings -->
                                        <!-- First Driver -->
                                        <li data-icon="false" class="bestRatings">
                                            <h5><img src="img/mia.png" width="50px" height="50px" class="img-circle" />
                                                Mia Toretto</h5>
                                            <p>&nbsp;</p>
                                            <input class="rating-input" type="number" value="5" readonly/>
                                            <p>Accident Free Hours: 800</p>
                                            <p>Car Model: 2012 Alfa Romeo Giulietta JTD-M</p>
                                            <p>Current seat availability:
                                                <span class="glyphicon glyphicon-user" style="color: #c7254e;"></span>
                                                <span class="glyphicon glyphicon-user" style="color: #c7254e;"></span>
                                                <span class="glyphicon glyphicon-user" style="color: #c7254e;"></span>
                                                <span class="glyphicon glyphicon-user" style="color: lime;"></span>
                                            </p>
                                            <p><b>ETA to your location: 30 mins</b></p>
                                            <p class="ui-li-aside" style="right: 2em;">
                                                <a href="#popupDialog" data-rel="popup" data-position-to="window" data-role="button" data-inline="true" data-transition="pop" class="btn-default btn-sm">
                                                    &nbsp; &nbsp; <span class="glyphicon glyphicon-info-sign"></span> More Info &nbsp;
                                                </a>
                                                <br />
                                                <a href="selectedDriver.php" data-rel="popup" data-position-to="window" data-role="button" data-inline="true" data-transition="pop" data-ajax="false" class="btn-default btn-sm">
                                                    <span class="glyphicon glyphicon-ok"></span> Select Driver
                                                </a>
                                                <!--<button type="button" class="btn-default btn-sm" onclick="location.href='selectedDriver.php'">
                                                    <span class="glyphicon glyphicon-ok"></span> Select Driver
                                                </button>-->
                                            </p>
                                        </li>
                                        <!-- End First Driver -->
                                        <!-- Second Driver -->
                                        <li data-icon="false" class="bestRatings">
                                            <h5><img src="img/Roman.png" width="50px" height="50px" class="img-circle" />
                                                Roman Pearce</h5>
                                            <p>&nbsp;</p>
                                            <input class="rating-input" type="number" value="4.5" readonly/>
                                            <p>Accident Free Hours: 500</p>
                                            <p>Car Model: 2010 Koenigsegg CCXR</p>
                                            <p>Current seat availability:
                                                <span class="glyphicon glyphicon-user" style="color: lime;"></span>
                                            </p>
                                            <p><b>ETA to your location: 15 mins</b></p>
                                            <p class="ui-li-aside" style="right: 2em;">
                                                <a href="#" data-rel="popup" data-position-to="window" data-role="button" data-inline="true" data-transition="pop" class="btn-default btn-sm">
                                                    &nbsp; &nbsp; <span class="glyphicon glyphicon-info-sign"></span> More Info &nbsp;
                                                </a>
                                                <br />
                                                <a href="#" data-rel="popup" data-position-to="window" data-role="button" data-inline="true" data-transition="pop" class="btn-default btn-sm">
                                                    <span class="glyphicon glyphicon-ok"></span> Select Driver
                                                </a>
                                            </p>
                                        </li>
                                        <!-- End Second Driver -->
                                        <!-- Third Driver -->
                                        <li data-icon="false" class="bestRatings">
                                            <h5><img src="img/Letty.png" width="50px" height="50px" class="img-circle" />
                                                Letty Ortiz</h5>
                                            <p>&nbsp;</p>
                                            <input class="rating-input" type="number" value="3" readonly/>
                                            <p>Accident Free Hours: 200</p>
                                            <p>Car Model: 1995 Honda Civic</p>
                                            <p>Current seat availability:
                                                <span class="glyphicon glyphicon-user" style="color: #c7254e;"></span>
                                                <span class="glyphicon glyphicon-user" style="color: lime;"></span>
                                                <span class="glyphicon glyphicon-user" style="color: lime;"></span>
                                                <span class="glyphicon glyphicon-user" style="color: lime;"></span>
                                            </p>
                                            <p><b>ETA to your location: 10 mins</b></p>
                                            <p class="ui-li-aside" style="right: 2em;">
                                                <a href="#" data-rel="popup" data-position-to="window" data-role="button" data-inline="true" data-transition="pop" class="btn-default btn-sm">
                                                    &nbsp; &nbsp; <span class="glyphicon glyphicon-info-sign"></span> More Info &nbsp;
                                                </a>
                                                <br />
                                                <a href="#" data-rel="popup" data-position-to="window" data-role="button" data-inline="true" data-transition="pop" class="btn-default btn-sm">
                                                    <span class="glyphicon glyphicon-ok"></span> Select Driver
                                                </a>
                                            </p>
                                        </li>
                                        <!-- End Third Driver -->

                                    </ul>
                                </div>
                                <!-- End Driver's Profile -->

                                <!-- Pop up Driver detailed info -->
                                <div data-role="popup" id="popupDialog" data-overlay-theme="a" data-theme="a" style="max-width:400px;" class="ui-corner-all">
                                    <div data-role="header" data-theme="a" class="ui-corner-top">
                                        <h1>Driver Information</h1>
                                    </div>
                                    <div role="main" class="ui-corner-bottom ui-content">
                                        <p><b>Name: </b>Mia Toretto</p>
                                        <p><b>Accident Free Hours:</b> 800</p>
                                        <p><b>Car Model: </b>2012 Alfa Romeo Giulietta JTD-M</p>
                                        <p><b>General Rating: </b><input class="rating-input" type="number" value="5" readonly/></p>
                                        <p><b>Safety Level: </b><input class="rating-input" type="number" value="5" readonly/></p>
                                        <p><b>Friendliness: </b><input class="rating-input" type="number" value="5" readonly/></p>
                                        <p><b>Cleanliness </b><input class="rating-input" type="number" value="4" readonly/></p>
                                        <p><b>Top Review: </b>Excellent driver, provides chocolates for passengers.</p>
                                        <p><a href="mia.php" data-ajax="false" target="_blank">View full profile</a></p>

                                        <a href="#" data-role="button" data-inline="true" data-rel="back" data-theme="a">Cancel</a>
                                        <a href="selectedDriver.php" data-role="button" data-inline="true" data-transition="flow" data-theme="b">Select Driver</a>
                                    </div>
                                </div>
                                <!-- End Driver's detailed info -->

                                <script>
                                    jQuery(document).ready(function () {
                                        $('.rating-input').rating({
                                            min: 0,
                                            max: 5,
                                            step: 0.5,
                                            size: 'xs',
                                            showClear: false
                                        });
                                    });
                                </script>


                            </div>
                            <!-- End Search Drivers -->
                        </form>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
    </section>

</div>

</body>
</html>
