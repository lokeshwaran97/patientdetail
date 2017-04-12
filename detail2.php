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
<div class="container">
  <div class="jumbotron">
    <h1 style="text-align:center; font-size: 24px; color:#00FF66">PATIENT DETAILS</h1> 
   <br><br><br>
   
  </div>
  </div>  
<div class="row container">
    <form class="col s12" style="font-weight:bold"  method="post" action="detail2.php">
 <div class="row">
        <div class="input-field col s12">
         
          <input id="dob" name="dob" type="text" class="validate" >
          <label class="active" for="dob" >DOB(DD/MM/YYYY)</label>
		 
        </div>
      </div>
   
      <div class="row">
        <div class="input-field col s12">
          <textarea id="address" name="address" class="materialize-textarea" required></textarea>
          <label class="active" for="Address">Address</label>
        </div>
      </div>
   
   
  
      <div class="row">
        <div class="input-field col s6">
          <input id="city" name="city" type="text" class="validate" required>
         <label class="active" for="city">City</label>
        </div>
        <div class="input-field col s6">
          <input id="pcode" name="pcode" type="number" class="validate" required>
          <label class="active" for="pcode" >Postal Code</label>
        </div>
      </div>
	    
	  

  
  
  <div class="row">
        <div class="input-field col s4">
          <input id="height" name="height" type="number" class="validate">
         <label class="active" for="height">Height</label>
        </div>
        <div class="input-field col s4">
          <input id="weight" name="weight" type="number" class="validate">
          <label class="active" for="weight" >Weight</label>
        </div>
		<div class="input-field col s4">
          <input id="bgroup" name="bgroup" type="text" class="validate">
          <label class="active" for="bgroup" >Blood Group</label>
        </div>
      </div>
	  
	  <button  type="submit" name="submit" value="submit">Submit
    
  </button>
        </form>
		</div>
		<!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
	  
</body>
</html>
<?php
$conn=mysqli_connect("localhost","root","","track")
or die("cannot connected");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

if(isset($_POST["submit"]))
{
session_start();
$fname=$_SESSION["fname"];
echo $fname;
$lname=$_SESSION["lname"];
echo $lname;
$date=$_POST["dob"];
echo $date;
$address=$_POST["address"];
echo $address;
$city=$_POST["city"];
echo $city;
$pcode=$_POST["pcode"];
echo $pcode;
$height=$_POST["height"];
echo $height;
$weight=$_POST["weight"];
echo $weight;
$bgroup=$_POST["bgroup"];
echo $bgroup;
$pass=$_SESSION["pass"];
echo $pass;
$email=$_SESSION["email"];
echo $email;
session_destroy();
$sql="INSERT INTO patient (first_name,last_name,dob,address,city,postal_code,blood_group,height,weight,password,email) VALUES ('$fname','$lname','$date','$address','$city',$pcode,'$bgroup',$height,$weight,'$pass','$email')";
if (mysqli_query($conn,$sql)) 
{

echo'<script> window.location="index.php"; </script> ';

exit();
}
else
{
echo"fail";
}

}
mysqli_close($conn);
?>