<?php
$servername = "localhost";
$username = "username";
$password = "";
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	
	
//mysql_select_db($username, $conn);
	
$sql= "INSERT INTO paint ('PlateNo', 'CurrentColor', 'TargetColor', 'Action') VALUES ('$_Post[PlateNo]', '$_Post[CurrentColor]', '$_Post[TargetColor]', '$_Post[Action]')";	
	
//$insert = $mysqli->query( "INSERT INTO Paint ('Plate No.') VALUE ( '$PlateNO') " );
	
//	$insert = $mysqli->query ( "INSERT INTO table ('paint jobs in progress') VALUES ('$Plate No.', '$Current Color', '$Target Color', '$Action') ");
} 
echo "Connected successfully";

?>