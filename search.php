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

   </header>
  <div class="container">
   <br />
   <h2 align="center">Search JSU Book Exchange</h2><br />
   <div class="form-group">
    <div class="input-group">
     <span class="input-group-addon">Search</span>
     <input type="text" name="search_text" id="search_text" placeholder="Search by subject, price, isbn, author, title..." class="form-control" />
    </div>
   </div>
   <br />
   <div id="result"></div>
  </div>

  <footer>
    <div class="footer">
      Copyright &copy; JSUBOOKEXCHANGE.COM

  </div>
    </footer>
 </body>
</html>


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
