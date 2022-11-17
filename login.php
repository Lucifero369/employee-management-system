
<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM employee WHERE FirstName='$uname' AND client_id='$pass'";
		

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1 ) {
			$row = mysqli_fetch_assoc($result);
			
            if ($row['FirstName'] === $uname && $row['client_id'] === $pass) {
            	$_SESSION['FirstName'] = $row['FirstName'];
            	$_SESSION['LastName'] = $row['LastName'];
            	$_SESSION['client_id'] = $row['client_id'];
                $_SESSION['Email'] = $row['Email'];
                $_SESSION['Phonenumber'] = $row['Phonenumber'];
				$_SESSION['image']=$row['image'];
				



            	header("Location: home.php");
		        exit();
            }else{
				header("Location: index.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: index.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}
else{
	header("Location: index.php");
	exit();
}
?>
