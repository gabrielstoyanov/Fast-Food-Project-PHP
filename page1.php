<?php
session_start();
?>

<html>
<head> 
<title>FastFood</title> 
<link rel="stylesheet" type="text/css" href="style.css">
</head> 
<body>

<center>

<form action="http://rest-orders.net/inf335/return.php" method="POST">


<div class="name">

<label for="fname">*First name:</label>
<input type="text" id="fname" name="fname" value='<?php echo $_POST['fname'];?>'></br>


<label for="lname">*Last Name:</label>
<input type="text" id="lname" name="lname" value='<?php echo $_POST['lname'];?>'></br>

<?php
if($_SESSION["wrongName"] != ""){ echo $_SESSION["wrongName"];}
?>
</div>

<div class="gender">

<label for="gender">*Gender:</label></br>
<input type="radio" id="gender" name="gender" value="Female" <?php if($_POST['gender'] == "Female") {echo 'checked = "checked"';}?>><label>Female</label></br>
<input type="radio" id="gender" name="gender" value="Male" <?php if($_POST['gender'] == "Male") {echo 'checked = "checked"';}?>><label>Male</label></br>
<?php
if($_SESSION["wrongRadio"] != ""){ echo $_SESSION["wrongRadio"];}
?>
</div>

<div class="phone">

<label for="phone">*Phone:</label>
<input type="text" id="phone" name="phone" value='<?php echo $_POST['phone']; ?>'></br>
<?php
if($_SESSION["wrongNumber"] != ""){ echo $_SESSION["wrongNumber"];}
?>
</div>

<div class="position">

<label for="position">*Position:</label></br>
<input type="radio" id="position" name="position" value="Cleaner" <?php if($_POST['position'] == "Cleaner") {echo 'checked = "checked"';}?>><label>Cleaner</label></br>
<input type="radio" id="position" name="position" value="Waiter" <?php if($_POST['position'] == "Waiter") {echo 'checked = "checked"';}?>><label>Waiter</label></br>
<input type="radio" id="position" name="position" value="Manager" <?php if($_POST['position'] == "Manager") {echo 'checked = "checked"';}?>><label>Manager</label></br>
<input type="radio" id="position" name="position" value="Cook" <?php if($_POST['position'] == "Cook") {echo 'checked = "checked"';}?>><label>Cook</label></br>
<input type="radio" id="position" name="position" value="Cashier" <?php if($_POST['position'] == "Cashier") {echo 'checked = "checked"';}?>><label>Cashier</label></br>
<input type="radio" id="position" name="position" value="Driver" <?php if($_POST['position'] == "Driver") {echo 'checked = "checked"';}?>><label>Driver</label></br>
<?php
if($_SESSION["wrongRadio"] != ""){ echo $_SESSION["wrongRadio"];}
?>
</div>

<div class="wage">

<label for="wage">*Wage:</label>
<input type="text" id="wage" name="wage" value='<?php echo $_POST['wage']; ?>'></br>
<?php
if($_SESSION["wrongNumber"] != ""){ echo $_SESSION["wrongNumber"];}
?>
</div>

<div class="car">

<label for="car">Car/License:</label></br>
<input type="checkbox" id="license" name="license" value="" <?php if(isset($_POST['license'])) echo "checked='checked'"; ?>><label>Driver's License</label></br>
<input type="checkbox" id="car" name="car" value="" <?php if(isset($_POST['car'])) echo "checked='checked'"; ?>><label>Car available</label></br>

</div>

<div class="pass">

<label for="fname">*Enter Password:</label>
<input type="password" id="pass1" name="pass1" value=""></br>
<label for="fname">*Repeat Password:</label>
<input type="password" id="pass2" name="pass2" value=""></br>
<?php
if($_SESSION["wrongPassword"] != ""){ echo $_SESSION["wrongPassword"];}
?>
</div>

<input class="button" type="submit" value="Submit">
<?php
session_close();
?>
</form>

</center>

</body></html>