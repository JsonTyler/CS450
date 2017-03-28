<?php
require('db.php');
include("auth.php");

?>

<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Search Books</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="assets/css/search.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/utils.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/navigation.css" />
  <title>JSU Book Exchange</title>
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
 </head>
 <body>


   <header>
     <div id="nav">
        <ul>
          <li><a href="index.php" id="logo">JSU Book Exchange</a></li>
          <li><a href="contactus.php">Contact Us</a></li>
          <li><a href="bookpostdesign.php">Book Submissions</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
     </div>
  </header>

  <main>
    <div class="container">
      <div id="searchHeader">
        <figure>
          <img src="https://cdn.discordapp.com/attachments/283288786551570432/295968807359610880/download.jpg" alt="Stacked books icon" class="logo-image" id="left_image">
        </figure>
        <h1>Welcome to JSU Book Exchange! The center for all your Computer Science TextBook Needs!</h1>
        <figure>
          <img src="https://cdn.discordapp.com/attachments/283288786551570432/295968807359610880/download.jpg" alt="Stacked books icon" class="logo-image" id="right_image">
        </figure>
      </div>
      <!-- forms -->
      <div class="form-group">
       <div class="input-group">
        <span class="input-group-addon">Search</span>
        <input type="text" name="search_text" id="search_text" placeholder="Search by subject, price, isbn, author, title..." class="form-control" />
       </div>
      </div>
      <br />
      <div id="result"></div>
     </div>
   </div>
  </main>

  <footer>
    <div class="footer">
      Copyright &copy; JSUBOOKEXCHANGE.COM
    </div>
  </footer>
 </body>
</html>

<!-- this can be moved into a assets/js folder -->
<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>
