<?php 
	include 'admin_header.php';
	require_once 'controllers/CategoryController.php';
?>
<!--addcategory starts -->

<title>Online Garage System/dashboard</title>
	<div class="center">
	    <h3 class="text">Add Category</h3>
		<form action="" method="post" class="form-horizontal form-material">
			<div class="form-group">
				<h4 class="text">Name:</h4> 
				<input type="text" name="name" class="form-control">
			</div>
			
			<div class="form-group text-center">
				
				<input type="submit" name="add_category" class="btn btn-success" value="Add Category" class="form-control">
			</div>
		</form>
	</div>

<!--addcategory ends -->
<?php include 'admin_footer.php';?>