<?php 
	include 'admin_header.php';
	require_once 'controllers/ProductController.php';
	$products = getAllProducts();
?>
<!--All Products starts -->

<title>Online Garage System/dashboard</title>

<div class="center">
	<h3 class="text">All Products</h3>

	<div class="center">
	<input type="text" placeholder="type your search for products ..." id="search_text" onkeyup="search()" class="form-control">
	</div>
		<table class="table table-striped center" id="suggestion">
	</table>

	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			<th> Name</th>
			<th>Category </th>
			<th> Price</th>
			<th> Quantity</th>
			<th></th>
			<th></th>
			
		</thead>
		<tbody>
			<?php
				foreach($products as $product){
					echo "<tr>";
					echo "<td>".$product["id"]."</td>";
					echo "<td>".$product["name"]."</td>";
					echo "<td>".$product["category"]."</td>";
					echo "<td>".$product["price"]."</td>";
					echo "<td>".$product["quantity"]."</td>";
					echo '<td><a href="editproduct.php?id='.$product["id"].'" class="btn btn-success">Edit</a></td>';
					echo '<td><a class="btn btn-danger">Delete</td>';
					echo "</tr>";
				}
			?>
			
		</tbody>
	</table>
</div>

<script>
	function get(id){
		return document.getElementById(id);
	}
	function fill_suggest(td){
		get("search_text").value= td.innerHTML;
		
	}
	function search(){
		var text = get("search_text").value;
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange=function(){
			if(this.readyState == 4 && this.status == 200 ){
				document.getElementById("suggestion").innerHTML = this.responseText;
			}
		};
		if(text){
			xhttp.open("GET","searchproduct.php?key="+text,true);
			xhttp.send();
		}
		else{
			document.getElementById("suggestion").innerHTML="";
		}
		
	}
</script>
<!--Products ends -->
<?php include 'admin_footer.php';?>