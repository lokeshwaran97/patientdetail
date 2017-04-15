<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
  </head><title>Login</title>
</head>

<body class="cyan">
  <!-- Start Page Loading -->
  <div class="container">
  <div class="row valign-wrapper">
    <div class="col s6 offset-s3 valign">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Card Title</span>
        </div>
        <div class="card-action">
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
      </div>
    </div>
  </div>
</div>  </body>
  </html>
