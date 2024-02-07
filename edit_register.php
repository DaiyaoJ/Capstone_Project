<!doctype html>
<html>
<head>
<meta charset="utf-8">
<!-- Bootstrap CSS -->
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
        
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@5/dark.css" />
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.min.js"></script>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<title> </title>
</head>

<body>
<?php include("includes/navigation-bar.php");?>

<div class="container-fluid px-4">
	
	<div class="row">
	
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4>Edit User
					<a href="admin.php" class="btn btn-danger float-end" style="float:right;">Back</a>
					</h4>
				</div>
				<div class="card-body">
				
				<?php 
					if(isset($_GET['id'])){
						$user_id = $_GET['id'];
						$con = mysqli_connect("localhost","root","Apple456#","project");
						$users = "SELECT * FROM users WHERE user_id = '$user_id'";
						$users_run = mysqli_query($con,$users);
						
						if(mysqli_num_rows($users_run)>0){
							foreach($users_run as $user){
							?>
			
				<form action="code.php" method="POST">
				<input type="hidden" name="user_id" value="<?= $user['user_id'] ?>">
					<div class="row">
					
						<div class="col-md-4 mb-3">
							<label for="">
							Username
							<input type="text" name="username" value="<?= $user['user_name'] ?>" class="form-control">
							</label> 	
						</div>
						
						<div class="col-md-4 mb-3">
							<label for="">
							Password
							<input type="text" name="password" value="<?= $user['password'] ?>" class="form-control">
							</label> 
						</div>
						
						<div class="col-md-4 mb-3">
							<label for="">
							Phone
							<input type="text" name="phone" value="<?= $user['cell_phone'] ?>" class="form-control">
							</label> 
						</div>
					
					
						
						<div class="col-md-12 mb-3">
							
							<button type="submit" name="update_user" class="btn btn-primary">Update User</button>
							
						</div>
						
					</div>
				</form>
				
				<?php
					}
				}
				else
				{
					?>
					<h4>No Record Found</h4>
					<?php
					
				}
			}
			?>
				
				</div>
			</div>
		</div>
	</div>
</div>
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
