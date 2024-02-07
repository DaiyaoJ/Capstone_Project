<?php
   //include('config.php');
   session_start();
   
   //$user_check = $_SESSION['login_user'];
   
   //$ses_sql = mysqli_query($db,"select username from admin where username = '$user_check' ");
   
   //$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   //$login_session = $row['username'];
   
   //if(!isset($_SESSION['login_user'])){
   //   header("location:login.php");
   //   die();
   //}
?>

<!DOCTYPE html>
<html>
   
   <head>
      <title></title>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
      
   </head>
   
   <body>
   <h1></h1> 
   
   <?php if (isset($_SESSION["user_id"])): ?>
   	<p> You are successfully logged in. </p>
   	<p><a href = "../home.php">Back to the home page</a></p>
   <?php else: ?>
   	<p><a href = "login.php"></a></p>
   <?php endif; ?>
   
   </body>
</html>
   
   
   
   
   
   
   
