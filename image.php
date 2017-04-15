  <html>
  <head>
  </head>
  <body>
    <form method="post" action="image.php" enctype="multipart/form-data">
	<input type="file" name="image"><input type="submit" value="Upload">
	</form>
	  <?php
$conn=mysqli_connect("localhost","root","","track")
or die("cannot connected");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $file=$_FILES['image']['name'];
  if(!isset($_FILES['image']))
  echo'select an image';
  ?>
  
      </body>
	  </html>
    