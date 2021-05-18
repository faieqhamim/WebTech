<?php
	require_once 'controllers/CategoryController.php';
	$key = $_GET["key"];
	$categories = liveSearch($key);
	/*foreach($categories as $category){
		echo "<tr>";
		echo "<td><a href='editcategory.php?id=".$category["id"]."'>".$category["name"]."</a></td>";
		echo "</tr>";
	}*/
	
	foreach($categories as $category){
		echo "<tr>";
		echo '<td onclick="fill_suggest(this)">'.$category["name"].'</td>';
		echo "</tr>";
	}
	
?>