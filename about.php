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

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/home about.png" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>1.Wide range of books: The e-commerce platform should offer a vast collection of books from various genres to cater to the diverse interests of customers.</p>

<p>2.Competitive pricing: The platform should offer books at competitive prices to attract customers.</p>

<p>3.User-friendly interface: A user-friendly interface can make it easier for customers to browse, search, and purchase books.</p>

<p>4.Secure payment options: The platform should provide secure payment options to ensure that customers can safely make transactions.</p>

<p>5.Quick and reliable delivery: Fast and reliable delivery of books can increase customer satisfaction and loyalty.</p>

<p>6.Customer service: The platform should have excellent customer service to address any issues or concerns that customers may have.</p>

<p> and ratings: Reviews and ratings from customers can help build trust and credibility for the platform.</p>


         <p>Overall, an e-commerce platform that prioritizes customer satisfaction by offering a wide range of books, competitive pricing, a user-friendly interface, secure payment options, reliable delivery, excellent customer service, and ratings and reviews can be considered one of the best in the book selling industry.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>









<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>