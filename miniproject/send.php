<?php
	// $firstName = $_POST['booking_id'];
	$hallName = $_POST['hall_name'];
	$hallid = $_POST['hall_id'];
	$fname = $_POST['function_name'];
	// $password = $_POST['date_of_booking'];
	$doe = $_POST['date_of_event'];

	// Database connection
	$conn = new mysqli('localhost','root','','dbms_project');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into hall_booking( hall_name, hall_id, function_name, event_date) values( ?, ?, ?, ?)");
		$stmt->bind_param("ssss", $hallName, $hallid, $fname, $doe);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";

        $lastid = mysqli_insert_id($conn); 
        echo "your booking id is : ".$lastid; 
        
		$stmt->close();
		$conn->close();
	}
?>