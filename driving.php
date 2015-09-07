<!DOCTYPE html>

<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Transport Me</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <!-- MAPS -->

    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
    <script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?v=3&sensor=false&language=en"></script>
    <script type="text/javascript">

        var map,
            currentPosition,
            directionsDisplay,
            directionsService;

        var pinColor = "eaff00";
        var pinImage = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|" + pinColor,
            new google.maps.Size(21, 34),
            new google.maps.Point(0,0),
            new google.maps.Point(10, 34));

        function initialize(lat, lon)
        {
            directionsDisplay = new google.maps.DirectionsRenderer();
            directionsService = new google.maps.DirectionsService();

            currentPosition = new google.maps.LatLng(lat, lon);

            map = new google.maps.Map(document.getElementById('map_canvas'), {
                zoom: 15,
                center: currentPosition,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });

            directionsDisplay.setMap(map);

            var currentPositionMarker = new google.maps.Marker({
                position: currentPosition,
                map: map,
                title: "Current position"
            });

            var myLatlng = new google.maps.LatLng(-27.494037, 153.004917);
            var marker1 = new google.maps.Marker({
                position: myLatlng,
                map: map,
                icon: pinImage,
                title:"Person 1"
            });

            var myLatlng = new google.maps.LatLng(-27.494589, 153.000733);
            var marker2 = new google.maps.Marker({
                position: myLatlng,
                map: map,
                icon: pinImage,
                title:"Person 2"
            });

            var myLatlng = new google.maps.LatLng(-27.499148, 153.002793);
            var marker3 = new google.maps.Marker({
                position: myLatlng,
                map: map,
                icon: pinImage,
                title:"Person 3"
            });

            var myLatlng = new google.maps.LatLng(-27.498456, 153.009093);
            var marker4 = new google.maps.Marker({
                position: myLatlng,
                map: map,
                icon: pinImage,
                title:"Person 4"
            });

            var infowindow = new google.maps.InfoWindow();
            google.maps.event.addListener(currentPositionMarker, 'click', function() {
                //infowindow.setContent("Current position: latitude: " + lat +" longitude: " + lon);
                infowindow.setContent("Current position");
                infowindow.open(map, currentPositionMarker);
            });

            google.maps.event.addListener(marker1, 'click', function() {
                infowindow.setContent("John Smith needs a ride. Click here to accept.");
                infowindow.open(map, marker1);
            });

            google.maps.event.addListener(marker2, 'click', function() {
                infowindow.setContent("William Zabkar needs a ride. Click here to accept.");
                infowindow.open(map, marker2);
            });

            google.maps.event.addListener(marker3, 'click', function() {
                infowindow.setContent("Charlotte Diana needs a ride. Click here to accept.");
                infowindow.open(map, marker3);
            });

            google.maps.event.addListener(marker4, 'click', function() {
                infowindow.setContent("Elena Reeves needs a ride. Click here to accept.");
                infowindow.open(map, marker4);
            });
        }

        function locError(error) {
            // initialize map with a static predefined latitude, longitude
            initialize(59.3426606750, 18.0736160278);
        }

        function locSuccess(position) {
            initialize(position.coords.latitude, position.coords.longitude);
        }

        function calculateRoute() {
            var targetDestination = $("#target-dest").val();
            if (currentPosition && currentPosition != '' && targetDestination && targetDestination != '') {
                var request = {
                    origin:currentPosition,
                    destination:targetDestination,
                    travelMode: google.maps.DirectionsTravelMode["DRIVING"]
                };

                directionsService.route(request, function(response, status) {
                    if (status == google.maps.DirectionsStatus.OK) {
                        directionsDisplay.setPanel(document.getElementById("directions"));
                        directionsDisplay.setDirections(response);

                        /*var myRoute = response.routes[0].legs[0];
                         for (var i = 0; i < myRoute.steps.length; i++) {
                         alert(myRoute.steps[i].instructions);
                         }*/
                        $("#results").show();
                    }
                    else {
                        $("#results").hide();
                    }
                });
            }
            else {
                $("#results").hide();
            }
        }

        $(document).live("pagebeforeshow", "#map_page", function() {
            navigator.geolocation.getCurrentPosition(locSuccess, locError);
        });


        $(document).on('click', '#directions-button', function(e){
            e.preventDefault();
            calculateRoute();
        });

    </script>

</head>

<body>

<div data-role="page" data-theme="b">
    <section class="info">
        <div class="info-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">

                        <div class="ui-bar-c ui-corner-all ui-shadow" style="padding:1em;">
                            <div id="map_canvas" style="height:350px;"></div>
                        </div>
                        <div data-role="fieldcontain">
                            <label for="target-dest">Target Destination:</label>
                            <input type="text" name="target-dest" id="target-dest" value="The University of Queensland"  />
                        </div>
                        <div class="ui-grid-a">
                            <div class="ui-block-a"><button type="button" data-theme="a" id="directions-button">Get Directions</button></div>
                            <div class="ui-block-b"><button type="button" data-theme="a" onclick="location.href='home.php'">Back to Home</button></div>
                        </div>
                        <!--<a href="#" id="directions-button" data-role="button" data-inline="true" data-mini="true">Get Directions</a>
                        <a data-role="button" data-inline="true" data-mini="true" onclick="location.href='home.php'">Back to Home</a>-->
                        <div id="results" style="display:none;">
                            <div id="directions"></div>
                        </div>

                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
    </section>

</div>

</body>
</html>
