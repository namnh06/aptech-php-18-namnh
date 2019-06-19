<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ap_18_4";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Ket noi bi loi roi! Day la loi cua no: " . mysqli_connect_error());
}
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "INSERT INTO users(name, email, password)
VALUES ('$name','$email','$password')";
if (mysqli_query($conn, $sql)) {
  echo "Created user successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);