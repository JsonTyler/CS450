<?php
require('db.php');
include("auth.php");
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="main1.css">
    <title>JSU Book Exchange</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

       <title>JSU Book Exchange</title>

  </head>
  <body>
    <header>
      <div class="container">
        <a href="index.html" id="logo">JSU Book Exchange</a>
        <nav>
          <ul>
            <li><a href="login.html">login</a></li>
            <li><a href="register.html">register</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <main>
      <div class="container">
        <section>
          <h1>What are you posting: </h1>
          <form action="index.php" method="POST">
            <input type="number" name="isbn" placeholder="isbn #" required>
            <input type="text" name="author" placeholder="author" required>
            <input type="text" name="title" placeholder="title" required>
            <input type="number" name="edition" placeholder="edition" required>
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
        copyright &copy; JSUBOOKEXCHANGE.COM

<FORM METHOD="LINK" ACTION="contactus.html">
<INPUT TYPE="submit" VALUE="Contact Us">
</FORM>
      </div>
    </footer>
  </body>
  </html>
