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

    <!-- For star ratings -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/star-rating.css" media="all" rel="stylesheet" type="text/css"/>
    <script src="js/star-rating.js" type="text/javascript"></script>
    <!-- End Star Ratings -->

    <style type="text/css">
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
            background-color: transparent;
        }
        .moreInfo{
            font-size: 12px;
        }
    </style>

    <!-- Panel -->
    <script>
        $(document).ready(function(){
            $(".past").hide();
        });
    </script>
    <!-- END PANEL -->

    <!-- For Sorting -->
    <script type="text/javascript">
        function getval(sel) {
            if (sel.value == "1")
            {
                $(".current").show();
                $(".past").hide();
            }
            else if (sel.value == "2")
            {
                $(".past").show();
                $(".current").hide();
            }
        }
    </script>
    <!-- End Sorting -->
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
                                My Rides
                            </h3>
                        </div>
                        <!-- End Title -->
                        <!-- Start Rides info -->
                        <div class="ui-content">
                            <ul data-role="listview" data-inset="true">
                                <li>
                                    <!-- Sort Options -->
                                    <select name="select-native-1" id="select-native-1" onchange="getval(this);">
                                        <option value="1">Current Ride</option>
                                        <option value="2">Past Rides</option>
                                    </select>
                                <!-- End Sort Options -->
                                </li>
                                <!-- First Driver -->
                                <li data-icon="false" class="current">
                                    <h5><img src="img/mia.png" width="50px" height="50px" class="img-circle" style/>
                                        <a href="mia.php" data-ajax="false">Mia Toretto</a></h5>
                                    <p><b>Accident Free Hours:</b> 800</p>
                                    <p><b>Car Model: </b>2012 Alfa Romeo Giulietta JTD-M</p>
                                    <p><b>Car Colour: </b>Red</p>
                                    <p><b>Car Registration: </b>865 GTF</p>
                                    <p><b>General Rating: </b><input class="rating-input" type="number" value="5" readonly/></p>
                                    <p style="font-size: 18px;"><b>ETA to your location: 15 mins</b></p>
                                    <p style="font-size: 12pt"><strong>Suggested Fee: <span style="color: red;">$1.00</span></strong></p>
                                    <p>Notification: 5 mins before arrival</p>
                                    <p class='ui-li-aside' style="right: 2em;">
                                        <a href="#popupDialog" data-rel="popup" data-position-to="window" data-role="button" data-inline="true" data-transition="pop" class="btn-default btn-sm">
                                            <span class="glyphicon glyphicon-trash"></span> Cancel
                                        </a>
                                    </p>
                                </li>
                                <!-- End First Driver -->

                                <!-- Second Driver -->
                                <li data-icon="false" class="past">
                                    <h5><img src="img/mia.png" width="50px" height="50px" class="img-circle" style/>
                                        <a href="mia.php" data-ajax="false">Mia Toretto</a></h5>
                                    <p><b>Shared a ride on: </b>26 May 2015, 14:05</p>
                                    <p><b>Position: </b>Driver</p>
                                    <p><b>Car Model: </b>2012 Alfa Romeo Giulietta JTD-M</p>
                                    <p><b>Car Colour: </b>Red</p>
                                    <p><b>Car Registration: </b>865 GTF</p>
                                    <p><strong>Suggested Fee: $1.00</strong></p>
                                    <p><b>General Rating: </b><input class="rating-input" type="number" value="5" readonly/></p>
                                    <p class='ui-li-aside' style="right: 2em;">
                                        <a href="#popupDialog2" data-rel="popup" data-position-to="window" data-role="button" data-inline="true" data-transition="pop" class="btn-default btn-sm">
                                            <span class="glyphicon glyphicon-star"></span> Review
                                        </a>
                                    </p>
                                </li>
                                <!-- End Second Driver -->

                                <!-- Second Driver -->
                                <li data-icon="false" class="past">
                                    <h5><img src="img/owen.jpg" width="50px" height="50px" class="img-circle" style/>
                                        <a href="#">Owen Shaw</a></h5>
                                    <p><b>Shared a ride on: </b>20 May 2015, 10:05</p>
                                    <p><b>Position: </b>Driver</p>
                                    <p><b>Car Model: </b>2011 Audi R8</p>
                                    <p><b>Car Colour: </b>Black</p>
                                    <p><b>Car Registration: </b>621 MAZ</p>
                                    <p><strong>Suggested Fee: $3.00</strong></p>
                                    <p><b>General Rating: </b><input class="rating-input" type="number" value="3.5" readonly/></p>
                                    <p class='ui-li-aside' style="right: 2em;">
                                        <a href="#popupDialog3" data-rel="popup" data-position-to="window" data-role="button" data-inline="true" data-transition="pop" class="btn-default btn-sm" style="background-color: chartreuse;">
                                            <span class="glyphicon glyphicon-check"></span> Reviewed
                                        </a>
                                    </p>
                                </li>
                                <!-- End Second Driver -->

                                <!-- First Passenger -->
                                <li data-icon="false" class="past">
                                    <h5><img src="img/Tej.png" width="50px" height="50px" class="img-circle" style/>
                                        <a href="#">Tej Parker</a></h5>
                                    <p><b>Shared a ride on: </b>12 May 2015, 07:35</p>
                                    <p><b>Position: </b>Passenger</p>
                                    <p><strong>Suggested Fee: $2.00</strong></p>
                                    <p><b>General Rating: </b><input class="rating-input" type="number" value="3" readonly/></p>
                                    <p class='ui-li-aside' style="right: 2em;">
                                        <a href="#popupDialog4" data-rel="popup" data-position-to="window" data-role="button" data-inline="true" data-transition="pop" class="btn-default btn-sm" style="background-color: chartreuse;">
                                            <span class="glyphicon glyphicon-check"></span> Reviewed
                                        </a>
                                    </p>
                                </li>
                                <!-- End First Passenger -->
                            </ul>
                        </div>
                        <!-- End Rides info -->

                        <!-- Pop up cancellation -->
                        <div data-role="popup" id="popupDialog" data-overlay-theme="a" data-theme="a" style="max-width:400px;" class="ui-corner-all">
                            <div data-role="header" data-theme="a" class="ui-corner-top">
                                <h1>Cancellation</h1>
                            </div>
                            <div role="main" class="ui-corner-bottom ui-content">
                                <p><b>Are you sure you want to cancel the booking?</b></p>
                                <p>Please note that you will suffer the following penalties:</p>
