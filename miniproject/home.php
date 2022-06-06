<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
/* tr:nth-child(odd) {background-color: #cccc66} */
body{
    background-image:url("https://i.pinimg.com/originals/71/0b/5e/710b5ecc73d6e54ba07eb693a0a86bf0.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
    padding:5px;
    border:4px groove grey;
}
</style>
</head>
<body>
    <h1 style="text-align:center;background-color:#cccc66">HALLS BOOKED</h1><br>
<table >
<tr>
<th>BOOKING ID</th>
<th>HALLNAME</th>
<th>HALL NO</th>
<th>EVENT NAME</th>
<th>DATE OF BOOKING</th>
<th>DATE OF EVENT</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "dbms_project");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM hall_booking";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["booking_id"]. "</td><td>" . $row["hall_name"] . "</td><td>"
. $row["hall_id"]. "</td><td>" . $row["function_name"]. "</td><td>" . $row["date_of_booking"]. "</td><td>" . $row["event_date"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
<a href="events.php"><button class="top-left" style="background-color:red;width:200px;height:70px;justify-content:center;margin-left:45%;margin-top:3px;font-size:30px">HOME</button></a>
</body>
</html>