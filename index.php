<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign In</title>

	<link rel="stylesheet" type="text/css" href="stylee.css">

</head>
<body style="background-color: #000; color: #fff;">

	<header class="head container">

 		<li>
 			<a href="client_profile.php">
            	<div>G W S C</div>
        	</a>

        	<a><?php include("google_translator.php"); ?></a>

 		</li>
        
   </header>


	<?php 

	if(isset($_COOKIE['login'])){

	echo "<script>window.location='timer.php';</script>";

	
	}
	else {

	?>

	 <center><br><br><br>

	 	<div class="card">

	 		<ul style="padding-right:3rem; font-family: Lato;"><br><br><br><br><br>

				<h3>Global Wild Swimming And Camping</h3><br>
		    <p>"For most of us, camping remains the spot where we felt we came fully alive … where away from the distractions of mercenary competition and superficial worldly values, we’ve been able to make deep and lasting friendships"</p>

	    </ul>
	 										
    <ul>

	<div class="color_border" align="center" style=" border:thin solid black" >

	 <form id="comment_form" action="login.php" method="POST">
	 	
	 	<table border="5px" id="tbl">
	
		 	<tr>
		 		<td>Username <span>*</span> :</td>
		 		<td>
		 			<input type="text" name="uname" placeholder="Enter Your Username"required>
		 		</td>
		 	</tr> 
		 	<br>


		 	<tr>
		 		<td>Password : </td>
		 		<td><input type="Password" name="password" placeholder="Enter Your Password"required>
		 		</td>
		 	</tr> 
		 	<br>

		 	<tr>
		 		<td></td>
		 		<td>
		 			<input type="submit" name="login" value="Login">
		 			<input type="reset" name="clear" value="Clear" style="background-color:firebrick;color: #f0f0f0;padding: 12px 20px;border: none;border-radius: 4px;cursor: pointer;">
		 		</td>
		 		
		 	</tr>

	 	</table>

	 	<br><br>

	 	<div class="g-recaptcha" data-sitekey="6LcxtZIjAAAAAEw_lBkQC1yJ14VtIdHYY5o8xm0U"></div>

	 </form>

	 <br><br>

	 <div><p class="p">Don't have an account? Sign up <a href="client_register.php"><i><b>Here</b></i></a></p></div><br>

	</div>
	</ul>

	</center>

	<?php  

		}
	?>

  	   <?php
		require_once('connectdb.php'); // Database connection file
	  ?>
		
		<br><br><br><br>


	<footer style="background-color: #000; position: absolute; bottom: 0;">

        <ul class="nav">

        	

            <li>
                <a>&copy; Copyright@2022 GWSC</a>
                <a href="https://www.facebook.com"><img src="pics/fb.png" width="25"></a>
                <a href="https://www.youtube.com/"><img src="pics/yt.png" width="30"></a>
                <a href="https://www.instagram.com"><img src="pics/ig.png" width="25"></a>
                <a href="https://www.twitter.com"><img src="pics/twt.png" width="35"></a>
                <a href="">Privacy&Policy</a>
                <a href="client_profile.php">G W S C</a>
                <a href="https://www.pinterest.com"><img src="pics/pin.png" width="25"></a>
                <a href="https://www.discord.com"><img src="pics/dc.png" width="30"></a>
                <a>Login to view RSS</a>
                <hr>
                
            </li>

        </ul>
  		

			
	</footer>

	<script src='https://www.google.com/recaptcha/api.js'></script>

</body>
</html>

