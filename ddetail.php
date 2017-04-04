<<!DOCTYPE html>
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
 <div class="container">
  <div class="jumbotron">
    <h1 style="text-align:center; font-size: 24px; color:#00FF66">MEDICINE DETAILS</h1> 
   <br><br>
   
  </div>
  </div>  
  <div class="row container">
    <form class="col s12" style="font-weight:bold"  method="post" action="detail.php">
      <div class="row">
        <div class="input-field col s12">
          <input id="dname" name="dname" type="text" class="validate">
         <label class="active" for="dname">Doctor Name</label>
        </div>
		</div>
		<div class="row">
        <div class="input-field col s12">
          <input id="date" name="date" type="text" class="validate">
         <label class="active" for="date">Date</label>
        </div>
		</div>
		<div class="row">
        <div class="input-field col s12">
          <input id="time" name="time" type="text" class="validate">
         <label class="active" for="time">Time</label>
        </div>
		</div>
		<div class="row">
        <div class="input-field col s12">
          <input id="disease" name="disease" type="text" class="validate">
         <label class="active" for="disease">Disease</label>
        </div>
		</div>
		<div class="row">
        <div class="input-field col s12">
          <input id="mname1" name="mname1" type="text" class="validate">
         <label class="active" for="mname1">Medicine Name</label>
        </div>
        </div>
		<div class="row">
        <div class="input-field col s12">
          <input id="dos1" name="dos1" type="text" class="validate">
         <label class="active" for="dos1">Dosage</label>
        </div>
        </div>
		<div class="row">
        <div class="input-field col s12">
          <input id="ses1" name="ses1" type="text" class="validate">
         <label class="active" for="ses1">Sessions</label>
        </div>
        </div>
		<div class="row">
        <div class="input-field col s12">
          <input id="mname2" name="mname2" type="text" class="validate">
         <label class="active" for="mname2">Medicine Name</label>
        </div>
        </div>
		<div class="row">
        <div class="input-field col s12">
          <input id="dos2" name="dos2" type="text" class="validate">
         <label class="active" for="dos2">Dosage</label>
        </div>
        </div>
		<div class="row">
        <div class="input-field col s12">
          <input id="ses2" name="ses2" type="text" class="validate">
         <label class="active" for="ses2">Sessions</label>
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
