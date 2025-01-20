<?php

include 'config.php';

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
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>


<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.png" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>At Chill Swirl, we believe in making life a little sweeter, one scoop at a time. Inspired by the simple joy of indulging in creamy, handcrafted ice cream, we’re dedicated to creating unique and irresistible flavours that bring smiles to every customer. Using only the finest ingredients and a lot of love, we craft each batch with care to ensure it’s as delicious as the last. Whether you’re craving a classic favourite or something new and exciting, we invite you to explore our ever-growing selection and enjoy a treat that’s made with passion and joy in every bite.</p>

         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>"Absolutely loved the creamy texture and unique flavors! Chill Swirl is my new go-to for ice cream cravings.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Alex H.</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>The pistachio flavor was incredible—tasted so fresh and authentic. Highly recommend Chill Swirl to everyone!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sophia T.</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>Nice variety, but the portion sizes could be bigger for the price. Still, great quality ice cream!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Michael R.</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>Tried their mango sorbet, and it was like biting into a real mango. So refreshing and light!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Emma L.</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>Customer service was friendly, and the waffle cones were a perfect touch. Chill Swirl nails it every time!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Daniel P.</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>I wish they had more vegan options, but the ones they do have are amazing. The coconut-based flavors are heavenly!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Olivia S.</h3>
      </div>

   </div>

</section>



<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>