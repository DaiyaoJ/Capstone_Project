
<?php
	$is_invalid = false;

	if ($_SERVER["REQUEST_METHOD"] === "POST"){
		$mysqli = require(__DIR__ . '/config.php');

		$sql = sprintf("SELECT * FROM users 
				WHERE user_name = '%s'",
				$mysqli-> real_escape_string($_POST["username"]));

		$result =  $mysqli->query($sql);
		$user = $result->fetch_assoc();

		//var_dump($user);
		//exit;
		$password = $user["password"];
		$hash_password = password_hash($password, PASSWORD_DEFAULT);
		if($user){
			if(password_verify($_POST["password"], $hash_password)){
				//die("Login successful");
				
				session_start();
				$_SESSION["user_id"]= $user["user_id"];
				header("Location: /login/session.php");
				exit;
			}
		}
		$is_invalid = true;
	}
?>

<!DOCTYPE html>
<html>
   
   <head>
      <title>Login Page</title>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
      
   </head>
   
   <body>
   <h1>Log In</h1>   

   <?php if ($is_invalid): ?>
	<em>Invalid login</em>
   <?php endif; ?>

               <form method ="post">
		  <label>Username  </label><input type = "text" name = "username" class = "box" value="<?= htmlspecialchars($_POST["username"] ?? "") ?>"/><br /><br />
                  <label>Password  </label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
              
					
  

   </body>
</html>
