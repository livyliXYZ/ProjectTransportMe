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
                        <!--<div id="mainTitle">
                            <h3 class="text-center">
                                My Tickets
                            </h3>
                        </div>-->
                        <!-- End Title -->
                        <!-- Start Rides info -->
                        <div class="ui-content">
                            <ul data-role="listview" data-inset="true">
                                <li data-icon="false">
                                    <h3 class="text-center">My Tickets</h3>
                                </li>
                                <li data-icon="false">
                                    <div class="text-center" style="height: 250px">
                                    <img src="img/qrCode.png" width="250px" style="padding-top: 20px"/>
                                    </div>
                                    <p style="white-space: normal">Please print this code and put it on your windscreen for verification purposes if needed.</p>
                                    <p class='ui-li-aside' style="right: 2em;">
                                        <a href="#" data-rel="popup" data-position-to="window" data-role="button" data-inline="true" data-transition="pop" class="btn-default btn-sm">
                                            <span class="glyphicon glyphicon-print"></span> Print QR Code
                                        </a>
                                    </p>
                                </li>
                                <!-- First Ticket -->
                                <li data-icon="false" class="current">
                                    <p></p>
                                    <p><b>You have a car park ticket for</b></p>
                                    <p><b>04 June 2015</b></p>
                                    <p></p>
                                    <p class='ui-li-aside' style="right: 2em;">
                                        <a href="#popupDialog" data-rel="popup" data-position-to="window" data-role="button" data-inline="true" data-transition="pop" class="btn-default btn-sm">
                                            <span class="glyphicon glyphicon-usd"></span> Sell
                                        </a>
                                    </p>
                                </li>
                                <!-- End First Ticket -->

                                <!-- Second Ticket -->
                                <li data-icon="false" class="past">

                                    <p class='ui-li-aside' style="right: 2em;">
                                        <a href="#popupDialog2" data-rel="popup" data-position-to="window" data-role="button" data-inline="true" data-transition="pop" class="btn-default btn-sm">
                                            <span class="glyphicon glyphicon-star"></span> Review
                                        </a>
                                    </p>
                                </li>
                                <!-- End Second Ticket -->
                            </ul>
                        </div>
                        <!-- End Rides info -->

                        <!-- Pop up cancellation -->
                        <div data-role="popup" id="popupDialog" data-overlay-theme="a" data-theme="a" style="max-width:400px;" class="ui-corner-all">
                            <div data-role="header" data-theme="a" class="ui-corner-top">
                                <h1>Cherry Pool</h1>
                            </div>
                            <div role="main" class="ui-corner-bottom ui-content">
                                <p><b>Are you sure you want to sell your ticket to Cherry Pool?</b></p>
                                <p>You will be given a refund of: 2500 MePoints</p>
                                <a href="#" data-role="button" data-inline="true" data-rel="back" data-theme="a">No</a>
                                <a href="#" data-role="button" data-inline="true" data-rel="back" data-transition="flow" data-theme="b">Yes</a>
                            </div>
                        </div>
                        <!-- End pop up cancellation -->



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
