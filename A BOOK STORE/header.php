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
<style>


#log{
   height: 80px;
   width: 100px;
}

.header .header-1{
   background-color: rgb(241, 220, 162);
}
</style>

<header class="header">

   <div class="header-1" id="h1">
      <div class="flex">
         <div class="share">
            <a href="https://www.facebook.com/profile.php?id=100014657532488" class="fab fa-facebook-f"></a>
            <a href="https://twitter.com/VINODsi00715941" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/vinod_chaisir_/" class="fab fa-instagram"></a>
            
         </div>
         <p><a href="index.php"></a><a href="register.php"></a></p>
         <!-- <Button><a href="login.php">login</a></Button>|
         <Button><a href="register.php">register</a></Button> -->
      </div>
   </div>

   <div class="header-2">
      <div class="flex">
         <a href="home.php" class="logo">
         <img src="images\\logo.png" alt="Not Found" id="log">
         </a>

         <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="shop.php">shop</a>
            <a href="contact.php">contact</a>
            <a href="orders.php">orders</a>
         </nav>

         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="search_page.php" class="fas fa-search"></a>
            <div id="user-btn" class="fas fa-user"></div>
            <?php
               $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
               $cart_rows_number = mysqli_num_rows($select_cart_number); 
            ?>
            <a href="cart.php"> <i class="fas fa-shopping-cart"></i> <span>(<?php echo $cart_rows_number; ?>)</span> </a>
         </div>

         <div class="user-box">
            <p>username : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p>email : <span><?php echo $_SESSION['user_email']; ?></span></p>
            <a href="logout.php" class="delete-btn">logout</a>
         </div>
      </div>
   </div>

</header>