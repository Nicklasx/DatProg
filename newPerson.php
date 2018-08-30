<?php
include_once 'mysql.php';
if($_POST)
	{
    	$sql = "INSERT INTO people (FirstName, LastName)
    	VALUES ('".$_POST["FirstName"]."', '".$_POST["LastName"]."')";

    	$sql1 = "INSERT INTO cars (Brands, PersonID) 
    	VALUES ('".$_POST["car"]."', LAST_INSERT_ID())";

    	$sql2 = "INSERT INTO jobs (Name, PersonID) 
    	VALUES ('".$_POST["job"]."', LAST_INSERT_ID())";

    	$sql3 = "INSERT INTO pets (PetName, PersonID) 
    	VALUES ('".$_POST["petname"]."', LAST_INSERT_ID())";

    	$result = $conn->query($sql);
    	$result1 = $conn->query($sql1);
    	$result2 = $conn->query($sql2);
    	$result3 = $conn->query($sql3);
    	header("location: index.php");
    }
	$conn->close();
?>

<form method="post">
	<label> First name:</label><br>
	<input type="text" name="FirstName"><br>

	<label> Last name:</label><br>
	<input type="text" name="LastName"><br>

	<label> Car brand:</label><br>
	<input type="text" name="car"><br>

	<label> Job:</label><br>
	<input type="text" name="job"><br>

	<label> Pet name:</label><br>
	<input type="text" name="petname"><br>

	<input type="submit" name="submit">
</form>