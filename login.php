
	 <?php
		$servername = "localhost";
		$username = "root";
		$password = "toor";
		$dbname = "sampleuser";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}

		$username = $_GET['uname'];
		$password = $_GET['psw'];

		$sql = "SELECT username, password FROM userdata";
		$result = $conn->query($sql);

		$flag = 0;
		if ($result->num_rows > 0) {
		    // output data of each row
    		while($row = $result->fetch_assoc()) {
        		if ($row["username"] === $username && $row["password"] === $password) {
        			echo "Welcome";
        			$flag = 1;
        		}
    		}
		}
		if ($flag === 0) {
			echo "Not Found";
		}
		$conn->close();
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