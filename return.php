<?php
session_start();
$_SESSION["wrongPassword"] = "";
$_SESSION["wrongName"] = "";
$_SESSION["wrongNumber"] = "";
$_SESSION["wrongRadio"] = "";
$errorCount = 0;
$F_Name = $_POST['fname'];
name_val($F_Name);
$L_Name = $_POST['lname'];
name_val($L_Name);
$Phone = $_POST['phone'];
num($Phone);
$Pos = $_POST['position'];
radio($Pos);
$Wage = $_POST['wage'];
$Gender = $_POST['gender'];
radio($Gender);
$Car = $_POST['car'];
$License = $_POST['license'];
$Pass1 = $_POST['pass1'];
$Pass2 = $_POST['pass2'];


$Password = "1234";

function is_pass_correct($pass1, $pass2, $password){
	global $errorCount;
	if($pass1==$pass2 && $pass1==$password){
	}
	else {
	$_SESSION["wrongPassword"] = '<font color="#8b0022" size="5em">' . "Incorrect password or passwords don't match!" . '</font><br>';
; 
	++$errorCount;
}
}

function name_val($name){
	global $errorCount;
	if(ctype_alpha ($name)){}
else { $_SESSION["wrongName"] = '<font color="#8b0022" size="5em">' . "Use only letters!" . '</font><br>';

++$errorCount;}
}

function num($num){
	global $errorCount;
	if(ctype_digit ($num)){}
else {$_SESSION["wrongNumber"] = '<font color="#8b0022" size="5em">' . "Use numeric data only!" . '</font><br>';
++$errorCount;}
}

function radio($radio){
	if(!isset($radio))
	{$_SESSION["wrongRadio"] = '<font color="#8b0022" size="5em">' . "Select radio button!" . '</font><br>'; }
}



is_pass_correct($Pass1, $Pass2, $Password);

if ( $errorCount>0) {
	 include("page1.php");
     echo "There is an error in your data";
} else {
$DBName = "****"; // The database name is your username
$Username = "****";
$Password = "****";

// Try to connect
$conn = new mysqli("localhost", $Username, $Password, $DBName);


if ($conn->connect_error) {
    echo "<p>Could not connect to the $DBName " .
         "database: " . $conn->connect_error . "</p>\n";
exit;}

$TableName = "Employees";

$sql = "INSERT INTO $TableName (f_Name, l_Name, Phone, Position, wage, Gender, License, Car)
 VALUES ('$F_Name', '$L_Name', '$Phone', '$Pos', '$Wage', '$Gender', '$License', '$Car')";
 
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

session_close();

?>