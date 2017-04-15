<!DOCTYPE html>
  <html>
    <head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script> 
$(document).ready(function(){
        $("form").animate({left: '250px'});
});
</script> 

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js">
	</script>
<script> 
$(document).ready(function(){
        $("body").animate({left: '250px'});
});
</script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
  .card {
 height:400px;
}
.body{
	background-color:powderblue;
}
  </style>
  </head>
  <body background ="img1.jpg">
  <div class="container">
  <div class="jumbotron"> 
   <br><br><br>
   
  </div>
  </div>  
  <div class="row container">
  <div class="container">
  <div class="row valign-wrapper">
    <div class="col s6 offset-s3 valign">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">LOG IN</span>
		    </div>
			<div class="card-action">

			<form class="col s12" style="font-weight:bold"  method="post" action="disp.php">
    <div class="row">
        <div class="input-field col s12">
          <input id="email" name="email" type="email" class="validate">
          <label class="active" for="email"><i class="material-icons">email</i>Email</label>
        </div>
      </div>
	   <div class="row">
        <div class="input-field col s12">
          <input id="pass" name="pass" type="password" class="validate">
          <label  class="active" for="password"><i class="material-icons">fingerprint</i> Password</label>
        </div>
		<button  type="submit" name="submit" value="submit">Submit
  </button>
  </form>
  <br>
  <br>
  <br>
  New User?
  <a class="waves-effect waves-light btn" href="detail.php">SIGN UP</a>

        </div>
		</div>
      </div>
    </div>
  </div>
</div>

        <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Share Your Views About Us With These Links</h5>
                <p class="grey-text text-lighten-4">Your Feedback's are Welcomed</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="card.php">Home</a></li>
                  <li><a class="grey-text text-lighten-3" href="about.php">About Us</a></li>
                  <li><a class="grey-text text-lighten-3" href="feed.php">Contact Us</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!"></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2017 Copyright Text
            </div>
          </div>
        </footer>
    
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
