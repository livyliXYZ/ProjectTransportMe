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
    </style>

    <!-- Panel -->
    <script>
        $(document).ready(function(){
            $(".passenger").hide();
            $(".averagePassenger").hide();
        });
    </script>
    <!-- END PANEL -->

    <!-- For Sorting -->
    <script type="text/javascript">
        function getval(sel) {
            if (sel.value == "1")
            {
                $(".driver").show();
                $(".averageDriver").show();
                $(".passenger").hide();
                $(".averagePassenger").hide();
            }
            else if (sel.value == "2")
            {
                $(".passenger").show();
                $(".averagePassenger").show();
                $(".driver").hide();
                $(".averageDriver").hide();
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
                        <!-- Start my profile -->
                        <div class="text-center">
                            <p>&nbsp;</p>
                            <img src="img/mia.png" width="100px" height="105px" class="img-circle" />
                            <h4>
                                Mia Toretto
                            </h4>
                            <h5>
                                Accident Free Hours: 800
                            </h5>
                        </div>
                        <!-- Start Reviews -->
                        <div class="ui-content">
                            <ul data-role="listview" data-inset="true">
                                <li>
                                    <!-- Sort Options -->
                                    <div class="ui-field-contain">
                                        <label for="select-native-1">Reviews:</label>
                                        <select name="select-native-1" id="select-native-1" onchange="getval(this);">
                                            <option value="1">As a driver</option>
                                            <option value="2">As a passenger</option>
                                        </select>
                                    </div>
                                    <!-- End Sort Options -->
                                </li>

                                <!-- My Average driver-->
                                <li data-icon="false" class="averageDriver">
                                    <h5>Rating Summary (Driver)</h5>
                                    <p><b>General Rating: </b><input class="rating-input" type="number" value="5" readonly /></p>
                                    <p><b>Safety Level: </b><input class="rating-input" type="number" value="5" readonly  /></p>
                                    <p><b>Friendliness: </b><input class="rating-input" type="number" value="5" readonly  /></p>
                                    <p><b>Cleanliness: </b><input class="rating-input" type="number" value="4" readonly  /></p>
                                </li>
                                <!-- End My Average driver -->


                                <!-- My Average passenger -->
                                <li data-icon="false" class="averagePassenger">
                                    <h5>Rating Summary (Passenger)</h5>
                                    <p>Mia is ready for reviews as a passenger.</p>
                                    <div class="ui-grid-a">
                                        <a href="#popupDialog" data-rel="popup" data-position-to="window" data-role="button" data-inline="true" data-transition="pop" class="btn-default btn-sm">
                                            Write a Review
                                        </a>
                                    </div>

                                </li>
                                <!-- End My Average passenger -->

                                <!-- First reviewer -->
                                <li data-icon="false" class="driver">
                                    <h5><img src="img/elena.png" width="50px" height="50px" class="img-circle" style/>
                                        <a href="#">Elena Neves</a></h5>
                                    <p><b>Review: </b><input class="rating-input" type="number" value="4.5" readonly /></p>
                                    <p>Excellent driver, provides chocolates for passengers.</p>
                                    <p><b>Reviewed on: </b>20 May 2015, 11:11</p>
                                </li>
                                <!-- End First reviewer -->

                                <!-- Second reviewer -->
                                <li data-icon="false" class="driver">
                                    <h5><img src="img/Tej.png" width="50px" height="50px" class="img-circle" style/>
                                        <a href="#">Tej Parker</a></h5>
                                    <p><b>Review: </b><input class="rating-input" type="number" value="5" readonly /></p>
                                    <p>Lovely girl, it was really great to meet her.</p>
                                    <p><b>Reviewed on: </b>14 May 2015, 10:04</p>
                                </li>
                                <!-- End Second reviewer -->

                                <!-- Third reviewer -->
                                <li data-icon="false" class="driver">
                                    <h5><img src="img/owen.jpg" width="50px" height="50px" class="img-circle" style/>
                                        <a href="#">Owen Shaw</a></h5>
                                    <p><b>Review: </b><input class="rating-input" type="number" value="5" readonly /></p>
                                    <p>Had a really comfortable ride.</p>
                                    <p><b>Reviewed on: </b>10 May 2015, 14:21</p>
                                </li>
                                <!-- End Third reviewer -->


                            </ul>
                        </div>
                        <!-- End Reviews -->

                        <!-- Pop up review passenger -->
                        <div data-role="popup" id="popupDialog" data-overlay-theme="a" data-theme="a" style="max-width:400px;" class="ui-corner-all">
                            <div data-role="header" data-theme="a" class="ui-corner-top">
                                <h1>Review Passenger</h1>
                            </div>
                            <div role="main" class="ui-corner-bottom ui-content">
                                <p>Opps! You've not shared a ride with this user.</p>
                                <p>Come back again after Mia becomes your passenger.</p>
                                <a href="#" data-role="button" data-inline="true" data-rel="back" data-theme="a">Close</a>
                            </div>
                        </div>
                        <!-- End review passenger -->

                        <!-- End my profile -->
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
