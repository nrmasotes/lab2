<?php
// define variables and set to empty values
$nameErr = $emailErr = "";
$fullName = $emailUsed = $commentInput = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fullName"])) {
    $nameErr = "Name is required";
  } else {
    $fullName = test_input($_POST["fullName"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$fullName)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["emailUsed"])) {
    $emailErr = "Email is required";
  } else {
    $emailUsed = test_input($_POST["emailUsed"]);
    // check if e-mail address is well-formed
    if (!filter_var($emailUsed, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["commentInput"])) {
	$commentInput = "";
  } else {
    $commentInput = test_input($_POST["commentInput"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

	$servername = "localhost";
	$username = "webprogmi211";
	$password = "webprogmi211";
	$dbname = "webprogmi211";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}
	
	$sql = "INSERT INTO nrmasotes_myguests (fullName, emailUsed, commentInput)
	VALUES ('$fullName', '$emailUsed', '$commentInput')";
	
	if ($conn->query($sql) === TRUE) {
	echo "New record created successfully.";
	} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
echo "<h3> Visitor's Log</h3>";
echo $fullName;
echo "<br>";
echo $emailUsed;
echo "<br>";
echo $commentInput;
echo "<br>";
	$conn->close();
	

}
?>