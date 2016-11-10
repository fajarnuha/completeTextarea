<!DOCTYPE html>
<html>
<head>
  <title>Tugas Progweb</title>
</head>
<body>
  <form method="get" action="action_page.php">
    <textarea id="abstract_field" name="abstract" placeholder="abstract" rows="3" cols="60"></textarea><br>
    <textarea id="problem_field" name="problem" placeholder="problem" rows="3" cols="60"></textarea><br>
    <textarea id="solution_field" name="solution" placeholder="solution" rows="3" cols="60"></textarea><br>
    <textarea id="conclusion_field" name="conclusion" placeholder="conclusion" rows="3" cols="60"></textarea>
  </form>
  <button type="button" id="mybutton">Complete!</button>
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
