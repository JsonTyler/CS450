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
    echo $id;
}

  //first load the values from form in the html
    //$id = $_POST['id'];
    echo "<br><br>".$id."<br>";
    $isbn = $_POST['isbn'];
    echo "<br><br>".$isbn."<br>";
    $author = $_POST['author'];
    echo "<br><br>".$author."<br>";
    $title = $_POST['title'];
    echo "<br><br>".$title."<br>";
    $edition = $_POST['edition'];
    echo "<br><br>".$edition."<br>";
    $actions = $_POST['actions'];
    echo "<br><br>".$actions."<br>";

    $con = mysqli_connect("localhost","root","","jackson") or die(mysqli_connect_error());

    $query = "INSERT INTO `books` (`isbn`, `author`, `title`, `edition`, `actions`, `id`) VALUES ('$isbn', '$author', '$title', '$edition', '$actions', '$id');";
            $response = mysqli_query($con, $query);


//check if the user actually set those values and that they are not left Empty
//if(isset($isbn) && isset($author) && isset($title) && isset($edition) && isset($action)){
//
//}


?>
