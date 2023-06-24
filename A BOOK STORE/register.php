<?php

include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
   // $user_type = $_POST['user_type'];
 

   // $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');
   $check = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email'") or die('query failed');

   if(mysqli_num_rows($check) > 0){
      $message[] = 'user already exist!';
   }else{
      if($pass != $cpass){
         $message[] = 'confirm password not matched!';
      }else{
         mysqli_query($conn, "INSERT INTO `users`(name, email, password) VALUES('$name', '$email', '$cpass')") or die('query failed');
         $message[] = 'registered successfully!';
         header('location:index.php');
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   
   
   <style>
      form{
  box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px 600px 6px 0px inset !important;
  
  background: transparent !important;
      }

      .form-container{
   min-height: 100vh;
   background-image: url(images/res-1.jpg);
   background-position: center;
   background-size: cover;
   position: relative;
   display: flex;
   align-items: center;
   justify-content: center;
   padding:2rem;

}
h3,p{
   color: white !important;
}

.form-container form{
   padding: 8rem;
   width: 50rem;
   border-radius: 10rem;
   box-shadow: var(--box-shadow);
   border:var(--border);
   background-color: var(--white);
   text-align: center;
}

.form-container form p a{
   color:deepskyblue;
}


   </style>

   
</head>
<body class="regis">



<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>
   
<div class="form-container">

   <form action="" method="post">
      <h3>register now</h3>
      <input type="text" name="name" placeholder="enter your name" required class="box">
      <input type="email" name="email" placeholder="enter your email" required class="box">
      <input type="password" name="password" placeholder="enter your password" required class="box" minlength=6 maxlength=8>
      <input type="password" name="cpassword" placeholder="confirm your password" required class="box" minlength=6 maxlength=8>
      <!-- <select name="user_type" class="box">
         <option value="user">user</option>
         <option value="admin">admin</option>
      </select> -->
      <input type="submit" name="submit" value="register now" class="btn">
      <p>already have an account? <a href="index.php">login now</a></p>
   </form>

</div>

</body>
</html>
