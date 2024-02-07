<!DOCTYPE html>
<html lang="en">
  <head profile="http://www.w3.org/2005/10/profile">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
        
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@5/dark.css" />
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.min.js"></script>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	

    <title>2FA Server Control Panel</title>
    <link rel="icon" type="image" href="security.jpg">
  </head>
<body>

    	
      	<?php include("includes/navigation-bar.php");?>
	<?php include("content/page-name.php");?>
	
	<br>
	<br>
	
	
	<div class="col-xs-12 col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
        <div class="panel panel-default">
         
	 <!-- Default panel contents -->
                <h3 class="panel-heading" style="text-align:center;">Linux Services</h3>
                <ul class="list-group">
               		<!--
                 	<li class="list-group-item">
                        Apache Server
                        	<div class="TriSea-technologies-Switch pull-right">
                            		<input id="apache" name="TriSea1" type="checkbox"/>
                            		<label for="apache" class="label-success"></label>
                        	</div>
                 	</li>
                 	-->
                 	
                 	<!--
                 	<li class="list-group-item">
                        MySQL Server
                        	<div class="TriSea-technologies-Switch pull-right">
                            		<input id="mysql" name="TriSea1" type="checkbox" onclick="test()"/>
                            		<label for="mysql" class="label-success"></label>
                        	</div>
                        	<script type="text/javascript">
                        	
                        	function test(){
                        		
                        		}
                        	</script>
                 	</li>
                 	-->
                 
                 	<!--
                 	<li class="list-group-item">
                        Add a User
                        	<div class="TriSea-technologies-Switch pull-right">
                            		<a class="btn btn-primary float-end" style="float:right;">Add</a>
                            		
                        	</div>
                        	
                 	</li>
                 	-->
                 	
                 	<li class="list-group-item">
                        SSH Service
                        	<div class="TriSea-technologies-Switch pull-right ">
                            		<input class ="SSH" id="SSH" name="SSH" type="checkbox" onclick="load()" value="ON"/>
                            		<label for="SSH" class="label-success"></label>
                        	</div>
                        	
                        	<script type="text/javascript">
                        	function load(){
                        		if (document.getElementById("SSH").value =="ON"){
                        			//alert("1");
                        			strCMD = "turn_on_sshd";
                        			document.getElementById("SSH").value ="OFF";
                        			//pop a dialog waiting on random number
                        			Swal.fire({
                        				title: 'Enter the random number',
                        	    			html: '<input class="swal2-input" id="number" placeholder=" " >',
                      					showCancelButton: true  
              		  			})
                        		}else if (document.getElementById("SSH").value =="OFF"){
                        			//alert("2");
                        			strCMD = "turn_off_sshd";
                        			document.getElementById("SSH").value ="ON";
                        		}
                        		//send AJAX request
                        		const xhr = new XMLHttpRequest();
                        		xhr.open("GET","action.php?action=" + strCMD);
					xhr.send();
				
					const input = document.getElementById('number');
					input.addEventListener('change', function() {
						//invoke another AJAX request
						const xhr2 = new XMLHttpRequest();
						
						scode = input.value;
						xhr2.onreadystatechange = () => {
  							// Call a function when the state changes.
  							if (xhr2.readyState === XMLHttpRequest.DONE && xhr2.status === 200) {
    								// Request finished. Do processing here.
    								stext = xhr2.responseText;
    						//		alert("stext:" + stext.trim());
    						//		alert("stext len:" + stext.trim().length);
    								if(stext.trim()=="ok"){
    								   //alert("Success");
    								   Swal.fire({
                        	  					title: 'Success',
                        	  	//				text: 'Inserted Successfully',
                        	  	//				text: xhr2.responseText,
                        	  					icon: 'success'	
                        	  			         	})
                        	  				}else{
                        	  				    alert("Denied: " + stext);
                        	  				}
  							}
						};
						xhr2.open("GET","execute_rand_id.php?action=123&randid="+scode);
						xhr2.send();
						
						
					}); 	
                       		}   
                                </script>  
                                                      	  
                 	</li>
                 	
                 	<li class="list-group-item">
                        Print Service
                        	<div class="TriSea-technologies-Switch pull-right">
                            		<input class="print" id="print" name="print" type="checkbox" onclick="execute()" value="ON"/>
                            		<label for="print" class="label-success"></label>
                        	</div>
                        	
                        	<script type="text/javascript">
                        	function execute(){
                        		if (document.getElementById("print").value =="ON"){
                        			//alert("1");
                        			strCMD = "turn_on_print";
                        			document.getElementById("print").value ="OFF";
                        			
                        			//pop a dialog waiting on random number
                        			Swal.fire({
                        				title: 'Enter the random number',
                        	    			html: '<input class="swal2-input" id="number" placeholder=" " >',
                      					showCancelButton: true  
              		  			})
                        		}else if (document.getElementById("print").value =="OFF"){
                        			//alert("2");
                        			strCMD = "turn_off_print";
                        			document.getElementById("print").value ="ON";
                        		}
                        		//send AJAX request
                        		const xhr = new XMLHttpRequest();
                        		xhr.open("GET","action.php?action=" + strCMD);
					xhr.send();
					
					const input = document.getElementById('number');
					input.addEventListener('change', function() {
						//invoke another AJAX request
						const xhr2 = new XMLHttpRequest();
						
						scode = input.value;
						xhr2.onreadystatechange = () => {
  							// Call a function when the state changes.
  							if (xhr2.readyState === XMLHttpRequest.DONE && xhr2.status === 200) {
    								// Request finished. Do processing here.
    								stext = xhr2.responseText;
    						//		alert("stext:" + stext.trim());
    						//		alert("stext len:" + stext.trim().length);
    								if(stext.trim()=="ok"){
    								   //alert("Success");
    								   Swal.fire({
                        	  					title: 'Success',
                        	  	//				text: 'Inserted Successfully',
                        	  	//				text: xhr2.responseText,
                        	  					icon: 'success'	
                        	  			         	})
                        	  				}else{
                        	  				    alert("Denied: " + stext);
                        	  				}
  							}
						};
						xhr2.open("GET","execute_rand_id.php?action=456&randid="+scode);
						xhr2.send();
						
						
					}); 	
                       		} 
                        	</script>
                        	
                 	</li>
                 	
                 	
                 	<li class="list-group-item">
                        Firewall Service
                        	<div class="TriSea-technologies-Switch pull-right">
                            		<input class="firewall" id="firewall" name="firewall" type="checkbox" onclick="proceed()" value="ON"/>
                            		<label for="firewall" class="label-success"></label>
                        	</div>
                        	
                        	<script type="text/javascript">
                        	function proceed(){
                        		if (document.getElementById("firewall").value =="ON"){
                        			//alert("1");
                        			strCMD = "turn_on_firewall";
                        			document.getElementById("firewall").value ="OFF";
                        			
                        			//pop a dialog waiting on random number
                        			Swal.fire({
                        				title: 'Enter the random number',
                        	    			html: '<input class="swal2-input" id="number" placeholder=" " >',
                      					showCancelButton: true  
              		  			})
                        		}else if (document.getElementById("firewall").value =="OFF"){
                        			//alert("2");
                        			strCMD = "turn_off_firewall";
                        			document.getElementById("firewall").value ="ON";
                        		}
                        		
                        		
                        		//send AJAX request
                        		const xhr = new XMLHttpRequest();
                        		xhr.open("GET","action.php?action=" + strCMD);
					xhr.send();
					
					const input = document.getElementById('number');
					input.addEventListener('change', function() {
						//invoke another AJAX request
						const xhr2 = new XMLHttpRequest();
						
						scode = input.value;
						xhr2.onreadystatechange = () => {
  							// Call a function when the state changes.
  							if (xhr2.readyState === XMLHttpRequest.DONE && xhr2.status === 200) {
    								// Request finished. Do processing here.
    								stext = xhr2.responseText;
    						//		alert("stext:" + stext.trim());
    						//		alert("stext len:" + stext.trim().length);
    								if(stext.trim()=="ok"){
    								   //alert("Success");
    								   Swal.fire({
                        	  					title: 'Success',
                        	  	//				text: 'Inserted Successfully',
                        	  	//				text: xhr2.responseText,
                        	  					icon: 'success'	
                        	  			         	})
                        	  				}else{
                        	  				    alert("Denied: " + stext);
                        	  				}
  							}
						};
						xhr2.open("GET","execute_rand_id.php?action=789&randid="+scode);
						xhr2.send();
						
						
					}); 	
                       		} 
                        	</script>
                 	</li>
                 	
                 	
                 </ul>
      	</div>

      	<br>
	<br>
         		<div class="text-center">
         		<!--
         			<div class="form-group">
               			<h4><input name="recover-submit" class="btn btn-lg btn-primary btn-block" value="Reset Password" type="submit" ></h4>
               			</div>
               		-->
                      
               			<input type="hidden" class="hide" name="token" id="token" value=""> 
               			</form>
    
    	<h5><a href = "/login/login.php">Sign Out</a></h5>
               		
     	</div>
    </div>
  </div>
  
                    
    <style>
   
