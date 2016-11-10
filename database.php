<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "progweb";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
  die("Connection failed ".mysqli_connect_error());
}

$query = "SELECT * FROM paper";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_assoc($result)){
    //$data[] = $row['abstract'];
    $data[] = $row;
  }
}

echo json_encode($data);
?>
