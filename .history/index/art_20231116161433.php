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

    </section>
    <section class="grid">
    <img src="../images/img1.jpg" alt="">
    </section>
    <section class="grid">
    <img src="../images/img1.jpg" alt="">
    </section>
    <section class="grid">
    <img src="../images/img1.jpg" alt="">
    </section>
    <section class="grid">
    <img src="../images/img1.jpg" alt="">
    </section>
    <section class="grid">
    <img src="../images/img1.jpg" alt="">
    </section>
    <section class="grid">
    <img src="../images/img1.jpg" alt="">
    </section>
    <section class="grid">grid8</section>
   </div>


</body>
</html>