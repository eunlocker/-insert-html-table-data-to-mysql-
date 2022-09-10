 <?php
$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "testdb";
 
$conn = new mysqli($servername, $username, $password, $dbname);
 
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	$sql = "INSERT INTO DataTable (name,price,price2)
	VALUES ('" . $_POST['getname'] . "' , '" . $_POST['getprice1'] . "', '" . $_POST['getprice2'] . "')";
 
	if ($conn->query($sql) === TRUE) {
	  echo "New record created successfully";
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}

$conn->close();
?> 