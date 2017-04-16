<?php
	ini_set('mysql.connect_timeout',300);
	ini_set('default_socket_timeout',300);
?>
<html>
	<body>
		
		<?php
		
			
					displayimage();
		
					function displayimage()
				{
				session_start();
		         $email=$_SESSION["email"];
					$con=mysql_connect("localhost","root","");
					mysql_select_db("track",$con);
					$qry="select * from patient where email='$email'";
					$result=mysql_query($qry,$con);
					while($row=mysql_fetch_array($result))
					{
						echo '<img height="300" width="300" src="data:image;base64,'.$row[11].' "> ';
					}
					mysql_close($con);
				}
				
				
				
				
				
		?>
		<div class="row">
		<button type="button" class="btn btn-primary" ><a href="index.php">next</a></button>
		  	</div>
		</body>
</html>