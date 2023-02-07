<?php
$fullName = filter_input(INPUT_POST, 'fullName');
$emailUsed = filter_input(INPUT_POST, 'emailUsed');
$commentInput = filter_input(INPUT_POST, 'commentInput');

if (!empty($fullName)){
    if (!empty($emailUsed)){
          if(!empty($commentInput)){

  
                $host = "localhost";
                $dbusername = "root";
                $dbpassword = "";
                $dbname = "mydb";

// CONNECTION HERE
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
    die('Connect Error (' . mysqli_connect_errno() . ') '
    . mysqli_connect_error());
}else{
    $sql = "INSERT INTO myguests (fullName, emailUsed, commentInput)
    values ('$fullName', '$emailUsed', '$commentInput')";
    if ($conn->query($sql)){
        echo "New Record has been added.";
    }else{
        echo "Error: ". $sql . "<br>". $conn->error;
    } 
    $conn->close();
    }


            } else {
                echo "Comment should not be empty, Try Again.";
                die ();
            }
        } else {
            echo "Email should not be empty, Try Again.";
            die ();
        }
    } else {
        echo "Name should not be empty, Try Again.";
        die();
    } 



?>