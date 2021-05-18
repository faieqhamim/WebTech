<?php 
	include 'admin_header.php';
	require_once 'controllers/CategoryController.php';
	$categories = getAllCategories();
?>
<!--All Categories starts -->

<title>Online Garage System/dashboard</title>
<div class="center">
	<h3 class="text">All Categories</h3>
	
	<div class="center">
	<input type="text" placeholder="type your search for categories ..." id="search_text" onkeyup="search()" class="form-control">
</div>
<table class="table table-striped center" id="suggestion">

	
</table>
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			<th> Name</th>
			<th></th>
			<th></th>
			
		</thead>
		<tbody>
			<?php
				foreach($categories as $category){
					echo "<tr>";
					echo "<td>".$category["id"]."</td>";
					echo "<td>".$category["name"]."</td>";
					echo "<td></td>";
					echo '<td><a href="editcategory.php?id='.$category["id"].'" class="btn btn-success">Edit</a></td>';
					echo '<td><a class="btn btn-danger">Delete</td>';
					echo "</tr>";
				}
			?>
			
		</tbody>
	</table>
</div>
<!--All Categories ends -->
<?php include 'admin_footer.php';?>