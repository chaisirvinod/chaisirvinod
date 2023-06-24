<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>During the Covid-19 pandemic, when many people were told to stay at home, reading became a popular activity. Therefore the sales of books soared. </p>
         <p>As a result, many stores like your own are looking to improve their online profile. But this requires using one of the best Shopify book store themes.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>During the Goodreads 10th anniversary, The King of Horror, Stephen King unveiled some of his favorite books. “The Orphan Master’s Son” by Adam Johnson.    </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Stephen King</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>“Emma” by Jane Austen; Roddy Doyle’s “The Woman Who Walked Into Doors”; Doris Kearns Goodwin’s “Team of Rivals”; Auberon Waugh’s “The Diaries of Auberon”.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>J.K. Rowling</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>McEwan’s Nutshell; Seven Brief Lessons on Physics by Carlo Rovelli; Family Life by Akhil Sharma; Rachel Cusk’s Outline and Heroes of the Frontier Eggers.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Khaled Hosseini</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>Richard Adams’ Watership Down; National Velvet by Enid Bagnold; Thomas Keneally’s Playmaker; Einstein’s Dreams by Alan Lightman.             </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Tana French</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>The Checklist Manifesto, Being Mortal: Medicine and What Matters in the End, and Complications: A Surgeon’s Notes on an Imperfect Science .  </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Atul Gawande</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>Karin Slaughter’s Pretty Girls; And Then There Were None by Agatha Christie, and The Executioner’s Song by Norman Mailer                    .</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Gillian Flynn</h3>
      </div>

   </div>

</section>






<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>