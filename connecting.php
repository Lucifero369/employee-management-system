<?php

   $connection = mysqli_connect('localhost','root','','payroll');
   $conn = mysqli_connect('localhost','root','','payroll');

   if(isset($_POST['send'])){
      $client_id = $_POST['client_id'];
      $LastName = $_POST['LastName'];
      $FirstName = $_POST['FirstName'];
      $Email = $_POST['Email'];
      $Phonenumber = $_POST['Phonenumber'];
      
      $image = $_POST['image'];



      $request = " insert into employee(client_id,LastName,FirstName, Email, Phonenumber,image) values('$client_id','$LastName','$FirstName','$Email','$Phonenumber','$image') ";
      $request1= "insert into wages(client_id, FirstName) values('$client_id','$FirstName')";
      
      mysqli_query($connection, $request);
      mysqli_query($conn, $request1);

      header('location:registration.php'); 
     

   }else{
      echo 'something went wrong please try again!';
   }

?>