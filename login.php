<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
      <title>Login</title>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/forms.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/navigation.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/utils.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/submitbook.css" />
      <title>JSU Book Exchange</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
</head>

  <?php
  require('db.php');
  session_start();
  // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
        // removes backslashes
	       $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	       $username = mysqli_real_escape_string($con,$username);
	       $password = stripslashes($_REQUEST['password']);
	       $password = mysqli_real_escape_string($con,$password);
	        //Checking is user existing in the database or not
         $query = "SELECT * FROM `users` WHERE username='$username'
         and password='".md5($password)."'";

         $result = mysqli_query($con,$query) or die(mysql_error());
	       $rows = mysqli_num_rows($result);

         if($rows==1){
	       $_SESSION['username'] = $username;
            // Redirect user to index.php
	    header("Location: search.php");
         }else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	}
    }else{
?>
<body>
<header>
  <div id="nav">

     <ul>
       <li><a href="index.php" id="logo">JSU Book Exchange</a></li>
       <li><a href="registration.php">Register</a></li>
     </ul>

 </div>
</header>
<main>
<center>
<div class="content">
 <div class="form">
   <form action="login.php" method="post" name="login">
     <input type="text" name="username" placeholder="Username" required />
     <input type="password" name="password" placeholder="Password" required />
     <input name="submit" type="submit" value="Login" />
   </form>
   <p>Not registered yet? <a href='registration.php'>Register Here</a></p>
  </FORM>
  </div>
  </div>
  </center>
<?php } ?>
>
</div>
</main>
<footer>
	<div class="footer">
Copyright &copy; JSUBOOKEXCHANGE.COM

</footer>
</body
</html>
