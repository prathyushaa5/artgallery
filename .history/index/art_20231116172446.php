<?php
session_start();
    $_SESSION;
   include("connection.php");  
   include("functions.php");
   $user_data=check_login($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../index/art-style.css">
</head>
<body>
  <!-- hello ,<?php echo $user_data['user_name'];?> -->
   <div class="art-navbar">
    <p class="heading">FEATURED ARTS</p>
   </div>
   <div class="art-grid">
    <section class="grid">
      <img src="../images/img1.jpg" alt="">
      <span class="cost">Rs 100</span>
      <span class="cost"><button>Buy</button></span></section>
   
    <section class="grid">
    <img src="../images/img2.jpg" alt=""></section>

    <section class="grid">
    <img src="../images/img4.jpg" alt=""></section>

    <section class="grid">
    <img src="../images/img3.jpg" alt=""></section>

    <section class="grid"> 
    <img src="../images/img9.jpg" alt=""></section>

    <section class="grid">
    <img src="../images/img6.jpg" alt=""></section>

    <section class="grid">
    <img src="../images/img7.jpg" alt=""></section>

    <section class="grid"> 
    <img src="../images/img10.jpg" alt=""></section>

    <section class="grid"> 
    <img src="../images/img8.jpg" alt=""></section>

    <section class="grid">
    <img src="../images/img5.jpg" alt="">
    </section>

    <section class="grid"> 
    <img src="../images/img11.jpg" alt=""></section>

    <section class="grid"> 
    <img src="../images/img12.jpg" alt=""></section>

    <section class="grid"> 
    <img src="../images/img13.jpg" alt=""></section>
   </div>


</body>
</html>