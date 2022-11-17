<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<a href="login.php">Employee Login</a>
<body>
   


<!-- header section ends -->

<div class="heading">
   <h1>EMPLOYEE MANAGEMENT</h1>
</div>

<!-- booking section starts  -->

<section class="connecting">

   <h1 class="heading-title">Enter Your Credentials Punk!</h1>

   <form action="connecting.php" method="post" class="connecting">

      <div class="flex">
         <div class="inputBox">
            <span>ID:</span>
            <input type="number" placeholder="enter your id" name="client_id">
         </div>
         <div class="inputBox">
            <span>First name :</span>
            <input type="text" placeholder="enter your first name" name="FirstName">
         </div>
         <div class="inputBox">
            <span>Last name :</span>
            <input type="text" placeholder="enter your last name" name="LastName">
         </div>
         <div class="inputBox">
            <span>Email :</span>
            <input type="email" placeholder="enter your email" name="Email">
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="enter your number" name="Phonenumber">
         </div>
         <div class="inputBox">
            <span>Image :</span>
            <input type="file" accept="image/png,image/jpg,image/jpeg" placeholder="enter your picture" name="image">
         </div>
       
      </div>

      <input type="submit" value="register" class="btn" name="send">

   </form>

</section>
