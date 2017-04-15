<?php
$conn=mysqli_connect("localhost","root","","track")
or die("cannot connected");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $email='ss@gmail.com';
  $image=mysql_query("select * from patient where email='$email'");
  $image=mysql_fetch_assoc($image);
  $image=$image['image'];
  header("Content-type:image/jpeg");
  echo $image;
  ?>