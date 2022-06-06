<!DOCTYPE html>
<html>
<head>
<title>Table for all the Halls</title>
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
body{
    background-image:url("https://media.istockphoto.com/photos/glitter-vintage-lights-abstract-background-new-year-holiday-silver-picture-id1178183406?b=1&k=20&m=1178183406&s=170667a&w=0&h=PWrZuXQuDCz9ZvIKAf4dWYOydWDx2tIuiDw254d9Oj0=");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
    padding:5px;
    border:4px groove grey;
}
</style>
</head>
<body>
    <h1 style="text-align:center ;background-color:#0099ff">DETAILS OF HALL AVAILABLE</h1><br>
<table >
<tr>
<th>Hall NO</th>
<th>HALL NAME</th>
<th>NUMBER OF SEATS</th>
<th>INCHARGE</th>
<th>DEPARTMENT</th>
<th>BUILDING NAME</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "dbms_project");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM hall_details";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["hall_no"]. "</td><td>" . $row["hall_name"] . "</td><td>"
. $row["seats"]. "</td><td>" . $row["incharge"]. "</td><td>" . $row["department"]. "</td><td>" . $row["building_name"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
<a href="events.php"><button class="top-left" style="background-color:red;width:200px;height:70px;justify-content:center;margin-left:45%;margin-top:3px;font-size:30px">HOME</button></a>
</body>
</html>