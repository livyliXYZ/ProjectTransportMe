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

    <!-- For switch -->
    <link href="css/highlight.css" rel="stylesheet">
    <link href="css/bootstrap-switch.css" rel="stylesheet">
    <link href="http://getbootstrap.com/assets/css/docs.min.css" rel="stylesheet">
    <script src="js/highlight.js"></script>
    <script src="js/bootstrap-switch.js"></script>
    <script src="js/main.js"></script>
    <script>
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-43092768-1']);
        _gaq.push(['_trackPageview']);
        (function () {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
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
                        <!-- Start Settings -->
                        <div class="ui-content">
                            <ul data-role="listview" data-inset="true">
                                <li data-icon="false">
                                    <h3 class="text-center">App Settings</h3>
                                </li>

                                <!-- First Setting -->
                                <li data-icon="false">
                                    <label for="flip-1">Auto accept car pool requests while driving</label>
                                    <p style="white-space: normal">Passengers car pool requests will be accepted automatically while driving.</p>
                                    <p>
                                        <input id="switch-state" type="checkbox" checked>
                                    </p>
                                </li>
                                <!-- End First Setting -->

                                <!-- Second Setting -->
                                <li data-icon="false">
                                    <label for="flip-1">Allow passengers to search your profile</label>
                                    <p style="white-space: normal">Passengers will be able to search and make a booking with you in advance. It is optional for you to accept the booking.</p>
                                    <p>
                                        <input id="switch-state" type="checkbox" checked>
                                    </p>
                                </li>
                                <!-- End Second Setting -->

                                <!-- Third Setting -->
                                <li data-icon="false">
                                    <label for="select-choice-1" class="select">Notify before driver arrives:</label>
                                    <select name="select-choice-1" id="select-choice-1">
                                        <option value="0">Disable</option>
                                        <option value="1">1 min</option>
                                        <option value="2">5 mins</option>
                                        <option value="3">10 mins</option>
                                        <option value="4">15 mins</option>
                                        <option value="5">20 mins</option>
                                    </select>
                                </li>
                                <!-- End Third Setting -->

                                <!-- Fourth Setting -->
                                <li data-icon="false">
                                    <label for="select-choice-1" class="select">Notify before passenger's location:</label>
                                    <select name="select-choice-1" id="select-choice-1">
                                        <option value="0">Disable</option>
                                        <option value="1">1 km</option>
                                        <option value="2">2 km</option>
                                        <option value="3">5 km</option>
                                        <option value="4">10 km</option>
                                    </select>
                                </li>
                                <!-- End Fourth Setting -->

                            </ul>
                        </div>
                        <!-- End Settings -->


                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
    </section>

</div>

</body>
</html>
