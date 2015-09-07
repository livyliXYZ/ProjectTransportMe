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
            background-color: transparent;
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
                                Thank you for riding with us!
                            </h3>
                        </div>
                        <!-- End Title -->

                        <!-- Search Drivers -->
                        <div id="drivers">
                            <!-- Driver's Profile -->
                            <div class="ui-content">
                                <ul data-role="listview" data-inset="true">
                                    <li>
                                        <div style="text-align:center; font-size: 16px;">Your driver's details</div>
                                    </li>
                                    <!-- First Driver -->
                                    <li data-icon="false" class="nearest">
                                        <h5><img src="img/mia.png" width="50px" height="50px" class="img-circle" style/>
                                            Name: Mia Toretto</h5>
                                        <p><b>Accident Free Hours:</b> 800</p>
                                        <p><b>Car Model: </b>2012 Alfa Romeo Giulietta JTD-M</p>
                                        <p><b>Car Colour: </b>Red</p>
                                        <p><b>Car Registration: </b>865 GTF</p>
                                        <p><b>General Rating: </b><input class="rating-input" type="number" value="5" readonly/></p>
                                        <p style="font-size: 18px;"><b>ETA to your location: 28 mins</b></p>
                                        <p>Notification: 5 mins before arrival</p>
                                    </li>
                                    <!-- End First Driver -->
                                </ul>
                            </div>
                            <!-- End Driver's Profile -->



                        </div>
                        <!-- End Search Drivers -->

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
