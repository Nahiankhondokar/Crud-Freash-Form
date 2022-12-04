

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<title>Class 14</title>
</head>
<body>








<div class="student_form">
	<a href="students.php" class="btn btn-primary rounded-0">Back</a>
	<form class="form p-5 text-white shadow-lg" method="POST" enctype="multipart/form-data">
		<h1 class="text-center">Update Student Data </h1>
		
	  <div class="form-group">
	    <label for="exampleInputEmail1">Name</label>
	    <input name="name" type="text" class="form-control text-white h-25">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">Email</label>
	    <input name="email" type="text" class="form-control text-white h-25">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">Cell</label>
	    <input name="cell" type="text" class="form-control text-white h-25">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">User Name</label>
	    <input name="uname" type="text" class="form-control text-white h-25">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">Age</label>
	    <input name="age" type="text" class="form-control text-white h-25">
	  </div>

	  <div class="form-group ">
	    <label for="exampleInputEmail1">Gender</label><br>
	    <input name="gender" type="radio" class="text-white p-2" id="male"><label class="p-1" for="male"> Male</label>
	    <input name="gender" type="radio" class="text-white" id="female"><label class="p-1" for="female"> Female</label>
	  </div>

	  <div class="form-group ">
	    <label for="exampleInputEmail1">Shift</label>
	    <select class="form-control h-25 text-white" name="shift">
	    	<option class="text-dark" value="">--Select--</option>
	    	<option class="text-dark" value="">Day</option>
	    	<option class="text-dark" value="">Evening</option>
	    </select>
	  </div>


	  <div class="form-group ">
	    <label for="exampleInputEmail1">Location</label>
	    <select class="form-control h-25 text-white" name="location">
	    	<option class="text-dark" value="">--Select--</option>
	    	<option class="text-dark" value="">Dhaka</option>
	    	<option class="text-dark" value="">Barisal</option>
	    	<option class="text-dark" value="">chittagong</option>
	    	<option class="text-dark" value="">Khulna</option>
	    	<option class="text-dark" value="">Mymensignh</option>
	    	<option class="text-dark" value="">Rangpur</option>
	    	<option class="text-dark" value="">Sylhet</option>
	    </select>
	  </div>
	  
	  <div class="form-group ">
	    <label for="exampleInputEmail1">Photo</label>
	    <input name="photo" type="file" class="form-control-file text-white">
	  </div>

	  <button name="add" type="submit" class="btn btn-primary">Update Now</button>
	</form>
</div>






	<script src="assets/js/jquery-3.5.1.slim.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script>
		


	</script>


	
</body>
</html> 



