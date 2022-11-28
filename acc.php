<?php
$x=$_POST["uname"];
echo $x;
$y=$_POST["psw"];
echo $y;
$database="localhost";
$username="root";
$password="";
$db="earoma";
$conn = new mysqli($database, $username, $password,$db);
$sql="insert into account values('$x','$y')";

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
?>
