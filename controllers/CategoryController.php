<?php
	require_once 'models/db_connect.php';
	if(isset($_POST["add_category"])){
		//validation
		insertCategory($_POST["name"]);
		
	}
	if(isset($_POST["edit_category"])){
		//update category
		updateCategory($_POST["id"],$_POST["name"]);
	}
	function insertCategory($name){
		$query = "INSERT INTO categories VALUES(NULL,'$name')";
		execute($query);
		header("Location: allcategories.php");
	}
	function getAllCategories(){
		$query = "SELECT * FROM categories";
		$categories = getArray($query);
		return $categories;
	}
	function getCategory($id){
		$query="SELECT * FROM categories WHERE id=$id";
		$category=getArray($query);
		return $category[0];
		
	}
	function updateCategory($id,$name){
		$query="UPDATE categories SET name='$name' WHERE id= $id";
		execute($query);
		header("Location: allcategories.php");
	}
	function liveSearch($key){
		$query = "SELECT * FROM categories WHERE name LIKE '%$key%'";
		$categories = getArray($query);
		//if(count($categories) < 2) 
		return $categories;
		
	}
	function deleteCategory($id){
		
	}
?>