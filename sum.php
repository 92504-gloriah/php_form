<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "api_class";

$firstnumber = $_POST["num1"];
$secondnumber = $_POST["num2"];

$sum = $firstnumber + $secondnumber;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO sum (FirstNumber, SecondNumber, Result)
VALUES ($firstnumber, $secondnumber, $sum)";

if ($conn->query($sql) === TRUE) {
  echo "The sum of " . $firstnumber . " and " . $secondnumber . " is " . $sum;
}

else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
