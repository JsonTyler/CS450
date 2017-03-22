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
					 <li><a href="dashboard.php">Dashboard</a></li>
					 <li><a href="logout.php">Logout</a></li>
           <li><a href="contactus.php">Contact Us</a></li>
				 </ul>

		 </div>
      <div class="form">
        <p>Welcome <?php echo $_SESSION['username']; ?>!</p>
        <p>Write text here.</p>
      </div>
    </header>
    <main>
      <div class="container">
        <section>
          <h1>UNDER CONSTRUCTION!</h1>
          <h2>Except for the login and register. Yeah, they work.</h2>
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