/*
.panel-heading{
	backdrop-filter: url("background.jpg");
}

.list-group-item{
	backdrop-filter: url("background.jpg");
}

body{
    background-image: url("background.jpg");
    
}
*/
    
.TriSea-technologies-Switch > input[type="checkbox"] {
    display: none;   
}

.TriSea-technologies-Switch > label {
    cursor: pointer;
    height: 0px;
    position: relative; 
    width: 40px;  
}

.TriSea-technologies-Switch > label::before {
    background: rgb(0, 0, 0);
    box-shadow: inset 0px 0px 10px rgba(0, 0, 0, 0.5);
    border-radius: 8px;
    content: '';
    height: 16px;
    margin-top: -8px;
    position:absolute;
    opacity: 0.3;
    transition: all 0.4s ease-in-out;
    width: 40px;
}
.TriSea-technologies-Switch > label::after {
    background: rgb(255, 255, 255);
    border-radius: 16px;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
    content: '';
    height: 24px;
    left: -4px;
    margin-top: -8px;
    position: absolute;
    top: -4px;
    transition: all 0.3s ease-in-out;
    width: 24px;
}
.TriSea-technologies-Switch > input[type="checkbox"]:checked + label::before {
    background: inherit;
    opacity: 0.5;
}
.TriSea-technologies-Switch > input[type="checkbox"]:checked + label::after {
    background: inherit;
    left: 20px;
}
    </style>
</div>

