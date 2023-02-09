<!DOCTYPE html>
<html>
<body>

<?php
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



$sql = "SELECT fullName, emailUsed, commentInput FROM nrmasotes_myguests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " Name: ". $row["fullName"]. " - Email: " . $row["emailUsed"] . " - Comment/Suggestion: " . $row["commentInput"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>