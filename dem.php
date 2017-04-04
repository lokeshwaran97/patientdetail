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
        <li><a href="view.php">Profile</a></li>
        <li><a href="ddetail.php">Treatment</a></li>
      </ul>
    </div>
  </nav>
  <table width="600" border="1" cellpadding="1" cellspacing="1">
  <?php
$conn=mysqli_connect("localhost","root","","track")
or die("cannot connected");
session_start();
$email= $_SESSION["email"];
 $sql = "SELECT * FROM details where email='$email'";
$retval = mysqli_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysqli_error());
   }

 while($person = mysqli_fetch_array($retval, MYSQL_ASSOC)) {
        echo "<tr>";
		echo "<td>".$person['dname']."</td>";
		echo "<td>".$person['date']."</td>";
		echo "<td>".$person['time']."</td>";
		echo "<td>".$person['disease']."</td>";
		echo "<td>".$person['mname1']."</td>";
		echo "<td>".$person['dos1']."</td>";
		echo "<td>".$person['ses1']."</td>";
		echo "<td>".$person['mname2']."</td>";
		echo "<td>".$person['dos2']."</td>";
		echo "<td>".$person['ses2']."</td>";
		echo "</tr>";
   }
   
   echo "Fetched data successfully\n";
   
?>
</table>
</body>
</html>