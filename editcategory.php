<?php 
	include 'admin_header.php';
	require_once 'controllers/CategoryController.php';
	$c_id = $_REQUEST["id"];
	$category = getCategory($c_id);
?>
<!--edit category starts -->

<title>Online Garage System/dashboard/Edit category</title>
<div class="center">
    <h3 class="text">Edit Category</h3>
	<form action="" method="post" class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">Name:</h4> 
			<input type="hidden" name="id" value="<?php echo $category["id"];?>">
			<input type="text" name="name" value="<?php echo $category["name"];?>" class="form-control">
		</div>
		
		<div class="form-group text-center">
			
			<input type="submit" name="edit_category" class="btn btn-success" value="Edit Category" class="form-control">
		</div>
	</form>
</div>

<!--edit category ends -->
<?php include 'admin_footer.php';?>