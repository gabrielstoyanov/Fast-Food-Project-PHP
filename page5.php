<html>
<head> 
<title>FastFood</title> 
<link rel="stylesheet" type="text/css" href="style.css">
</head> 
<body>
<center>
<?php
$u_ID = $_POST['u_ID'];
$DBName = "****"; // The database name is your username
$Username = "****";
$Password = "****";

// Try to connect
$conn = new mysqli("localhost", $Username, $Password, $DBName);

if(mysqli_connect_errno($con))
{
	echo "Connection to database failed : " . mysqli_connect_error();
}

$result = mysqli_query($conn,"SELECT * FROM Employees WHERE ID='$u_ID'");
	
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
<th>License</th>
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


if($u_ID!=""){
	$result_delete = mysqli_query($conn,"SELECT * Employees WHERE ID = '$u_ID'");
}

mysqli_close($con);
?>
<form action="http://rest-orders.net/inf335/page6.php" method="POST">
<label for="edit_ID">ID: </label>
<input type="text" id="edit_id" name="edit_id" value=''></br>
<label for="edit_fname">First Name: </label>
<input type="text" id="edit_fname" name="edit_fname" value=''></br>
<label for="edit_lname">Last Name: </label>
<input type="text" id="edit_lname" name="edit_lname" value=''></br>
<label for="edit_phone">Phone: </label>
<input type="text" id="edit_phone" name="edit_phone" value=''></br>
<label for="edit_pos">Position: </label>
<input type="text" id="edit_position" name="edit_position" value=''></br>
<label for="edit_wage">Wage: </label>
<input type="text" id="edit_wage" name="edit_wage" value=''></br>
<label for="edit_gender">Gender: </label>
<input type="text" id="edit_gender" name="edit_gender" value=''></br>
<label for="edit_car">Car: </label>
<input type="text" id="edit_car" name="edit_car" value=''></br>
<label for="edit_license">License: </label>
<input type="text" id="edit_license" name="edit_license" value=''></br>

<input class="button" type="submit" value="Submit">
</form>
</body>
</html>

