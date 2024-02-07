<?php

	$random_id = $_GET["randid"];
	$action = $_GET["action"];
	
	if($action=="123"){
		$con = mysqli_connect("localhost","root","Apple456#","project");
		//$query = "SELECT * FROM pending_task where command = 'service sshd restart'";
		$query = "SELECT * FROM pending_task ORDER BY timestamp DESC LIMIT 1";
		
		//$current_timestamp = "SELECT current_timestamp";     
		//$timestamp = "SELECT timestamp FROM pending_task"; 
		
		$result =  $con->query($query);
		//$ran = $result->fetch_assoc();
		$row = $result->fetch_assoc();
		if($row){                    //&& $timestamp <= 0001
			//echo "find the command in table";
			$ans = $row["random_number"];
			if($ans==$random_id){
				echo("ok");
				exec("service sshd restart");
				
			}else{
				echo("invalid code");
			}
       
		}else{
			echo "Command is not found in the database";
		}
	}
	
	if($action=="456"){
		$con = mysqli_connect("localhost","root","Apple456#","project");
		//$query = "SELECT * FROM pending_task where command = 'service cups restart'";
		$query = "SELECT * FROM pending_task ORDER BY timestamp DESC LIMIT 1";
		
		//$current_timestamp = "SELECT current_timestamp";     
		//$timestamp = "SELECT timestamp FROM pending_task"; 
		
		$result =  $con->query($query);
		//$ran = $result->fetch_assoc();
		$row = $result->fetch_assoc();
		if($row){                    //&& $timestamp <= 0001
			//echo "find the command in table";
			$ans = $row["random_number"];
			if($ans==$random_id){
				echo("ok");
				exec("service cups restart");
				
			}else{
				echo("invalid code");
			}
       
		}else{
			echo "Command is not found in the database";
		}
	}
	
	if($action=="789"){
		$con = mysqli_connect("localhost","root","Apple456#","project");
		//$query = "SELECT * FROM pending_task where command = 'sudo ufw enable'";
		$query = "SELECT * FROM pending_task ORDER BY timestamp DESC LIMIT 1";
		
		//$current_timestamp = "SELECT current_timestamp";     
		//$timestamp = "SELECT timestamp FROM pending_task"; 
		
		$result =  $con->query($query);
		//$ran = $result->fetch_assoc();
		$row = $result->fetch_assoc();
		if($row){                    //&& $timestamp <= 0001
			//echo "find the command in table";
			$ans = $row["random_number"];
			if($ans==$random_id){
				echo("ok");
				exec("sudo ufw enable");
				
			}else{
				echo("invalid code");
			}
	
		}else{
			echo "Command is not found in the database";
		}
	}
	
	if($action=="110"){
		$con = mysqli_connect("localhost","root","Apple456#","project");
		//$query = "SELECT * FROM pending_task where command = 'sudo ufw enable'";
		$query = "SELECT * FROM pending_task ORDER BY timestamp DESC LIMIT 1";
		
		//$current_timestamp = "SELECT current_timestamp";     
		//$timestamp = "SELECT timestamp FROM pending_task"; 
		
		$result =  $con->query($query);
		//$ran = $result->fetch_assoc();
		$row = $result->fetch_assoc();
		if($row){                    //&& $timestamp <= 0001
			//echo "find the command in table";
			$ans = $row["random_number"];
			if($ans==$random_id){
				echo("ok");
				
			}else{
				echo("invalid code");
			}
		}
	
	}
	
	
	
	
	
	
?>

