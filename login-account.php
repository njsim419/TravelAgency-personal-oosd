<?php   
   include "header.php";
   $serverName = "127.0.0.1";
   $username = "root";
   $password = "";
   $db = "accounts";
   
 $conn = mysqli_connect($serverName, $username, $password, $db);
// Check connection
if (!$conn) {
    print("<div class='container'>");
    print("<div class='alert alert-danger'>");
    print("Connection Failed: ".mysqli_connect_error());
    print("</div>");
    print("</div>");
    die();
}
echo '<br></br><div class="container">';
     if(!isset( $_POST['email']) ||  !isset($_POST['email'])){
        echo '<div class="alert alert-danger"><strong>Server Error:</strong> No username and/or password provided.</div>';
        die();
     }
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
   
   $result = mysqli_query($conn, "SELECT * FROM accounts WHERE Email='$email' LIMIT 1");
   $num_rows = mysqli_num_rows($result);

   if($num_rows == 0){
   echo '<div class="alert alert-warning"><strong>Error:</strong> No account was found with this email address. </div>';
   die();
   }   
   $row = mysqli_fetch_array($result);
   $passwordNeeded = $row['Password'];
   if(password_verify($password, $row['Password'])){
    echo '<div class="alert alert-success"><strong>Welcome:</strong> You\'ve logged in to the system. </div>';
    session_regenerate_id(true);
    $_SESSION['user'] = $row['Name'];
    header("Location: index.php");
    die();
   }
   if(!password_verify($password, $row['Password'])){
    echo '<div class="alert alert-warning"><strong>Error:</strong> Invalid Username and or password. </div>';
    die();
   }
 else {
	   echo '<div class="alert alert-danger"><strong>Server Error:</strong> '. mysqli_error($conn).'.</div>';
}

echo '</div>';
mysqli_close($conn);
 ?>
 
 	