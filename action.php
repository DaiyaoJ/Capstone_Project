<?php
  
	$action = $_GET["action"];	
	$random_number = rand(1000,10000);
	
	//$current_timestamp = "SELECT current_timestamp";     
	//$timestamp = "SELECT timestamp FROM pending_task";  
	
	//when user access Admin page
	if($action=="admin"){
		$cmd = "admin";
		$con = mysqli_connect("localhost","root","Apple456#","project");

                $query = "INSERT INTO pending_task(random_number,command) VALUES('$random_number','$cmd')";
                $result = mysqli_query($con,$query);
              	
              	//measure time performance for text messaging API
              	$time = time();
              	$convert = date('h:i:s',$time);
                $fh = fopen("file.txt","a");
                fwrite($fh,$convert . PHP_EOL);
                fclose($fh);
                                	
                if($result){
                           echo "Inserted into table successfully";
                           echo "<br>";
                           echo "<br>";
                           
                           //use API service to send out random_number to the phone
                           // Authorisation details.
			   $username = "estherjiang8866@gmail.com";
			   $hash = "9a9ff17cc829795785e5f106a84032499f2674421a63808685e8621c17c9ec8f";

			   // Config variables.
	                   $test = "0";

			   // Data for text message. This is the text message data.
			   $sender = "testAPI"; // This is who the message appears to be from.
			   $numbers = "89898986576463"; // A single number or a comma-seperated list of numbers
			   $message = $random_number;
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
                           //echo $result;

			   
                }else{
                           echo 'NULL';
                }
                                	
                           //mysqli_free_result($result);
                           //mysqli_close($con);
                                	
                //}
        }else{
        	echo "no action require";
	}
	
	//when user run SSH service
        if($action=="turn_on_sshd"){
                $cmd = "service sshd restart";
                $con = mysqli_connect("localhost","root","Apple456#","project");

                $query = "INSERT INTO pending_task(random_number, command) VALUES('$random_number','$cmd')";
                $result = mysqli_query($con,$query);
                
            	//measure time performance for text messaging API
              	$time = time();
              	$convert = date('h:i:s',$time);
                $fh = fopen("file.txt","a");
                fwrite($fh,$convert . PHP_EOL);
                fclose($fh);
                                	
                if($result){
                           echo "Inserted into table successfully ";
                           echo "<br>";
                           echo "<br>";
                           
                           //use API service to send out random_number to the phone
                           // Authorisation details.
			   $username = "estherjiang8866@gmail.com";
			   $hash = "9a9ff17cc829795785e5f106a84032499f2674421a63808685e8621c17c9ec8f";

			   // Config variables.
	                   $test = "0";

			   // Data for text message. This is the text message data.
			   $sender = "testAPI"; // This is who the message appears to be from.
			   $numbers = "89898986576463"; // A single number or a comma-seperated list of numbers
			   $message = $random_number;
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
                           //echo $result;

			   
                }else{
                           echo 'NULL';
                }
                                	
                           //mysqli_free_result($result);
                           //mysqli_close($con);
                                	
                //}
        }else{
        	echo "no action require";
        }        
                    
           //when user run Print service                                          
 	   if($action=="turn_on_print"){
                $cmd = "service cups restart";
                $con = mysqli_connect("localhost","root","Apple456#","project");

                $query = "INSERT INTO pending_task(random_number, command) VALUES('$random_number','$cmd')";
                $result = mysqli_query($con,$query);
                
                //measure time performance for text messaging API
              	$time = time();
              	$convert = date('h:i:s',$time);
                $fh = fopen("file.txt","a");
                fwrite($fh,$convert . PHP_EOL);
                fclose($fh);
                                	
                if($result){
                           echo "Inserted into table successfully ";
                           echo "<br>";
                           echo "<br>";
                           
                           //use API service to send out random_number to the phone
                           // Authorisation details.
			   $username = "estherjiang8866@gmail.com";
			   $hash = "9a9ff17cc829795785e5f106a84032499f2674421a63808685e8621c17c9ec8f";

			   // Config variables.
	                   $test = "0";

			   // Data for text message. This is the text message data.
			   $sender = "testAPI"; // This is who the message appears to be from.
			   $numbers = "89898986576463"; // A single number or a comma-seperated list of numbers
			   $message = $random_number;
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
                           //echo $result;

			   
                }else{
                           echo 'NULL';
                }
                                	
                           //mysqli_free_result($result);
                           //mysqli_close($con);
                                	
                //}
        }else{
        	echo "no action require";
        }    
        
        //when user run Firewall service
        if($action=="turn_on_firewall"){
                $cmd = "sudo ufw enable";
                $con = mysqli_connect("localhost","root","Apple456#","project");

                $query = "INSERT INTO pending_task(random_number, command) VALUES('$random_number','$cmd')";
                $result = mysqli_query($con,$query);
                
                //measure time performance for text messaging API
              	$time = time();
              	$convert = date('h:i:s',$time);
                $fh = fopen("file.txt","a");
                fwrite($fh,$convert . PHP_EOL);
                fclose($fh);
                                	
                if($result){
                           echo "Inserted into table successfully ";
                           echo "<br>";
                           echo "<br>";
                           
                           //use API service to send out random_number to the phone
                           // Authorisation details.
			   $username = "estherjiang8866@gmail.com";
			   $hash = "9a9ff17cc829795785e5f106a84032499f2674421a63808685e8621c17c9ec8f";

			   // Config variables.
	                   $test = "0";

			   // Data for text message. This is the text message data.
			   $sender = "testAPI"; // This is who the message appears to be from.
			   $numbers = "89898986576463"; // A single number or a comma-seperated list of numbers
			   $message = $random_number;
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
                           //echo $result;

			   
                }else{
                           echo 'NULL';
                }
                                	
                           //mysqli_free_result($result);
                           //mysqli_close($con);
                                	
                //}
        }else{
        	echo "no action require";
        }        
       			
?>



