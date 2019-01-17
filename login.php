<?php include 'inc/header.php'; ?>

<?php
  $login = Session::get("cuslogin");
     if ($login == true) {
		 header("location:order.php");
	  }
?>
			<?php
			if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
              $custLogin = $cmr->customerLogin($_POST);
			}
 ?>

<style>
	input[type="number"] {
	border: 1px solid #b8b8b8;
	border-radius: 3px;
  

    font-size:12px;
	color:#444;
	padding:8px;
	outline:none;
	margin:5px 0;
	width:340px;
}

input[type="email"] {
	border: 1px solid #b8b8b8;
	border-radius: 3px;
}

.register {
    border: 1px solid #ccc;
    width: auto;
    overflow: hidden;
    height: 38px;
    text-align: center;
    padding: 5px;
    background: #f8f8f8;
    font-size: 18px;
}
.register a{
	color: #000;
	font-weight: bold;
	text-decoration: none;
}

input[type="password"] {
	border: 1px solid #b8b8b8;
	border-radius: 3px;
  

    font-size:12px;
	color:#444;
	padding:8px;
	outline:none;
	margin:5px 0;
	width:340px;
}

input[type="text"] {
	border: 1px solid #b8b8b8;
	border-radius: 3px;
  

    font-size:12px;
	color:#444;
	padding:8px;
	outline:none;
	margin:5px 0;
	width:340px;
}

</style>


 <div class="main">
    <div class="content">
    	 <div class="login_panel">
		  <?php
		      if (isset($custLogin)) {
					echo $custLogin;
				}
		 ?>
        	<h3>Existing Customers</h3>
        	<p>Sign in with the form below.</p>
        	<form action=" " method="post" >
                	<input name="email" placeholder="Email" type="text"/ >
						  <input name="pass" placeholder="Password" type="password"/ >
						  <div class="buttons"><div><button class="grey" name="login">Sign In</button></div></div>
                    </div>
                 </form>
                 
                    
    
				  <?php
					  if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
                    	$customerReg = $cmr->customerRegistration($_POST);
							}
    
                ?>
	 
	 
	 
	 
	 	<div class="register_account d-none" id="register_form">
		 <?php
		      if (isset($customerReg)) {
					echo $customerReg;
				}
		 ?>
    		<h3>Register New Account</h3>
    		<form action=""method="post">
		   			 <table>
		   				<tbody>
						<tr>
						<td>
							<div>
							<input type="text" name = "name" placeholder="Name"/ >
							</div>
							
							<div>
							   <input type="text" name = "city" placeholder="City"/ >
							</div>
							
							<div>
								<input type="number" name = "zip" placeholder="Zip-Code"/ >
							</div>
							<div>
								<input type="email" name = "email" placeholder="Email"/ >
							</div>
		    			 </td>
		    			<td>
						<div>
							<input type="text" name = "address" placeholder="Address"/ >
						</div>
						<div>
							<input type="text" name = "country" placeholder="Country"/ >
						</div>
		    		        
	
		           <div>
		          <input type="number" name = "phone" placeholder="Phone"/ >
		          </div>
				  
				  <div>
					<input type="password" name = "pass" placeholder="Password"/>
				</div>
		    	</td>
		    </tr> 
		    </tbody></table> 
		   <div class="search"><div><button class="grey" name ="register">Create Account</button></div></div>
		    
		    <div class="clear"></div>
		    </form>
    	</div>  	
       <div class="clear"></div>
    </div>
 </div>
 
<?php include 'inc/footer.php'; ?>

