<!DOCTYPE html>
<html lang="en-us">

<head>
  
  <title>Confirmation Page</title>
  <meta charset="UTF-8">
  
  <!-- External CSS link -->
  <link rel="stylesheet" type="text/css" 
  href="CrislerArena-ExternalStyles.css">

  <script type="text/javascript">
    "use strict";
    
    function loadTasks()
    {
      $(function()
      {    
        var queryString = "request=list";
        $.get(tbTask, 
          queryString);
      });
    }
  </script>

</head>
 
<body onload="loadTasks()">
  
  <!-- Left panel -->
  <div class="contentPanel3">
    <?php

      echo "<label>Task name:</label>";
      echo "<label>", $_GET["tbTask"], "</label>";
      echo "<br>";
      echo "<label>Customer e-mail:</label>";
      echo "<label>", $_GET["txtCustomerEmail"], "</label>";
      echo "<br>";

      echo "<label>Event:</label>";
      echo "<label>", $_GET["cmbEvent"], "</label>";
      echo "<br>";
      echo "<label>Date:</label>";
      echo "<label>", $_GET["txtDate"], "</label>";
      echo "<br>";
    ?>
    <br>

  </div>
  
</body>
 
</html>
