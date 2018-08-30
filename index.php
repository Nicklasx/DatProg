<?php  
	include_once 'mysql.php';
	$conn->close();
?>
<form action="newPerson.php">
	<button type="submit">Add new person</button>
</form>
<form action="deletePerson.php">
	<button type="submit">Delete person</button>
</form>
<form action="editPerson.php">
	<button type="submit">Edit a person</button>
</form>