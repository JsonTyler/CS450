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
         <li><a href="search.php">Book Search</a></li>
         <li><a href="contactus.php">Contact Us</a></li>
         <li><a href="logout.php">Logout</a></li>
       </ul>
    </div>

    <div class="form">

      <h3>Post your book below:  </h3><br /><br />
      <form name="bookpost" action="bookpost.php" method="POST">

        <label>Class: </label>
        <select id="subject" name="subject">
                <option value="CSC 118">Programming Fundamentals</option>
                <option value="CSC 119">Object-Oriented Programming</option>
                <option value="CSC 225">Discrete Structures</option>
                <option value="CSC 228">Digital Logic</option>
                <option value="CSC 214">Programming for the Web</option>
                <option value="CSC 216">Computer Architecture and Organization</option>
                <option value="CSC 312">Advanced Computer Architecture</option>
                <option value="CSC 323">Algorithm Design and Analysis</option>
                <option value="CSC 325">Operating Systems</option>
                <option value="CSC 330">Database Systems</option>
                <option value="CSC 435">Computer Networks</option>
                <option value="CSC 437">Computer Security</option>
                <option value="CSC 441">Computers and Society</option>
                <option value="CSC 450">Senior Project</option>
                <option value="CSC 475">Software Engineering</option>
                <option value="CSC 499">Cisco</option>
         </select><br /><br />

        <label>Price: </label>
        <input type="number" min="0.01" step="0.01" max="50000" name="price" placeholder="$0.00" required><br /><br />

        <label>ISBN: </label>
        <input type="number" name="isbn" placeholder="ISBN #" required><br /><br />

        <label>Author: </label>
        <input type="text" name="author" placeholder="Author" required><br /><br />

        <label>Title: </label>
        <input type="text" name="title" placeholder="Title" required><br /><br />

        <label>Edition: </label>
        <input type="number" name="edition" placeholder="Edition #" required><br /><br />

        <label>Condition:</label>
        <select id = "quality" name = "quality">
               <option value = "Poor">Poor</option>
               <option value = "Okay">Okay</option>
               <option value = "Average">Average</option>
               <option value = "Good">Good</option>
               <option value = "Very Good">Very Good</option>
               <option value = "Excellent">Excellent</option>
        </select> <br /><br />

         <label>Action: </label>
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
