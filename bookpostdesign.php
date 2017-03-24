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

  </header>
</header>
<main>
  <div class="form">
    <section>
      <h1>What are you posting: </h1>
      <form action="bookpost.php" method="POST">
        <input type="number" name="isbn" placeholder="isbn #" required><br /><br />
        <input type="text" name="author" placeholder="author" required><br /><br />
        <input type="text" name="title" placeholder="title" required><br /><br />
        <input type="number" name="edition" placeholder="edition" required><br /><br />
         <select id = "actions" name = "actions">
                <option value = "Buy">Buy</option>
                <option value = "Sell">Sell</option>
                <option value = "Trade">Trade</option>
         </select>
        <input type="submit" value="POST" name="submit">
      </form>
    </section>
  </div>
</main>
<footer>
  <div class="footer">
    Copyright &copy; JSUBOOKEXCHANGE.COM

</div>
  </footer>

</body>
</html>
