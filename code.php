<?php 
session_start();

if(isset($_POST['user_delete'])){
	$user_id= $_POST['user_delete'];
	
	$con = mysqli_connect("localhost","root","Apple456#","project");
	
	$query ="DELETE FROM users WHERE user_id ='$user_id';";
	$query .="ALTER table users auto_increment=1;";
	$query_run= mysqli_multi_query($con, $query);
	
	if($query_run){
		$_SESSION['message'] = "User Deleted Successfully";
		header('Location: admin.php');
		exit(0);
	}else{
		$_SESSION['message'] = "Something Went Wrong";
		header('Location: admin.php');
		exit(0);
	}
}



if(isset($_POST['add_user'])){
	$username= $_POST['username'];
	$password=$_POST['password'];
	$phone=$_POST['phone'];
	
	$con = mysqli_connect("localhost","root","Apple456#","project");
	$query="INSERT INTO users (user_name,password,cell_phone) VALUES('$username','$password','$phone')";
	//$query="ALTER table users auto_increment=1";
	$query_run= mysqli_query($con, $query);
	
	if($query_run){
		$_SESSION['message'] = "User Added Successfully";
		header('Location: admin.php');
		exit(0);
	}else{
		$_SESSION['message'] = "Something Went Wrong";
		header('Location: admin.php');
		exit(0);
	}
}



if(isset($_POST['update_user'])){
	$username= $_POST['username'];
	$password=$_POST['password'];
	$phone=$_POST['phone'];
	
	$con = mysqli_connect("localhost","root","Apple456#","project");
	$query="UPDATE users SET user_name='$username', password='$password', cell_phone='$phone'";
	$query_run= mysqli_query($con, $query);
	
	if($query_run){
		$_SESSION['message'] = "Updated Successfully";
		header('Location: admin.php');
		exit(0);
	}
}



?>
