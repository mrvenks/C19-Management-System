<?php
$username = "root";
$password = '';
$servername = "localhost";
$dbname = "C19";
$con = mysqli_connect('localhost','root');
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$query="DELETE FROM WARD WHERE WNUM ='$_GET[rn]'";
$data=mysqli_query($conn,$query);

if ($data) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}
$conn->close();
header('location:warddisp.php');
?>