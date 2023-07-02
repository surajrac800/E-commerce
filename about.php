<?php

@include 'config.php';

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

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>about us</h3>
    <p> <a href="index.php">home</a> / about </p>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/home-shoe-2.png" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum odit voluptatum alias sed est in magni nihil nisi deleniti nostrum.</p> -->
            <a href="shop.php" class="btn">shop now</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>what we provide?</h3>
            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum odit voluptatum alias sed est in magni nihil nisi deleniti nostrum.</p> -->
            <a href="contact.php" class="btn">contact us</a>
        </div>

        <div class="image">
            <img src="images/home-shoes-1.png" alt="">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="images/home-shoe-3.png" alt="">
        </div>

        <div class="content">
            <h3>who we are?</h3>
            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum odit voluptatum alias sed est in magni nihil nisi deleniti nostrum.</p> -->
            <a href="#reviews" class="btn">clients reviews</a>
        </div>

    </div>

</section>

<section class="reviews" id="reviews">

    <h1 class="title">client's reviews</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/pic-1.png" alt="">
            <h3>Gautam</h3>
                <p>Quality assurance 100% 
                This is awesome shoes.. I walk 5 km daily. I hope these shoes prove to be very good for me.
                </p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box">
            <img src="images/pic-2.png" alt="">
            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia animi consequatur nostrum cumque itaque ducimus, iure expedita voluptates. Minima, minus.</p> -->
            <h3>Satendra</h3>
                <p>Got it for 2k (discount applied), Value for money
                    This is my first nike shoe, cushion is awesome while walking
                    Good grip while running.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box">
            <img src="images/pic-3.png" alt="">
            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia animi consequatur nostrum cumque itaque ducimus, iure expedita voluptates. Minima, minus.</p> -->
            <h3>Govind</h3>
                <p>I Really Loved this shoe 👌❤️🔥
                    Feels soo comfortable 😍
                    Gives you good vibes and peace ✌️☮️</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <!-- <h3>john deo</h3> -->
        </div>

        <div class="box">
            <img src="images/pic-4.png" alt="">
            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia animi consequatur nostrum cumque itaque ducimus, iure expedita voluptates. Minima, minus.</p> -->
            <h3>JD.Tiwari</h3>
                <p>Good... Quality product..
                    In Nike brand it is a low price product
                    So you can't expect huge.. it's a beginner price product</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <!-- <h3>john deo</h3> -->
        </div>

        <div class="box">
            <img src="images/pic-5.png" alt="">
            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia animi consequatur nostrum cumque itaque ducimus, iure expedita voluptates. Minima, minus.</p> -->
            <h3>Pramod</h3>
                <p>Very nice looking pair of sports shoe. Only. Only problem is width is little bit narow. Order one size up for perfect fit.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <!-- <h3>john deo</h3> -->
        </div>

        <div class="box">
            <img src="images/pic-6.png" alt="">
            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia animi consequatur nostrum cumque itaque ducimus, iure expedita voluptates. Minima, minus.</p> -->
            <h3>Ankit</h3>
            <p>Quality assurance 95%
                Very comfortable running shoes
                    I ordered and within 48 hrs I am on track for running</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <!-- <h3>john deo</h3> -->
        </div>

    </div>

</section>











<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>