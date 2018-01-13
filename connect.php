<?php
if(isset($_POST['formSubmit'])){
$user = 'root';
$pass = '';
$db = 'paintdb';
$host= 'localhost';
$PlateNO = $_POST['Plate No.'];
$CurrentC = $_POST['Current Color'];
$TargetC = $_POST['Target Color'];
$Action = $_POST['Action'];

$sql = mysql_select_db ('paintdb', $connect) or die("Unable to Connect to Host");
$connect = mysqli_connect ($host, $user, $pass, $db) or die("Unable to connect");
echo "Good Job";

$sql = "INSERT INTO 'paint jobs in progress' VALUES ('Plate No.', 'Current Color', 'Target Color', 'Action'), $PlateNO,$CurrentC,$TargetC,$Action)";
mysqli_query($sql);
}
?>


