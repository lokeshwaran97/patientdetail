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
    <h1 style="text-align:center; font-size: 24px; color:#00FF66">SIGN UP</h1> 
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
$fname=$_POST["first_name"];
$lname=$_POST["last_name"];
$pass=$_POST["pass"];
$email=$_POST["email"];
$_SESSION["fname"]=$fname;
$_SESSION["lname"]=$lname;
$_SESSION["pass"]=$pass;
$_SESSION["email"]=$email;
echo'<script> window.location="detail2.php"; </script> ';
}
mysqli_close($conn);
?>
