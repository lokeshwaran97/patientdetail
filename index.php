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
  </head>
  <body>
  
  <div class="container">
  <div class="jumbotron">
    <h1 style="text-align:center; font-size: 24px; color:#00FF66">LOGIN</h1> 
   <br><br><br>
   
  </div>
  </div>  
  <div class="row container">
    <form class="col s12" style="font-weight:bold"  method="post" action="index.php">
    <div class="row">
        <div class="input-field col s12">
          <input id="email" name="email" type="email" class="validate">
          <label class="active" for="email">Email</label>
        </div>
      </div>
	   <div class="row">
        <div class="input-field col s12">
          <input id="pass" name="pass" type="password" class="validate">
          <label  class="active" for="password"> Password</label>
        </div>
		<button  type="submit" name="submit" value="submit">Submit
  </button>
  </form>
  <br>
  <br>
  <br>
  <a class="waves-effect waves-light btn" href="detail.php">SIGN UP</a>
  </div>
		<!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>
  <?php 
  
   $email=$pass="";
 
  $conn=mysql_connect("localhost","root","")
or die("cannot connected");
mysql_select_db("track",$conn);
 

  if ((isset($_POST["email"]))&&(isset($_POST["pass"]))&&(isset($_POST["submit"])))
  {
$email=$_POST["email"];
$pass=$_POST["pass"];
session_start();
 $_SESSION["email"]=$email;
$result=mysql_query("SELECT * FROM patient WHERE email='$email' AND password='$pass'");
$row=mysql_num_rows($result);
if($row==1)
{

echo "sucess";
header('location:disp.php');
}
else
{
echo "<br> <br> <h6> check your email and password <h6>";

}
}


?>