<?php

include 'connection.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>ABOUT US</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/index.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="index.php">HOME</a> / ABOUT </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/aboutus.jpg" alt="">
      </div>

      <div class="content">
         <h3>Our Goals</h3>
         <p>MHZNMALISHOES is all about footwear. Today we are proud to offer our best customer service to patrons both online here at MHZNMALISHOES and in our shoe stores in kirtipur area.</p>
         <p>You may open your internet browser (eg: Mozilla, Chrome, Safari etc.) and you will reach our ecommerce website where you can browse through thousands of products and order/buy online.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/client1.jpg" alt="">
         <p>I have been buying shoes online for years now and I was always afraid of the shipping charges and the long waiting time it would take. I found this store and I am so glad that I did! The shoes are just as advertised and they ship them out in a day or two. The prices are also amazing!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Michal De Santa</h3>
      </div>

      <div class="box">
         <img src="images/c7.jpg" alt="">
         <p>Very good choose and great prices</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Trachy De Santa</h3>
      </div>

      <div class="box">
         <img src="images/client3.jpg" alt="">
         <p>Good shoes quality.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Franklin Clinton</h3>
      </div>

      <div class="box">
         <img src="images/client4.jpg" alt="">
         <p>Great work. High quality material. Hong was extremely helpful and very dedicated. Thank you very much!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Lester Crest</h3>
      </div>

      <div class="box">
         <img src="images/c6.jpg" alt="">
         <p>I like this shoe shop as a person who has lots of problem with her feet. U could create my own comfortable boot. Also I could choose the type of leather which is cow because of its softness.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Lamar Davis</h3>
      </div>

      <div class="box">
         <img src="images/client6.jpg" alt="">
         <p>Honest and helpful.Highly recommend this shop to support local economy.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Trevor Philips</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">BRANDS</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/logo1.png" alt="">
         <h3>ADIDAS</h3>
      </div>

      <div class="box">
         <img src="images/logo2.jpg" alt="">
         <h3>VANS</h3>
      </div>

      <div class="box">
         <img src="images/logo3.png" alt="">

         <h3>CONVERSE</h3>
      </div>

      <div class="box">
         <img src="images/logo4.png" alt="">

         <h3>NIKE</h3>
      </div>

      <div class="box">
         <img src="images/logo5.png" alt="">

         <h3>PUMA</h3>
      </div>

      <div class="box">
         <img src="images/logo6.png" alt="">

         <h3>JORDAN</h3>
      </div>
   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>