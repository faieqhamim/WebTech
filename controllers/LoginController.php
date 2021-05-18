<?php
	require_once 'models/db_connect.php';
	$name="";
	$err_name="";
	$username="";
	$err_username="";
	$email="";
	$err_email="";
	$password="";
	$err_password="";
	$hasError=false;
	if(isset($_POST["sign_up"])){
		if(empty($_POST["name"])){
			$err_name = "Name required";
		}
		else
		{
			$name = $_POST["name"];
		}
		if(empty($_POST["username"])){
			$err_username = "Username required";
		}
		else
		{
			$username = $_POST["username"];
		}
		if(empty($_POST["email"])){
			$err_email = "Email required";
		}
		else
		{
			$email = $_POST["email"];
		}
		if(empty($_POST["password"])){
			$err_password = "Password required";
		}
		else
		{
			$password = $_POST["password"];
		}
		if(!$hasError){
			insertUser($name,$username,$_POST["email"],$_POST["password"]);
		}
	}
	
	if(isset($_POST["login"])){
		if(empty($_POST["username"])){
			$err_username = "Username required";
		}
		else
		{
			$username = $_POST["username"];
		}
		if(empty($_POST["password"])){
			$err_password = "Password required";
		}
		else
		{
			$password = $_POST["password"];
		}
	}
	if(isset($_POST["login"])){
		//validation
		if(!$hasError){
			//authenticate
			if(authenticate($_POST["username"],$_POST["password"])){
				header("Location: dashboard.php");
			}else{
				echo " ";
			}
		}
	}
	function insertUser($name,$username,$email,$password){
		$password = md5($password);
		$query = "INSERT INTO users VALUES('$name','$username','$email','$password')";
		execute($query);		
	}
	function authenticate($username,$password){
		$password = md5($password);
		$query = "SELECT username from users WHERE username='$username' and password='$password'";
		$user=getArray($query);
		return $user;
	}

?>