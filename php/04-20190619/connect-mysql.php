<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
echo "Con chay khong?";
// Check connection
if (!$conn) {
  die("Ket noi bi loi roi! Day la loi cua no: " . mysqli_connect_error());
}
echo "Connected successfully";