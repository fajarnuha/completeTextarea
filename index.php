<!DOCTYPE html>
<html>
<head>
  <title>Tugas Progweb</title>
</head>
<body>
  <form method="POST" action="insert.php">
    <textarea id="abstract_field" name="abstract" placeholder="abstract" rows="3" cols="60"></textarea><br>
    <textarea id="problem_field" name="problem" placeholder="problem" rows="3" cols="60"></textarea><br>
    <textarea id="solution_field" name="solution" placeholder="solution" rows="3" cols="60"></textarea><br>
    <textarea id="conclusion_field" name="conclusion" placeholder="conclusion" rows="3" cols="60"></textarea><br>
    <input type="submit" value="Insert">
  </form>
  <button type="button" id="mybutton">Complete!</button>
  <table border="1">
    <tr align="center">
      <td>abstract</td>
      <td>problem</td>
      <td>solution</td>
      <td>conclusion</td>
    </tr>
			<?php
			include("db.php");

			$result=mysqli_query($conn, "SELECT * FROM paper");

			while($test = mysqli_fetch_assoc($result))
			{
				$id = $test['abstract'];
				echo "<tr align='center'>";
				echo"<td><font color='black'>" .$test['abstract']."</font></td>";
				echo"<td><font color='black'>" .$test['problem']."</font></td>";
				echo"<td><font color='black'>". $test['solution']. "</font></td>";
				echo"<td><font color='black'>". $test['conclusion']. "</font></td>";
				echo"<td> <a href ='del.php?abstract=$id'><center>Delete</center></a></td>";
				echo "</tr>";
			}
			?>
</table>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script type="text/javascript">
  $(function() {
    var availableTags = <?php include('database.php'); ?>;
    var auto = [];
    for(var r in availableTags){
      auto.push(availableTags[r].abstract);
    }

    $('#mybutton').click(function(){
      var q = $('#abstract_field').val();
      var row;
      for(var r in availableTags){
        if(availableTags[r].abstract == q) row = availableTags[r];
      }
      $('#problem_field').val(row.problem);
      $('#solution_field').val(row.solution);
      $('#conclusion_field').val(row.conclusion);
    });

    $("#abstract_field").autocomplete({
        source: auto
    });
  });
  </script>

</body>
</html>
