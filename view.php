<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>    
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	  <script>
		   $(document).ready(function() {
    Materialize.updateTextFields();
  });
  </script>
  <style>
  tr:nth-child(even) {
  background-color: #CCCCCC;
  }
  </style>
  </head>
  <body>
  <nav>
    <div class="nav-wrapper">
      <ul id="nav-mobile" class="right hide-on-med-and-down">
	    <li ><a href="disp.php">HOME</a></li>
        <li><a href="ddetail.php">Treatment</a></li>
		<li><a href="index.php">LogOut</a></li>
		
      </ul>
    </div>
  </nav>
  <div class="container">
  <div class="jumbotron">
    <h1 style="text-align:center; font-size: 24px; color:#00FF66">YOUR DETAILS</h1> 
   <br><br>
   
  </div>
  </div>  
  
  <table class="container">
<?php 
$conn=mysqli_connect("localhost","root","","track")
or die("cannot connected");
session_start();
$email= $_SESSION["email"];

		
			
					displayimage();
		
					function displayimage()
				{
				
		         $email=$_SESSION["email"];
					$con=mysql_connect("localhost","root","");
					mysql_select_db("track",$con);
					$qry="select * from patient where email='$email'";
					$result=mysql_query($qry,$con);
					while($row=mysql_fetch_array($result))
					{
						echo '<div class="row"  style="text-align:center"> <img height="300" width="300" src="data:image;base64,'.$row[11].' "> </div> ';
					}
					
				}
				
				
				
				
				
		
$sel="SELECT * FROM patient WHERE email='$email'";
$sql=mysqli_query($conn,$sel);
$row=mysqli_fetch_array($sql);

echo"<tr><td>FIRSTNAME</td><td>".$row['first_name']."</td></tr>";
echo"<tr><td>LASTNAME</td><td>".$row['last_name']."</td></tr>";
echo"<tr><td>DOB</td><td>".$row['dob']."</td></tr>";
echo"<tr><td>ADDRESS</td><td>".$row['address']."</td></tr>";
echo"<tr><td>CITY</td><td>".$row['city']."</td></tr>";
echo"<tr><td>POSTALCODE</td><td>".$row['postal_code']."</td></tr>";
echo"<tr><td>BLOODGROUP</td><td>".$row['blood_group']."</td></tr>";
echo"<tr><td>HEIGHT</td><td>".$row['height']."</td></tr>";
echo"<tr><td>WEIGHT</td><td>".$row['weight']."</td></tr>";
echo"<tr><td>EMAIL</td><td>".$row['email']."</td></tr>";
echo"<tr><td>gender</td><td>".$row['gender']."</td></tr>";
?>
</table>
</body>
</html>
	