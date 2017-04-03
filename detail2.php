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
 <div class="row">
        <div class="input-field col s12">
         
          <input id="dob" name="dob" type="text" class="validate">
          <label class="active" for="dob" >DOB(DD/MM/YYYY)</label>
		 
        </div>
      </div>
   
      <div class="row">
        <div class="input-field col s12">
          <textarea id="address" name="address" class="materialize-textarea"></textarea>
          <label class="active" for="Address">Address</label>
        </div>
      </div>
   
   
   <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input id="city" name="city" type="text" class="validate">
         <label class="active" for="city">City</label>
        </div>
        <div class="input-field col s6">
          <input id="pcode" name="pcode" type="number" class="validate">
          <label class="active" for="pcode" >Postal Code</label>
        </div>
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
	  
</body>
</html>
