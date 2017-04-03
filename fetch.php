<?php
//fetch.php

//local
$con = mysqli_connect("localhost", "root", "", "jackson");

//live url
//$con = mysqli_connect("localhost", "jacksonstate","thisisapassword","jacksonstateproject");
$output = '';

if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($con, $_POST["query"]);
 $query = "
  SELECT * FROM books
  WHERE subject LIKE '%".$search."%'
  OR price LIKE '%".$search."%'
  OR isbn LIKE '%".$search."%'
  OR author LIKE '%".$search."%'
  OR title LIKE '%".$search."%'
 ";
}
else
{
 $query = "
  SELECT * FROM books ORDER BY listing_id
 ";
}
$result = mysqli_query($con, $query);
if(mysqli_num_rows($result) > 0)
{
  $output .= '
    <div class="table-responsive">
     <table class="table table bordered">
      <tr>
        <th>Listing id</th>
        <th>Subject</th>
        <th>Price</th>
        <th>Isbn</th>
        <th>Author</th>
        <th>Title</th>
        <th>Edition</th>
        <th>Quality</th>
        <th>Actions</th>
        <th>Email</th>
      </tr>
      ';

while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["listing_id"].'</td>
    <td>'.$row["subject"].'</td>
    <td>'.$row["price"].'</td>
    <td>'.$row["isbn"].'</td>
    <td>'.$row["author"].'</td>
    <td>'.$row["title"].'</td>
    <td>'.$row["edition"].'</td>
    <td>'.$row["quality"].'</td>
    <td>'.$row["actions"].'</td>
    <td>'.$row["email_user"].'</td>


   </tr>
  ';




 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>
