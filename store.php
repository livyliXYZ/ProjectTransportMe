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

    <!-- DATE TIME PICKER -->
    <link rel="stylesheet" type="text/css" href="js/src/DateTimePicker.css" />

    <script type="text/javascript" src="js/src/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/src/DateTimePicker.js"></script>

    <!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" href="js/src/DateTimePicker-ltie9.css" />
    <script type="text/javascript" src="js/src/DateTimePicker-ltie9.js"></script>
    <![endif]-->

    <!-- Panel -->
    <script>
        $(document).ready(function(){
            $(".ticket").hide();

            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth()+1; //January is 0!

            var yyyy = today.getFullYear();
            if(dd<10){
                dd='0'+dd
            }
            if(mm<10){
                mm='0'+mm
            }
            var today = dd+'/'+mm+'/'+yyyy;
            var x = document.getElementsByClassName("DATE");
            x[0].innerHTML = today;
        });
    </script>
    <!-- END PANEL -->
    <!-- For Sorting -->
    <script type="text/javascript">
        function getval(sel) {
            if (sel.value == "1")
            {
                $(".package").show();
                $(".ticket").hide();
            }
            else if (sel.value == "2")
            {
                $(".ticket").show();
                $(".package").hide();
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
                                Welcome to MeStore!
                            </h3>
                        </div>
                        <!-- End Title -->

                        <div data-role="main" class="ui-content" id="store_list">
                            <form method="POST" name="buying" action="buyCoupons.php">
                                <ul data-role="listview" data-inset="true">
                                    <!--<li style="text-align:center;">MePoints Store</li>-->
                                    <li style="text-align:center;">
                                        <!-- Sort Options -->
                                            <select name="select-native-1" id="select-native-1" onchange="getval(this);">
                                                <option value="1">MePoints Store</option>
                                                <option value="2">Car Park Ticket Store</option>
                                            </select>
                                        </li>
                                        <!-- End Sort Options -->
                                    <li data-icon='false' class="package">
                                        <h6>5000 MePoints</h6>
                                        <p style="color: brown">Price: $5.00</p>
                                        <p class='ui-li-aside'>
                                            <a href="#" data-rel="popup" data-position-to="window" data-role="button" data-inline="true" data-transition="pop" class="btn btn-default btn-sm">
                                                <span class="glyphicon glyphicon-gift"></span> Buy
                                            </a>
                                        </p>
                                    </li>
                                    <li data-icon='false' class="package">
                                        <h6>10,500 MePoints</h6>
                                        <p style="color: brown">Price: $10.00</p>
                                        <p class='ui-li-aside'>
                                            <a href="#" data-rel="popup" data-position-to="window" data-role="button" data-inline="true" data-transition="pop" class="btn btn-default btn-sm">
                                                <span class="glyphicon glyphicon-gift"></span> Buy
                                            </a>
                                        </p>
                                    </li>
                                    <li data-icon='false' class="package">
                                        <h6>21,500 MePoints</h6>
                                        <p style="color: brown">Price: $20.00</p>
                                        <p class='ui-li-aside'>
                                            <a href="#" data-rel="popup" data-position-to="window" data-role="button" data-inline="true" data-transition="pop" class="btn btn-default btn-sm">
                                                <span class="glyphicon glyphicon-gift"></span> Buy
                                            </a>
                                        </p>
                                    </li>
                                    <li data-icon='false' class="package">
                                        <h6>55,000 MePoints</h6>
                                        <p style="color: brown">Price: $50.00</p>
                                        <p class='ui-li-aside'>
                                            <a href="#" data-rel="popup" data-position-to="window" data-role="button" data-inline="true" data-transition="pop" class="btn btn-default btn-sm">
                                                <span class="glyphicon glyphicon-gift"></span> Buy
                                            </a>
                                        </p>
                                    </li>
                                    <li data-icon='false' class="package">
                                        <h6>120,000 MePoints</h6>
                                        <p style="color: brown">Price: $100.00</p>
                                        <p class='ui-li-aside'>
                                            <a href="#" data-rel="popup" data-position-to="window" data-role="button" data-inline="true" data-transition="pop" class="btn btn-default btn-sm">
                                                <span class="glyphicon glyphicon-gift"></span> Buy
                                            </a>
                                        </p>
                                    </li>
                                    <li data-icon='false' class="ticket">
                                        <h6>Full day Cash Ticket</h6>
                                        <p>Max 5 days in advance.</p>
                                        <p style="color: brown">Price: $4.00</p>
                                        <p class='ui-li-aside'>
                                            <a href="#popupDialog" data-rel="popup" data-position-to="window" data-role="button" data-inline="true" data-transition="pop" class="btn btn-default btn-sm">
                                                <span class="glyphicon glyphicon-gift"></span> Buy
                                            </a>
                                        </p>
                                    </li>
                                    <li data-icon='false' class="ticket">
                                        <h6>Full day MePoints Ticket</h6>
                                        <p>Max 5 days in advance.</p>
                                        <p style="color: brown">Price: 5000 MePoints</p>
                                        <p class='ui-li-aside'>
                                            <a href="#popupDialog" data-rel="popup" data-position-to="window" data-role="button" data-inline="true" data-transition="pop" class="btn btn-default btn-sm">
                                                <span class="glyphicon glyphicon-gift"></span> Buy
                                            </a>
                                        </p>
                                    </li>
                                    <li data-icon='false' class="ticket">
                                        <h6>Cherry Pool Ticket</h6>
                                        <p>For parking on <span class="DATE"></span></p>
                                        <p style="color: brown">Price: 2500 MePoints</p>
                                        <p class='ui-li-aside'>
                                            <a href="#popupDialog2" data-rel="popup" data-position-to="window" data-role="button" data-inline="true" data-transition="pop" class="btn btn-default btn-sm">
                                                <span class="glyphicon glyphicon-gift"></span> Buy
                                            </a>
                                        </p>
                                    </li>
                                </ul>

                            </form>

                        </div>

                        <!-- Pop up choose date -->
                        <div data-role="popup" id="popupDialog" data-overlay-theme="a" data-theme="a" style="max-width:400px;" class="ui-corner-all">
                            <div data-role="header" data-theme="a" class="ui-corner-top">
                                <h1>Buy Ticket</h1>
                            </div>
                            <div role="main" class="ui-corner-bottom ui-content">
                                <p><b>Date:</b></p>
                                <input type="text" data-field="date" readonly>
                                <div id="dtBox"></div>
                                <script type="text/javascript">
                                    $(document).ready(function()
                                    {
                                        $("#dtBox").DateTimePicker({
                                            minDate: "04-06-2015",
                                            maxDate: "08-06-2015"
                                        });
                                    });
                                </script>

                                <a href="#" data-role="button" data-inline="true" data-rel="back" data-theme="a">Cancel</a>
                                <a href="#" data-role="button" data-inline="true" data-rel="back" data-transition="flow" data-theme="b">Buy Ticket</a>
                            </div>
                        </div>
                        <!-- End Pop up choose date -->

                        <!-- Pop up confirmation -->
                        <div data-role="popup" id="popupDialog2" data-overlay-theme="a" data-theme="a" style="max-width:400px;" class="ui-corner-all">
                            <div data-role="header" data-theme="a" class="ui-corner-top">
                                <h1>Confirmation</h1>
                            </div>
                            <div role="main" class="ui-corner-bottom ui-content">
                                <p><b>Are you sure you want to purchase the Cherry Pool ticket?</b></p>
                                <a href="#" data-role="button" data-inline="true" data-rel="back" data-theme="a">No</a>
                                <a href="#" data-role="button" data-inline="true" data-rel="back" data-transition="flow" data-theme="b">Buy Ticket</a>
                            </div>
                        </div>
                        <!-- End Pop up confirmation -->


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
