<?php
/*$mysqli = new mysqli("localhost","root","","registerdb");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
if (isset($_POST['submit'])) {
    $username = $_POST['user'];}
$sql = "SELECT firstname, Lastname, email, contact FROM registerinfo where email='$username'";

if ($result = $mysqli -> query($sql)) {
  // Get field information for all fields
  while ($fieldinfo = $result -> fetch_field()) {
    printf("FirstName: %s\n", $fieldinfo -> firstname);
    printf("LastName: %s\n", $fieldinfo -> lastname);
    printf("Email: %s\n", $fieldinfo -> eamil);
    printf("Contact: %d\n", $fieldinfo -> contact);
  }
  $result -> free_result();
}

$mysqli -> close();
?>*/


?>