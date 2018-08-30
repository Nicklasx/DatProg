<?php
	include_once 'mysql.php';
	if($_POST)
		{
			$sql = "DELETE FROM people WHERE ID=('".$_POST['ID']."')";
	    	$result = $conn->query($sql);
	    	header("location: index.php");
	    }
		$conn->close();
?>

<form method="post">
	<label>ID:</label><br>
	<input type="text" name="ID"><br>
	<input type="submit" name="submit">
</form>