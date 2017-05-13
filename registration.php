<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
			<title>Registration</title>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
			<link rel="stylesheet" type="text/css" href="assets/css/forms.css" />
      <link rel="stylesheet" type="text/css" href="assets/css/navigation.css" />
      <link rel="stylesheet" type="text/css" href="assets/css/utils.css" />
      <link rel="stylesheet" type="text/css" href="assets/css/submitbook.css" />
      
			<title>JSU Book Exchange</title>
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
	</head>
	<body>
		

		<header>
			<div id="nav">

				 <ul>
					 <li><a href="index.php" id="logo">JSU Book Exchange</a></li>
					 <li><a href="login.php">Login</a></li>
				 </ul>

		 </div>

			
		</header>
		<main>
		<center>
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
			        	header('Location: thankyou.php');
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
		</center>
		<div class="form">
				
				<form name="registration" action="registration.php" method="post">
					<input type="text" name="username" placeholder="Username" required />
					<input type="email" name="email" placeholder="Email" required />
					<input type="password" name="password" placeholder="Password" required />
					<input type="submit" name="submit" value="Register" />
				</form>
			</div>

<?php } ?>

<footer>
	<div class="footer">
Copyright &copy; JSUBOOKEXCHANGE.COM

</FORM>
</div>
</footer>
</main>
</body>
</html>
