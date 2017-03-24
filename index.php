<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
      <title>Welcome Home</title>
    <link rel="stylesheet" type="text/css" href="test.css" />
      <title>JSU Book Exchange</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
  </head>

  <body>
    <header>
			<div id="nav">

				 <ul>
					 <li><a href="index.php" id="logo">JSU Book Exchange</a></li>
           <li><a href=#>Welcome <?php echo $_SESSION['username'];?>!</a></li>
					 <li><a href="dashboard.php">Dashboard</a></li>
					 <li><a href="logout.php">Logout</a></li>
           <li><a href="contactus.php">Contact Us</a></li>
				 </ul>

		 </div>
     <div class="form">
       <h1>Submissions</h1>
       <form name="submissions" action="index.php" method="post">
         <input type="text" name="title" placeholder="Title" required />
         <input type="text" name="author" placeholder="Author" required /><br><br />
         <input type="number" name="isbn" placeholder="ISBN #" required /><br /><br />
         <select name="actions">
            <option value="Buy">Buy</option>
            <option value="Sell">Sell</option>
            <option value="Trade">Trade</option>
         </select> <br />
         <input type="submit" name="submit" value="Post" />
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
