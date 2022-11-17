<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="client_id"><br>
		 <button type="submit">Login</button>
		
		<div class="signup_link">
		<p>&emsp;&emsp;&emsp;Don't have an account yet?<a href="registration.php">Sign up</a></p>
		</div>

		

     	
		
		

     </form>
</body>
</html>