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

      $servername = "DatabaseBuild";
      $username = "root";
      $password = "mysql";
      $conn = new mysqli($servername, $username, $password);

      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      echo "Connected successfully";

      $sql = INSERT INTO tbTasks (Name, Category, EventDate, Tickets)
      VALUES ($_GET["task"], $_GET["category"], $_GET["date"], $_GET["taskPriority"]);

      echo "<label>Task name:</label>";
      echo "<label>", $_GET["task"], "</label>";
      echo "<br>";
      echo "<label>Category:</label>";
      echo "<label>", $_GET["category"], "</label>";
      echo "<br>";

      echo "<label>Date:</label>";
      echo "<label>", $_GET["date"], "</label>";
      echo "<br>";
      echo "<label>Priority:</label>";
      echo "<label>", $_GET["taskPriority"], "</label>";
      echo "<br>";
    ?>
    <br>

  </div>
  
</body>
 
</html>