<!--
                                <p>a) No refund for cancellation</p>
                                <p>b) 500 MePoints penalty</p>
-->
                                <p>a) 1 star penalty on all rating categories</p>
                                <a href="#" data-role="button" data-inline="true" data-rel="back" data-theme="a">No</a>
                                <a href="#" data-role="button" data-inline="true" data-transition="flow" data-theme="b">Yes</a>
                            </div>
                        </div>
                        <!-- End pop up cancellation -->

                        <!-- Pop up review driver -->
                        <div data-role="popup" id="popupDialog2" data-overlay-theme="a" data-theme="a" style="max-width:400px;" class="ui-corner-all">
                            <div data-role="header" data-theme="a" class="ui-corner-top">
                                <h1>Review Driver</h1>
                            </div>
                            <div role="main" class="ui-corner-bottom ui-content">
                                <p><b>General Rating: </b><input class="rating-input" type="number" /></p>
                                <p><b>Safety Level: </b><input class="rating-input" type="number" /></p>
                                <p><b>Friendliness: </b><input class="rating-input" type="number" /></p>
                                <p><b>Cleanliness: </b><input class="rating-input" type="number" /></p>
                                <p><b>Write a review:</b></p>
                                <textarea rows="5" cols="50"></textarea>

                                <a href="#" data-role="button" data-inline="true" data-rel="back" data-theme="a">Cancel</a>
                                <a href="#" data-role="button" data-inline="true" data-transition="flow" data-theme="b">Save</a>
                            </div>
                        </div>
                        <!-- End review driver -->

                        <!-- Pop up reviewed driver -->
                        <div data-role="popup" id="popupDialog3" data-overlay-theme="a" data-theme="a" style="max-width:400px;" class="ui-corner-all">
                            <div data-role="header" data-theme="a" class="ui-corner-top">
                                <h1>Review Driver</h1>
                            </div>
                            <div role="main" class="ui-corner-bottom ui-content">
                                <p><b>General Rating: </b><input class="rating-input" type="number" value="3.5" readonly /></p>
                                <p><b>Safety Level: </b><input class="rating-input" type="number" value="3" readonly /></p>
                                <p><b>Friendliness: </b><input class="rating-input" type="number" value="2" readonly /></p>
                                <p><b>Cleanliness: </b><input class="rating-input" type="number" value="3.5" readonly /></p>
                                <p><b>Write a review:</b></p>
                                <textarea rows="5" cols="50" readonly>A rather quiet driver, don't like to talk much.</textarea>

                                <a href="#" data-role="button" data-inline="true" data-rel="back" data-theme="a">Close</a>
                            </div>
                        </div>
                        <!-- End reviewed driver -->

                        <!-- Pop up review passenger -->
                        <div data-role="popup" id="popupDialog4" data-overlay-theme="a" data-theme="a" style="max-width:400px;" class="ui-corner-all">
                            <div data-role="header" data-theme="a" class="ui-corner-top">
                                <h1>Review Passenger</h1>
                            </div>
                            <div role="main" class="ui-corner-bottom ui-content">
                                <p><b>General Rating: </b><input class="rating-input" type="number" value="4" readonly /></p>
                                <p><b>Friendliness: </b><input class="rating-input" type="number" value="4" readonly /></p>
                                <p><b>Cleanliness: </b><input class="rating-input" type="number" value="3.5" readonly /></p>
                                <p><b>Trustworthiness: </b><input class="rating-input" type="number" value="4.5" readonly /></p>
                                <p><b>Write a review:</b></p>
                                <textarea rows="5" cols="50" readonly>Tej is very chatty, quite a fun person to talk to.</textarea>

                                <a href="#" data-role="button" data-inline="true" data-rel="back" data-theme="a">Close</a>
                            </div>
                        </div>
                        <!-- End review passenger -->

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
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
    </section>

</div>

</body>
</html>
