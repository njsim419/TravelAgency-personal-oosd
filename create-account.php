<?php   
   include "header.php";
   $serverName = "127.0.0.1";
   $username = "root";
   $password = "";
   $db = "accounts";
   
$conn = mysqli_connect($serverName, $username, $password, $db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
    if(!isset($_SESSION['firstName']) || !isset($_SESSION['lastName']) || !isset($_SESSION['emailAddress']) || !isset($_SESSION['userPass'])
		 || !isset($_SESSION['userPass'])  || !isset($_SESSION['city'])  || !isset($_SESSION['postal'])  || !isset($_SESSION['province'])){
			 echo '<div class="alert alert-danger"><strong>Server Error:</strong> Not all required information provided.</div>';
			 die();
		 }
	$firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
	$lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
	$emailAddress = mysqli_real_escape_string($conn, $_POST['emailAddress']);
	$password = mysqli_real_escape_string($conn, $_POST['userPass']);
	$password = password_hash($password, PASSWORD_DEFAULT);
	$address = mysqli_real_escape_string($conn, $_POST['address']);
	$city = mysqli_real_escape_string($conn, $_POST['city']);
	$postal = mysqli_real_escape_string($conn, $_POST['postal']);
   $province = mysqli_real_escape_string($conn, $_POST['province']);
   $day = date("l jS \of F Y h:i:s A");
   $fullName = $firstName." ".$lastName;
   
   $result = mysqli_query($conn, "SELECT * FROM accounts WHERE Email='$emailAddress' LIMIT 1");
   $num_rows = mysqli_num_rows($result);
   echo '<br></br><div class="container">';
   if($num_rows > 0){
   echo '<div class="alert alert-warning"><strong>Error:</strong> This email address is already in use. </div>';
   die();
   }   
$sql = "INSERT INTO accounts(Name, Email, Password, Address, City, Postal, Province) VALUES ('$fullName','$emailAddress','$password','$address','$city','$postal','$province')";
if (mysqli_query($conn, $sql)) {
       echo '<div class="alert alert-success"><strong>Success:</strong> You have created your account.</div>';
} else {
	   echo '<div class="alert alert-danger"><strong>Server Error:</strong> '. mysqli_error($conn).'.</div>';
}

echo '</div>';
mysqli_close($conn);
 ?>
 
 	