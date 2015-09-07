<!DOCTYPE html>

<html>
<head>
</head>
<body>

<?php
session_start();
$userID = $_SESSION['userID'];
$startLocation = "Current Location";
$destination = $_POST["destination"];

require_once "connection.php";

$startLocation = mysqli_real_escape_string($conNew, $startLocation);
$destination = mysqli_real_escape_string($conNew, $destination);

//insert into database
$resultNew = mysqli_query($conNew,"INSERT INTO locations (startLocation, destination, userID) VALUES ('$startLocation','$destination', " . $_SESSION['userID'] . ");");
mysqli_close($conNew);

echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.location.href='driving.php'
		</SCRIPT>");


?>
</body>
</html>
