<?php 
$conn = mysqli_connect("localhost", "root", "", "flight_db");
// $conn= new mysqli('localhost','root','','flight_db')or die("Could not connect to mysql".mysqli_error($con));
function queryku($query){
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}
?>