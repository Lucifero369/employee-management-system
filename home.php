<?php 
session_start();

if (isset($_SESSION['client_id']) && isset($_SESSION['FirstName'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
     <img src="<?php echo $_SESSION['image']; ?>" width= "200" height="210" alt="phone" class="img-fluid">
     <h1>Hello, <?php echo $_SESSION['FirstName'],"&nbsp", $_SESSION['LastName']; ?></h1>
     <h2>Your salary will be mailed to you via your email address</h2>

     <a href="logout.php">Logout</a>
</body>
</html>

<?php 
}else{
     header("Location:index.php");
     exit();
}
 ?>