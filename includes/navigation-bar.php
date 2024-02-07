<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" style="pointer-events: none; cursor: default;" href="page.html">SPanel</a>
    </div>
    <div id=tabs>
    <ul class="nav navbar-nav">
      <li class="nav-item">
	  <a class="nav-link active" href="home.php">Home</a>
      </li> 
      <li class="nav-item">
	    <a class="nav-link" id="admin" onclick="pass()"">Admin</a>
	    
	    <script type="text/javascript">
                        	
                        	function pass(){
                        		
                        		//send AJAX request
                        		const xhr = new XMLHttpRequest();
                        		xhr.open("GET","action.php?action=admin");
					                  xhr.send();
					
				                  	Swal.fire({
                        				title: 'Enter the random number',
                        	    	html: '<input class="swal2-input" id="number" placeholder=" " >',
                      					showCancelButton: true  
              		  		    })
                        	  		
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
    					                    			   window.location.replace("http://localhost:8000/admin.php");
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
						xhr2.open("GET","execute_rand_id.php?action=110&randid="+scode);
						xhr2.send();	
                        	  
                        	  
					}); 
					
                       		}
                                   
                                </script>  
      </li>
      <!--
      <li class="nav-item">
	    <a class="nav-link" href="#">Security</a>
      </li>
      -->
      <li class="nav-item">
	    <a class="nav-link" href="testAPI.php">TestAPI</a>
      </li>
    </ul>
    
    <ul class="nav navbar-nav navbar-right">
    <!--
      <li><a href="login/login.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
     -->
      <li><a href="login/login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
      
    </ul>

  </div>
</nav>

<style>
.navbar-header{
 color: white;
}

</style>

<!--
<div class="vertical-menu">
  
  <a href="home.php">Home</a>
  <a href="#tabs-2">Admin</a>
  <a href="testAPI.php">testAPI</a>
</div> 





<style>
 .vertical-menu {
  width: 200px; /* Set a width if you like */
}

.vertical-menu a {
  background-color: #eee; /* Grey background color */
  color: black; /* Black text color */
  display: block; /* Make the links appear below each other */
  padding: 12px; /* Add some padding */
  text-decoration: none; /* Remove underline from links */
}

.vertical-menu a:hover {
  background-color: #ccc; /* Dark grey background on mouse-over */
}

</style>

-->
