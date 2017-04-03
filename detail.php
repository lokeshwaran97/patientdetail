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
  function mydate()
{
  //alert("");
document.getElementById("dt").hidden=false;
document.getElementById("ndt").hidden=true;
}
function mydate1()
{
 d=new Date(document.getElementById("dt").value);
dt=d.getDate();
mn=d.getMonth();
mn++;
yy=d.getFullYear();
document.getElementById("ndt").value=dt+"/"+mn+"/"+yy
document.getElementById("ndt").hidden=false;
document.getElementById("dt").hidden=true;
}
   </script>
   <style>
   #dt{text-indent: -500px;height:25px; width:200px;}
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
    <form class="col s12" style="font-weight:bold"  method="post" action="detail.php">
      <div class="row">
        <div class="input-field col s6">
          <input id="first_name" name="first_name" type="text" class="validate">
         <label class="active" for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" name="last_name" type="text" class="validate">
          <label class="active" for="last_name" >Last Name</label>
        </div>
      </div>
      
	  
      <div class="row">
        <div class="input-field col s12">
          <input id="pass" name="pass" type="password" class="validate">
          <label  class="active" for="password">Set New Password</label>
        </div>
		
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" name="email" type="email" class="validate">
          <label class="active" for="email">Email</label>
        </div>
      </div>
	   <button  type="submit" name="submit" value="submit">Submit
    
  </button>
        
     
    </form>
	 
    
  </button>
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

$fname=$_POST["first_name"];
echo $fname;
$lname=$_POST["last_name"];
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
$pass=$_POST["pass"];
echo $pass;
$email=$_POST["email"];
echo $email;
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
