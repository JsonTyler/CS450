<?php
require('db.php');
include("auth.php");
  //form submitted
  if(isset($_SESSION['username']))
        $user = $_SESSION['username'];
        if($user){
            $res = mysqli_query($con,
                "SELECT `id` FROM `jacksonstateproject`.`users` WHERE `username`='$user'");
    $id = mysqli_fetch_object($res)->id;
}
  //first load the values from form in the html
    //$id = $_POST['id'];
    $subject = $_POST['subject'];
    $price = $_POST['price'];
    $isbn = $_POST['isbn'];
    $author = $_POST['author'];
    $title = $_POST['title'];
    $edition = $_POST['edition'];
    $quality = $_POST['quality'];
    $actions = $_POST['actions'];
    $email_user = $_POST['email_user'];
    //if(!isset($subject))
    //  echo "Nothing Here!";
    //else
    //  echo $subject;
    //$con = mysqli_connect("localhost","root","","jackson") or die(mysqli_connect_error());
    $query = "INSERT INTO `books` (`subject`, `price`, `isbn`, `author`, `title`, `edition`, `quality`, `actions`, `email_user`, `id`)
     VALUES ('$subject', '$price', '$isbn', '$author', '$title', '$edition', '$quality', '$actions', '$email_user', '$id');";
            $response = mysqli_query($con, $query) or die(error_get_last());
?>

<!DOCTYPE html>

<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
      <title>Book Post</title>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
      <link rel="stylesheet" type="text/css" href="assets/css/main.css" />
      
    <title>JSU Book Exchange</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
</head>

<body>
  <header>
    <div id="nav">

       <ul>
         <li><a href="index.php" id="logo">JSU Book Exchange</a></li>
         <li><a href="bookpostdesign.php">Book Submissions</a></li>
         <li><a href="search.php">Book Search</a></li>
         <li><a href="contactus.php">Contact Us</a></li>
         <li><a href="logout.php">Logout</a></li>
       </ul>
    </div>
</header>
    <div class="form">
      <p>Thank you, <?php echo $_SESSION['username']; ?>! Your book has been posted.</p>
    </div>
  
<main>

</main>
<footer>
  <div class="footer">
    Copyright &copy; JSUBOOKEXCHANGE.COM

</div>
  </footer>

</body>
</html>
