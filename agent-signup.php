<!DOCTYPE html> 
<?php include "header.php"; ?>
<html>
	<div class="jumbotron text-center">
        <h2>Login & Register - Agent</h2>
	</div>

	<div class="container">
	<div class="row">
	<div class="col-sm-12 col-md-4">
		<div class="card">
  <div class="card-body">
  <form id="register"class="form-horizontal" action="login-account.php" method="post" onsubmit="if(!confirm('Are you sure you want to login to this account?')){return false;}" >
      <div class="form-group row">
   <div class="col-xs-12 col-md-12">
   <label for="firstName">Email Address:</label>
   <input class="form-control" name="email" id="email" type="text" placeholder="John" required="required">
    </div>
	<div class="col-xs-12 col-md-12">
	<label for="lastName">Password:</label>
   <input class="form-control" name="password" id="password" type="password" placeholder="Doe" required="required">
    </div>
	<div style="margin-top:5%;" class="col-xs-12 col-md-12">
		<button type="submit" class="btn btn-primary btn-block" id="submit"><i class="fas fa-sign-in-alt"></i> Login to Account</button>
		</div>
	</div>
  </form>
  </div>
  </div>
	</div>
	
	<div class="col-sm-12 col-md-8">
	<div class="card">
  <div class="card-body">
	<p id="result"></p>
	<form id="register"class="form-horizontal" action="create-account.php" method="post" onsubmit="if(!confirm('Are you sure you want to create an account?')){return false;}" >
    <div class="form-group row">
   <div class="col-xs-12 col-md-4">
   <label for="firstName">First Name:</label>
   <input class="form-control" name="firstName" id="firstName" type="text" placeholder="John" required="required" onfocus="inputSelect(this.id, 'Please enter your first name <strong>Example: John</strong>')">
    </div>
	<div class="col-xs-12 col-md-4">
	<label for="lastName">Last Name:</label>
   <input class="form-control" name="lastName" id="lastName" type="text" placeholder="Doe" required="required" onfocus="inputSelect(this.id, 'Please enter your last name <strong>Example: Doe</strong>')">
    </div>
	<div class="col-xs-12 col-md-4">
	<label for="emailAddress">Email Address:</label>
   <input class="form-control" name="emailAddress" id="emailAddress" type="email" placeholder="john@example.com" required="required" onfocus="inputSelect(this.id, 'Please enter a valid Email Address <strong>john@example.com</strong>')">
    </div>
	</div>

	    <div class="form-group row">
   <div class="col-xs-12 col-md-6">
   <label for="password">Password:</label>
   <input class="form-control" name="userPass" id="userPass" type="password" placeholder="Password" required="required" onfocus="inputSelect(this.id, 'Please choose a good password.')">
    </div>
	<div class="col-xs-12 col-md-6">
	<label for="confirmPass">Confirm Password:</label>
   <input class="form-control" name="confirmPass" id="confirmPass" type="password" placeholder="Confirm Password" required="required" onkeyup="validatePassword();" onfocus="inputSelect(this.id, 'Please confirm your previous password.')">
    </div>
	</div>

		    <div class="form-group row">
   <div class="col-xs-12 col-md-3">
   <label for="address">Address:</label>
   <input class="form-control" name="address" id="address" type="text" placeholder="123 Main Street" required="required" onfocus="inputSelect(this.id, 'Please enter a valid Address <strong>Example: 123 Main Street SW</strong>')">
    </div>
	<div class="col-xs-12 col-md-3">
	<label for="city">City:</label>
   <input class="form-control" name="city" type="text" placeholder="Calgary" required="required" onfocus="inputSelect(this.id, 'Please enter a valid City <strong>Example: Calgary</strong>')">
    </div>
	<div class="col-xs-12 col-md-3">
	<label for="postal">Postal Code:</label>
   <input class="form-control" name="postal" id="postal" type="text" placeholder="T1J1S3" required="required" onfocus="inputSelect(this.id, 'Please enter a valid Postal Code <strong>Example: T1J1S3</strong>')">
   <span id="result"></span>
    </div>
		<div class="col-xs-12 col-md-3">
	<label for="province">Province:</label>
   <select class="form-control" name="province">
   <option val="AB">AB - Alberta</option>
   <option val="BC">BC - British Columbia</option>
   <option val="SK">SK - Saskatchewan</option>
   <option val="MB">MB - Manitoba</option>
   <option val="ON">ON - Ontario</option>
   <option val="QC">QC - Quebec</option>
   <option val="NB">NB - New Brunswick</option>
   <option val="NS">NS - Nova Scotia</option>
   <option val="PE">PE - Prince Edward Island</option>
   <option val="NL">NL - Newfoundland and Labrador</option>
   <option val="YT">YT - Yukon</option>
   <option val="NT">NT - Northwest Territories</option>
   <option val="NU">NU - Nunavut</option>
   </select>
    </div>
    </div>

	    <a href="agent-signup.php" class="btn btn-secondary" >Create Agent</a>
		<button type="submit" class="btn btn-primary float-right" id="submit">Submit Form</button>
		<button type="button" class="btn btn-danger float-right" style="margin-right:5px;" onclick="resetForm();">Reset Form</button>
		</div>
</div>
</div>

  </form>
	</div>



<script> 

 function validatePassword(){
	 var password = $("#userPass").val();
	 var confirmPass = $("#confirmPass").val();
	 if(confirmPass != password){
		 document.getElementById("confirmPass").style.border = "1px solid red";
	 }else{
		 document.getElementById("confirmPass").style.border = "1px solid green";
	 }
 }
var pattern = /[ABCEFGHJKLMNPRSTVXYabcdefghijklmnpqrstuvwxyz][0-9][ABCEFGHJKLMNPRSTVWXYZabcdefghijklmnpqrstuvwxyz][0-9][ABCEFGHJKLMNPRSTVWXYZabcdefghijklmnpqrstuvwxyz][0-9]/,
$result = $("#result");

$('#postal').keyup(function(){
  var val = this.value
  if(!val.match(pattern)){
   document.getElementById("postal").style.border = "1px solid red";
  } else {
    document.getElementById("postal").style.border = "1px solid green";  
  }
});

function inputSelect(x, text) {
    document.getElementById("result").innerHTML = text;
}
function resetForm(){
	document.getElementById("register").reset();
}
</script>
</html>