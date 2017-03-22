<?php
  require('db.php');
  include("auth.php");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Contact US</title>
    <link rel="stylesheet" type="text/css" href="test.css">
       <title>JSU Book Exchange</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
  </head>
  <body>
    <header>
			<div id="nav">

				 <ul>
           <li><a href="index.php" id="logo">JSU Book Exchange</a></li>
           <li><a href="dashboard.php">Dashboard</a></li>
           <li><a href="logout.php">Logout</a></li>
           <li><a href="contactus.php">Contact Us</a></li>
				 </ul>
		 </div>

      <div class="form">
          <h1>Questions, thoughts, or concerns?</h1>
          <form name = "myemailform" action="form-to-email.php" method="post" >
            <input type="text" name="name" placeholder="Name" required />
            <input type="email" name="email" placeholder="Email" required />
            <textarea name="message" placeholder="Message"></textarea>
            <input type="submit" value="Send Form">
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
