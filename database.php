<?php
include 'db.php';

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
