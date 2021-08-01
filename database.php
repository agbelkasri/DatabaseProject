<!DOCTYPE html>
<html lang="en-us">

<!--==================================================================
//
// Page: Crisler Arena Tickets Confirmation Page
// Description:
//   This web page confirms a ticket purchase by a customer for and
// upcoming event at Crisler Arena.
// 
//=================================================================-->

<head>
  
  <title>Confirmation Page, v5</title>
  <meta charset="UTF-8">
  
  <!-- External CSS link -->
  <link rel="stylesheet" type="text/css" 
  href="CrislerArena-ExternalStyles.css">

  <script type="text/javascript">
    "use strict";
    
    function loadTickets()
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
 
<body onload="loadTickets()">

  <!-- Menu section -->
  <div class="menuPanel">
    <h2>
      <a href="CrislerArena-Arena.html">Arena Page</a>
      <a href="CrislerArena-Events.html">Events Page</a>
      <a href="CrislerArena-Tickets.html">Tickets Page</a>
    </h2>
  </div>
  <hr>
  
  <!-- Left panel -->
  <div class="contentPanel3">
    
    <!-- Confirmation -->
    <p>
      See you soon at our arena!
      Here are your ticket details:
    </p>
    <?php

      // Customer name and e-mail
      echo "<label>Customer name:</label>";
      echo "<label>", $_GET["txtCustomerName"], "</label>";
      echo "<br>";
      echo "<label>Customer e-mail:</label>";
      echo "<label>", $_GET["txtCustomerEmail"], "</label>";
      echo "<br>";

      // Event name and date
      echo "<label>Event:</label>";
      echo "<label>", $_GET["cmbEvent"], "</label>";
      echo "<br>";
      echo "<label>Date:</label>";
      echo "<label>", $_GET["txtDate"], "</label>";
      echo "<br>";

      // Seat type
      echo "<label>Seat type:</label>";
      echo "<label>", $_GET["rgSeatType"], "</label>";
      echo "<br>";

      // Ticket count
      echo "<label>Ticket count:</label>";
      echo "<label>", $_GET["txtTickets"], "</label>";
      echo "<br>";

      // Costs
      echo "<label>Seat cost ($):</label>";
      echo "<label>", $_GET["txtSeatCost"], "</label>";
      echo "<br>";
      echo "<label>Subtotal ($):</label>";
      echo "<label>", $_GET["txtSubtotal"], "</label>";
      echo "<br>";
      echo "<label>Tax ($):</label>";
      echo "<label>", $_GET["txtTax"], "</label>";
      echo "<br>";
      echo "<label>Total ($):</label>";
      echo "<label>", $_GET["txtTotal"], "</label>";
      echo "<br>";

      // Payment type fieldset
      echo "<label>Payment type:</label>";
      echo "<label>", $_GET["rbPaymentType"], "</label>";
      echo "<br><br>";
  
      // File write
      echo "Administrative Use Only<br>";
      $sale =
        $_GET["txtCustomerName"] . "\n" .
        $_GET["txtCustomerEmail"] . "\n" .
        $_GET["cmbEvent"] . "\n" .
        $_GET["txtDate"] . "\n" .
        $_GET["rgSeatType"] . "\n" .
        $_GET["txtTickets"] . "\n" .
        $_GET["txtSeatCost"] . "\n" .
        $_GET["txtSubtotal"] . "\n" .
        $_GET["txtTax"] . "\n" .
        $_GET["txtTotal"] . "\n" .
        $_GET["rbPaymentType"];
      $file = $_GET["txtCustomerName"] . ".sale";
      file_put_contents($file, $sale);
      echo "File " . $file . " written to server.";

    ?>
    <br>

  </div>
  
</body>
 
</html>
