<?php
session_start();
if(isset($_POST["a"]) || isset($_POST["a#"]) || isset($_POST["b"]) || isset($_POST["c"]) ||
  isset($_POST["c#"]) || isset($_POST["d"]) || isset($_POST["d#"]) || isset($_POST["e"]) ||
    isset($_POST["f"]) || isset($_POST["f#"]) || isset($_POST["g"]) || isset($_POST["g#"]))
{
  $_SESSION["notesSelected"] = 1;
}
else {
    unset($_SESSION["notesSelected"]);
}
?>

<html>
<head>
  <title>Scale Utility</title>

  <!-- CSS and JS files -->
  <!--Bootstrap JS, jQuery-->
  <script src="../js/jquery-1.11.3.min.js"></script>
  <script src="bootstrap-3.3-2.5-dist/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="JS/jquery-ui-1.11.4/jquery-ui.min.css">
  <script src="JS/jquery-ui-1.11.4/external/jquery/jquery.js"></script>
  <script src="JS/jquery-ui-1.11.4/jquery-ui.min.js"></script>

  <!-- Tooltip script for info button-->
  <script>
    $(function(){
        $("#item1").popover();
    });
  </script>

  <link rel="stylesheet" href="bootstrap-3.3-2.5-dist/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  <?php
    if(!isset($_SESSION["notesSelected"])){
      include("PHP/input.php");
    }
    else {
      include("PHP/output.php");
    }
   ?>


</body>

</html>
