<?php
  include 'db.php';

  $abstract = $_POST['abstract'];
  $problem = $_POST['problem'];
  $solution = $_POST['solution'];
  $conclusion = $_POST['conclusion'];

  $sql = "INSERT INTO paper VALUES('$abstract', '$problem', '$solution', '$conclusion')";
  if(mysqli_query($conn, $sql)) echo "Success";
 ?>
