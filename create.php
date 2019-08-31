<?php include_once 'inc/header.php';?>


<?php 

if(isset($_POST['submit'])){
 	$fname 		= mysqli_real_escape_string($_POST['fname']);
 	$lname 		= mysqli_real_escape_string($_POST['lname']);
 	$age 		= mysqli_real_escape_string($_POST['age']);
 	$city 		= mysqli_real_escape_string($_POST['city']);
 	$country 	= mysqli_real_escape_string($_POST['country']);

 	//Now check if form is empy
 	//if()
}

 ?>





<section class="container register">
	

	<div class="row"><h2>Register a new student</h2><hr>
		<form action="create.php" method="POST">
	 <div class="form-group">
    <label for="first_name">First Name:</label>
    <input type="text" class="form-control" name="fname">
  </div>
  	 <div class="form-group">
    <label for="last_name">Last Name:</label>
    
    <input type="text" class="form-control" name="lname">
  </div>
  	 <div class="form-group">
    <label for="age">Age:</label>
    <input type="text" class="form-control" name="age">
  </div>

  	 <div class="form-group">
    <label for="city">City:</label>
    <input type="text" class="form-control" name="city">
  </div>
  	 

  	 <div class="form-group">
    <label for="country">Country:</label>
    <input type="text" class="form-control" name="country">
  </div>
  
  <button type="submit" class="btn btn-default" name="submit">Submit</button>
  <button type="reset" class="btn btn-default">Cancel</button>

  <a href="index.php" class="fa fa-arrow-left btn btn-default"> Go Back..</a>

</form>

	</div>
</section>




<?php include_once 'inc/footer.php';?>