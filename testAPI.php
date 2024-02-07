<?php
if(isset($_POST['abc'])){
	// Authorisation details.
	$username = $_POST['username'];
	$hash = $_POST['hash'];

	// Config variables. Consult http://api.txtlocal.com/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = $_POST['sender']; // This is who the message appears to be from.
	$numbers = $_POST['num']; // A single number or a comma-seperated list of numbers
	$message = $_POST['message'];
	
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	
	
	$ch = curl_init('https://api.txtlocal.com/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);
	echo($result);
}
?>

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
<form method="post" action="testAPI.php">
	<table align="center">
		<tr>
			<td>Username:</td>
			<td><input type="text" class="form-control" name="username" placeholder="enter your username"></td>
		</tr>

		<tr>
			<td>Hash:</td>
			<td><input type="text" class="form-control" name="hash" placeholder="enter your hash key"></td>
		</tr>
		
		<tr>
                        <td>Sender:</td>
                        <td><input type="text" class="form-control" name="sender" placeholder="enter your name"></td>
		</tr>

		<tr>
                        <td>Number:</td>
                        <td><input type="text" class="form-control" name="num" placeholder="enter the phone number"></td>
                </tr>

		<tr>
                        <td>Message:</td>
                        <td><textarea name="message"  class="form-control" placeholder="enter your message"></textarea></td>
		</tr>
		
		<tr>
			<td></td>
			<td><input type="submit" name="abc" value="send"</td>
		</tr>

	</table>
</form>

</body>
</html>

