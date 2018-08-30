<link rel="stylesheet" type="text/css" href="style.css">
<?php
	$servername = "127.0.0.1";
	$username = "root";
	$password = "";
	$database = "datprogproject";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $database);

	// Check connection
	if ($conn->connect_error) 
	{
	    die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM people INNER JOIN cars ON cars.PersonID = people.ID INNER JOIN jobs ON jobs.PersonID = people.ID INNER JOIN pets ON pets.PersonID = people.ID ";
	$result = $conn->query($sql);
	if ($result) 
	{
		echo "<table>
			 <tr>
			 <th>ID </th>
			 <th>First name </th>
			 <th>Last name </th>
			 <th>Car </th>
			 <th>Job </th>
			 <th>Pet name </th>
			 </tr>". "<br>";
	    // output data of each row
	    while($row = $result->fetch_assoc()) 
	    {
	    	echo "<tr><td>". $row["ID"]. "</td>";
	    	echo "<td>". $row["FirstName"]. "</td>";
	    	echo "<td>". $row["LastName"]. "</td>";
	    	echo "<td>". $row["Brands"]. "</td>";
	    	echo "<td>". $row["Name"]. "</td>";
	    	echo "<td>". $row["PetName"]. "</td>";
	    }
	} else 
	{
	    echo "0 results";
	}
?>