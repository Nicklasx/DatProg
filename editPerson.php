<?php  
	include_once 'mysql.php';

	if($_POST)
		{
			$sql = "UPDATE people SET FirstName=('".$_POST['FirstName']."'), 
			LastName=('".$_POST['LastName']."') WHERE ID=('".$_POST['ID']."')";

			$sql1 = "UPDATE cars SET Brands=('".$_POST['Brands']."') WHERE ID=('".$_POST['ID']."')";

			$sql2 = "UPDATE jobs SET Name=('".$_POST['Name']."') WHERE ID=('".$_POST['ID']."')";

			$sql3 = "UPDATE pets SET PetName=('".$_POST['PetName']."') WHERE ID=('".$_POST['ID']."')";

	    	$result = $conn->query($sql);
	    	$result1 = $conn->query($sql1);
	    	$result2 = $conn->query($sql2);
	    	$result3 = $conn->query($sql3);
	    	//echo "$result";
	    	header("location: index.php");
	    }
		$conn->close();
?>

<form method="post">
	<label>ID:</label><br>
	<input type="text" name="ID" required><br>
	<label>Edit first name:</label><br>
	<input type="text" name="FirstName"required><br>
	<label>Edit last name:</label><br>
	<input type="text" name="LastName"required><br>
	<label>Edit car:</label><br>
	<input type="text" name="Brands"required><br>
	<label>Edit job:</label><br>
	<input type="text" name="Name"required><br>
	<label>Edit pet:</label><br>
	<input type="text" name="PetName"required><br>
	<input type="submit" name="submit">
</form>