<?php
	require_once 'controllers/ProductController.php';
	$key = $_GET["key"];
	$products = liveSearch($key);
	
	foreach($products as $product){
		echo "<tr>";
		echo '<td onclick="fill_suggest(this)">'.$product["name"].'</td>';
		echo "</tr>";
	}
	
?>