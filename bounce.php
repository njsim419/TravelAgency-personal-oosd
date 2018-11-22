<?php 
	$userEmail = $_POST['userEmail'];
	$userName = $_POST['userName'];
	$userPass = $_POST['userPass'];
   $day = date("l jS \of F Y h:i:s A");
 ?>
 
 	<fieldset><legend>Secure Information</legend>
 		<?php echo "<strong>Time request was made:</strong> ".$day; ?></br>
   		<?php echo "<strong>Email chosen:</strong> ".$userEmail; ?></br>
   		<?php echo "<strong>Username chosen:</strong> ".$userName; ?></br>
    	<?php echo "<strong>Password chosen:</strong> ".$userPass; ?></br>
		<p>This site uses state of the art, industry standard encryption. We do not use a SSL and we store your card 
		information in raw text. If you would like more information about our security practices, you can do so by 
		following these steps.</p
		<ul>
			<li>Open up your remote MySQL</li>
			<li>Username: realDB</li>
			<li>Password: choosesecurepass123</li>
			<li>Select all information from protecteduserinfo</li>
		</ul>
		<a href="http://localhost" style="text-align:right; align:right; text-decoration:none; color:#fff; background-color:#1b5e20; border-radius:3px; padding:10px;">Go Back</a>
 	</fieldset>