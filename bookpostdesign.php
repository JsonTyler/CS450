<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
      <title>Book Post</title>
    <link rel="stylesheet" type="text/css" href="test.css" />
    <title>JSU Book Exchange</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
</head>

<body>
  <header>
    <div id="nav">

       <ul>
         <li><a href="index.php" id="logo">JSU Book Exchange</a></li>
         <li><a href="logout.php">Logout</a></li>
         <li><a href="contactus.php">Contact Us</a></li>
       </ul>
    </div>

    <div class="form">

      <h3>What are you posting: </h3>
      <form name= "bookpost" action="bookpost.php" method="POST">
        <input type="number" name="isbn" placeholder="ISBN #" required><br /><br />
        <input type="text" name="author" placeholder="Author" required><br /><br />
        <input type="text" name="title" placeholder="Title" required><br /><br />
        <input type="number" name="edition" placeholder="Edition #" required><br /><br />
         <select id = "actions" name = "actions">
                <option value = "Buy">Buy</option>
                <option value = "Sell">Sell</option>
                <option value = "Trade">Trade</option>
         </select> <br /><br />
        <input type="submit" value="POST" name="submit">
      </form>

  </div>
  </header>

<footer>
  <div class="footer">
    Copyright &copy; JSUBOOKEXCHANGE.COM

</div>
  </footer>

</body>
</html>
