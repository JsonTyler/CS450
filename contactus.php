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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/forms.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/utils.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/navigation.css" />
       <title>JSU Book Exchange</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
  </head>
  <body>
    <header>
      <div id="nav">

         <ul>
           <li><a href="index.php" id="logo">JSU Book Exchange</a></li>
           <li><a href="search.php">Book Search</a></li>
           <li><a href="bookpostdesign.php">Book Submissions</a></li>
           <li><a href="logout.php">Logout</a></li>
         </ul>
      </div>

      <div class="form">
          <h1>Questions, thoughts, or concerns?</h1>
          <form name = "myemailform" action="form-to-email.php" method="post" >
            <input type="text" name="name" placeholder="Name" required /><br /><br />
            <input type="email" name="email" placeholder="Email" required /><br /><br />
            <textarea name="message" placeholder="Message" rows="10" cols="30"></textarea><br /><br />
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
