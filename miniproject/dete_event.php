<?php
$link = mysqli_connect("localhost", "root", "", "dbms_project");

$bid = $_POST['booking_id'];
$hallName = $_POST['hall_name'];
$hallid = $_POST['hall_id'];


if($link === false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "DELETE FROM hall_booking WHERE booking_id = $bid and hall_id like $hallid";
if(mysqli_query($link, $sql)){
	echo "Record was deleted successfully.";
}
else{
	echo "ERROR: Could not able to execute $sql. ". mysqli_error($link);
}
mysqli_close($link);
?>
