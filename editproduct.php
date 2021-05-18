<?php 
    include 'admin_header.php';
    require_once 'controllers/ProductController.php';
	$p_id = $_REQUEST["id"];
	$product = getProduct($p_id);
?>
<!--editproduct starts -->

<title>Online Garage System/dashboard/Edit product</title>
<div class="center">

	<h3 class="text">Edit Product</h3>
	
		<form action="" method="post" class="form-horizontal form-material">
			<div class="form-group">
				<h4 class="text">Name:</h4> 
				<input type="text" class="form-control">
			</div>
			
			<div class="form-group text-center">
				
				<input type="submit" class="btn btn-success" value="Edit Product" class="form-control">
			</div>
		</form>
	
				
</div>

<!--editproduct ends -->
<?php include 'admin_footer.php';?>