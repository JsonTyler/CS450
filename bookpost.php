<?php
require('db.php');
include("auth.php");

  //form submitted

  if(isset($_SESSION['username']))
        $user = $_SESSION['username'];

        if($user){
            $res = mysqli_query($con,
                "SELECT `id` FROM `jackson`.`users` WHERE `username`='$user'");

    $id = mysqli_fetch_object($res)->id;

}

  //first load the values from form in the html
    //$id = $_POST['id'];

    $isbn = $_POST['isbn'];

    $author = $_POST['author'];

    $title = $_POST['title'];

    $edition = $_POST['edition'];

    $actions = $_POST['actions'];


    $con = mysqli_connect("localhost","root","","jackson") or die(mysqli_connect_error());

    $query = "INSERT INTO `books` (`isbn`, `author`, `title`, `edition`, `actions`, `id`) VALUES ('$isbn', '$author', '$title', '$edition', '$actions', '$id');";
            $response = mysqli_query($con, $query);


//check if the user actually set those values and that they are not left Empty
//if(isset($isbn) && isset($author) && isset($title) && isset($edition) && isset($action)){
//
//}
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
         <li><a href="bookpostdesign.php">Book Submissions</a></li>
         <li><a href="contactus.php">Contact Us</a></li>
         <li><a href="logout.php">Logout</a></li>
       </ul>
    </div>

    <div class="form">
      <p>Thank you, <?php echo $_SESSION['username']; ?>! Your book has been posted.</p>
    </div>
  </header>
</header>
<main>

</main>
<footer>
  <div class="footer">
    Copyright &copy; JSUBOOKEXCHANGE.COM

</div>
  </footer>

</body>
</html>
