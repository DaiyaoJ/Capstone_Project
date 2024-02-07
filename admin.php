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
	<h1 class="mt-4">Users</h1>
	<ol class="breadcrumb mb-4">
		<li class="breadcrumb-item active">Dashboard</li>
		<li class="breadcrumb-item ">Users</li>
	</ol>
	<div class="row">
	
		<div class="col-md-12">
		
			<?php
			if(isset($_SESSION['message'])){
				?>
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
					<?= $_SESSION['message']; ?>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
		</div>
		<?php 
		unset($_SESSION['message']);
			}
			?>
			
			<div class="card">
				<div class="card-header">
					<h4>Registered User
					<a href="addUser.php" class="btn btn-primary float-end" style="float:right;">Add User</a>
					</h4>
				</div>
				
				<div class="card-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Password</th>
							<th>Phone</th>
							<th>Created Time</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
					</thead>
					
					<tbody>
						
						<?php
							$con = mysqli_connect("localhost","root","Apple456#","project");
							$query="SELECT * FROM users";
							$query_run = mysqli_query($con,$query);
							if(mysqli_num_rows($query_run) > 0){
								foreach($query_run as $row){
									?>
									<tr>
										<td><?= $row['user_id']; ?></td>
										<td><?= $row['user_name']; ?></td>
										<td><?= $row['password']; ?></td>
										<td><?= $row['cell_phone']; ?></td>
										<td><?= $row['created_at']; ?></td>
										<td><a href="edit_register.php?id=<?= $row['user_id'];?>" class="btn btn-success">Edit</a></td>
										<td>
										<form action="code.php" method="POST">
										<button type="submit" name="user_delete" value="<?= $row['user_id'];?>" class="btn btn-success">Delete</button>
										</form>
										</td>
									</tr>
									<?php
								}
							}else{
							?>
								<tr>
									<td colspan="6">No Record Found</td>
								</tr>
							<?php
							}
						?>
						
					</tbody>
				</table>
				</div>
			</div>
		</div>
	</div>
</div>




</body>
