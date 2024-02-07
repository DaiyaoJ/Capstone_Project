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
	
	<div class="row md-4">
	
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4>Add User
					<a href="admin.php" class="btn btn-danger float-end" style="float:right;">Back</a>
					</h4>
				</div>
				<div class="card-body">
				
				<form action="code.php" method="POST">
				
					<div class="row">
					
						<div class="col-md-4 mb-3">
							<label for="">
							Username
							<input type="text" name="username" class="form-control">
							</label> 	
						</div>
						
						<div class="col-md-4 mb-3">
							<label for="">
							Password
							<input type="text" name="password" class="form-control">
							</label> 
						</div>
						
						<div class="col-md-4 mb-3">
							<label for="">
							Phone
							<input type="text" name="phone"  class="form-control">
							</label> 
						</div>
					
					
						
						<div class="col-md-12 mb-3">
							
							<button type="submit" name="add_user" class="btn btn-primary">Add User</button>
							
						</div>
						
					</div>
				</form>
				
				
				</div>
			</div>
		</div>
	</div>
</div>
		
				
				
				
				
				
				
				
				
				
				
				
				
