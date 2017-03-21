<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
			<title>Registration</title>
		<link rel="stylesheet" type="text/css" href="test.css" />
			<title>JSU Book Exchange</title>
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
	</head>
	<body>
		<?php
		require('db.php');


		// If form submitted, insert values into the database.
		if (isset($_REQUEST['username'])){
		        // removes backslashes
			$username = stripslashes($_REQUEST['username']);
		        //escapes special characters in a string
			$username = mysqli_real_escape_string($con,$username);
			$email = stripslashes($_REQUEST['email']);
			$email = mysqli_real_escape_string($con,$email);
			$password = stripslashes($_REQUEST['password']);
			$password = mysqli_real_escape_string($con,$password);
			$trn_date = date("Y-m-d H:i:s");


						if (ctype_alnum($username) && ctype_alnum($password)) {
			      	if (strlen($username) < 1) {
			        	echo ": Enter a username!";
			      	} elseif (strlen($username) > 50) {
			        	echo ": Your username is too long!";
								die();
			      	} else {
			        	echo ": Have a good night!";
			      	}
						}

					  $query = "INSERT into `users` (username, password, email, trn_date)
		VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
		        $result = mysqli_query($con,$query);
		        if($result){
		            echo "<div class='form'>
		<h3>You are registered successfully.</h3>
		<br/>Click here to <a href='login.php'>Login</a></div>";
		        }
		    }else{
		?>

		<header>
			<div id="nav">

				 <ul>
					 <li><a href="index.php" id="logo">JSU Book Exchange</a></li>
					 <li><a href="login.php">Login</a></li>
					 <li><a href="registration.php">Register</a></li>
					 <li><a href="dashboard.php">Dashboard</a></li>
					 <li><a href="logout.php">Logout</a></li>
					 <li><a href="contactus.php">Contact Us</a></li>
				 </ul>

		 </div>

			<div class="form">
				<h1>Register</h1>
				<form name="registration" action="registration.php" method="post">
					<input type="text" name="username" placeholder="Username" required />
					<input type="email" name="email" placeholder="Email" required />
					<input type="password" name="password" placeholder="Password" required />
					<input type="submit" name="submit" value="Register" />
				</form>
			</div>
		</header>

<?php } ?>

<footer>
	<div class="footer">
Copyright &copy; JSUBOOKEXCHANGE.COM

</FORM>
</div>
</footer>
</body>
</html>
