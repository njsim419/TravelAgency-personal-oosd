<!DOCTYPE html>
<html>

    <?php include "header.php"; ?>

   <div class="jumbotron text-center">
   <h1>Contact Us</h1>
   </div>
    <div class="container">

     	<form id="contact"class="form-horizontal" action="bouncer.php" method="post" >
    <div class="form-group row">
   <div class="col-xs-12 col-md-4">
   <label for="firstName">First Name:</label>
   <input class="form-control" name="firstName" type="text" placeholder="John">
    </div>
	<div class="col-xs-12 col-md-4">
	<label for="lastName">Last Name:</label>
   <input class="form-control" name="lastName" type="text" placeholder="Doe">
    </div>
	<div class="col-xs-12 col-md-4">
	<label for="emailAddress">Email Address:</label>
   <input class="form-control" name="emailAddress" type="text" placeholder="john@example.com">
    </div>
	</div>

<div class="form-group">
  <label for="comment">Comment:</label>
  <textarea class="form-control" rows="5" id="comment"></textarea>
</div>



		<button type="submit" class="btn btn-primary float-right" id="submit">Submit Form</button>
		<button type="button" class="btn btn-warning float-right" style="margin-right:5px;" onclick="resetForm();">Reset Form</button>
	


  </form>
	</div>


    </div>



    <script>
    function resetForm(){
	document.getElementById("contact").reset();
}
</script>
</html>