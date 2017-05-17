<?php
$DBName = "****"; // The database name is your username
$Username = "****";
$Password = "****";

// Try to connect
$conn = new mysqli("localhost", $Username, $Password, $DBName);

if(mysqli_connect_errno($con))
{
	echo "Connection to database failed : " . mysqli_connect_error();
}
else { echo "Connection successful"; }

$result = mysqli_query($conn,"SELECT * FROM Employees");

	
echo "<table border='1'>
<tr>
<th>ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Phone</th>
<th>Position</th>
<th>Wage</th>
<th>Gender</th>
<th>Car</th>
<th>LIcense</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['ID'] . "</td>";
echo "<td>" . $row['f_Name'] . "</td>";
echo "<td>" . $row['l_Name'] . "</td>";
echo "<td>" . $row['Phone'] . "</td>";
echo "<td>" . $row['Position'] . "</td>";
echo "<td>" . $row['wage'] . "</td>";
echo "<td>" . $row['Gender'] . "</td>";
echo "<td>" . $row['Car'] . "</td>";
echo "<td>" . $row['License'] . "</td>";

echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>


<html>
<head> 
<title>FastFood</title> 
<link rel="stylesheet" type="text/css" href="style.css">
</head> 
<body>
<center>

</body>
</html>