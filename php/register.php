<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registerdb";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


// receive form data
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$email = $_POST['email'];
$contact = $_POST['phone'];
$pass = $_POST['pass'];

// insert data into table
$sql = "INSERT INTO registerinfo (firstname, lastname, email, contact, pass) VALUES ('$firstname', '$lastname', '$email', '$contact', '$pass')";

if ($conn->query($sql) === TRUE) {
  echo "Data stored successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error ;
}

$conn->close();
?>
