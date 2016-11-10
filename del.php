<?php
  include 'db.php';

  $param = $_GET['abstract'];
  if(mysqli_query($conn, "DELETE FROM paper WHERE abstract = '$param'"))
  echo 'Delete Success';

 ?>
