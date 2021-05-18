<?php
	require_once 'models/db_connect.php';
	if(isset($_POST["add_product"])){
		//validation
		insertProduct($_POST["name"]);
		
	}
	if(isset($_POST["edit_product"])){
		//update product
		updateproduct($_POST["id"],$_POST["name"]);
	}
	function insertProduct($name){
		$query = "INSERT INTO products VALUES(NULL,'$name')";
		execute($query);
		header("Location: allproducts.php");
	}
	function getAllProducts(){
		$query = "SELECT p.id as 'id', p.name as 'name',c.name as category, p.qunatity as 'quantity' ,p.price as 'price' FROM products as p, categories as c WHERE p.category_id = c.id";
		$products = getArray($query);
		return $products;
	}
	function getProduct($id){
		$query="SELECT * FROM products WHERE id=$id";
		$product=getArray($query);
		return $product[0];
		
	}
	function updateProduct($id,$name){
		$query="UPDATE products SET name='$name' WHERE id= $id";
		execute($query);
		header("Location: allproducts.php");
	}
	function liveSearch($key){
		$query = "SELECT * FROM products WHERE name LIKE '%$key%'";
		$products = getArray($query);
		return $products;
		
	}
	function deleteproduct($id){
		
	}
?>