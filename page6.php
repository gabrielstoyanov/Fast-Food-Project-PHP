<?php
$u_ID=$_POST['edit_id'];
$fName=$_POST['edit_fname'];
$lName=$_POST['edit_lname'];
$phone=$_POST['edit_phone'];
$position=$_POST['edit_position'];
$wage=$_POST['edit_wage'];
$gender=$_POST['edit_gender'];
$car=$_POST['edit_car'];
$license=$_POST['edit_license'];

$DBName = "****"; // The database name is your username
$Username = "****";
$Password = "****";

// Try to connect
$conn = new mysqli("localhost", $Username, $Password, $DBName);

if(mysqli_connect_errno($con))
{
	echo "Connection to database failed : " . mysqli_connect_error();
}

$result = mysqli_query($conn,"UPDATE Employees
SET f_Name='$fName', l_Name='$lName', Phone=$phone, Position='$position', wage=$wage, Gender='$gender',
Car=$car, License=$license
WHERE ID=$u_ID");




?>