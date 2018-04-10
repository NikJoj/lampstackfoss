	<?php
		$servername = "localhost";
		$username = "root";
		$password = "toor";
		$dbname = "sampleuser";
		// Create connection
		$conn = new MySQLi($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_errno) {
			echo "echo error";
		    die("Connection failed: ".$conn->connect_error);
		}
		else{
		$username = $_GET['uname'];
		$password = $_GET['psw'];

		$sql = "INSERT INTO userdata (username, password)
		VALUES ('".$username."', '".$password."')";

		if ($conn->query($sql) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();
	}
	?>
	<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 

	<p>
		<a href="/">Go Back</a>
	</p>

</body>
</html>
