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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <div style="color:white;background-color:black;font-size:18px;padding:5px;text-align:center;">HELLO,<?php echo $user_data['user_name'];?></div>
   <div class="art-navbar">
    <div class="art-navbar-head"><img class="paint" src="../images/paint2.png" height="50"><a style="color:white;" href="../index/index.html"><i class="fa-solid fa-arrow-left"></i></a>
   </div>
   <div class="art-grid" id ="all-photos-container">
    <section class="grid" id="grid1">
      <img src="../images/img1.jpg" alt="">
      <span>John Mathews</span>
      <div class="buy" onclick="openPage(this)">Buy</div>
      <div class="amount">Rs 799</div></section>
   
    <section class="grid" id="grid2">
    <img src="../images/img2.jpg" alt="">
    <span>Susanne Charles</span>
    <div class="buy" onclick="openPage(this)">Buy</div>
    <div class="amount">Rs 799</div></section>

    <section class="grid" id="grid3">
    <img src="../images/img4.jpg" alt="">
    <span>Diya Shah</span>
    <div class="buy" onclick="openPage(this)">Buy</div>
     <div class="amount">Rs 999</div></section>

    <section class="grid" id="grid4">
    <img src="../images/img3.jpg" alt="">
    <span>Mark Thomas</span>
    <div class="buy" onclick="openPage(this);">Buy</div>
    <div class="amount">Rs 679</div></section>

    <section class="grid" id="grid5"> 
    <img src="../images/img9.jpg" alt="">
    <span>Mark Thomas</span>
    <div class="buy" onclick="openPage(this);">Buy</div>
    <div class="amount">Rs 899</div></section>

    <section class="grid" id="grid6">
    <img src="../images/img6.jpg" alt="">
    <span>John Mathews</span>
    <div class="buy" onclick="openPage(this);">Buy</div>
    <div class="amount">Rs 599</div></section>

    <section class="grid" id="grid7">
    <img src="../images/img7.jpg" alt="">
    <span>Tharun Verma</span>
    <div class="buy" onclick="openPage(this);">Buy</div>
    <div class="amount">Rs 599</div></section>

    <section class="grid" id="grid8"> 
    <img src="../images/img10.jpg" alt="">
    <span>Alex Glen</span>
    <div class="buy"  onclick="openPage(this);">Buy</div>
    <div class="amount">Rs 1200</div></section>

    <section class="grid" id="grid9"> 
    <img src="../images/img8.jpg" alt="">
    <span>Diya Shah</span>
    <div class="buy" onclick="openPage(this);">Buy</div>
    <div class="amount">Rs 1999</div></section>

    <section class="grid" id="grid10">
    <img src="../images/img5.jpg" alt="">
    <span>Tharun Verma</span>
    <div class="buy" onclick="openPage(this);">Buy</div>
    <div class="amount">Rs 499</div></section>

    <section class="grid" id="grid11"> 
    <img src="../images/img11.jpg" alt="">
    <span>Alex Glen</span>
    <div class="buy" onclick="openPage(this);">Buy</div>
    <div class="amount">Rs 599</div></section>

    <section class="grid" id="grid12"> 
    <img src="../images/img12.jpg" alt="">
    <span>Tharun Verma</span>
    <div class="buy" onclick="openPage(this);">Buy</div>
    <div class="amount">Rs 1099</div></section>

    
    <section class="grid" id="grid13"> 
    <img src="../images/img13.jpg" alt="">
    <div class="buy" onclick="openPage(this);">Buy</div>
    <div class="amount">Rs 989</div></section>

    <section class="grid" id="grid14"> 
    <img src="../images/img15.jpg" alt="">
    <span>Diya Shah</span>
    <div class="buy" onclick="openPage(this);">Buy</div>
    <div class="amount">Rs 989</div></section>

    <section class="grid" id="grid15"> 
    <img src="../images/img14.jpg" alt="">
    <span>Mark Thomas</span>
    <div class="buy"onclick="openPage(this);">Buy</div>
    <div class="amount">Rs 989</div></section>


    <section class="grid" id="grid16"> 
    <img src="../images/img16.jpg" alt="">
    <span>Susanne Charles</span>
    <div class="buy" onclick="openPage(this);">Buy</div>
    <div class="amount">Rs 989</div></section>

    <section class="grid" id="grid17"> 
    <img src="../images/img17.jpg" alt="">
    <span>Mark Thomas</span>
    <div class="buy" onclick="openPage(this);">Buy</div>
    <div class="amount">Rs 989</div></section>

    <section class="grid" id="grid18"> 
    <img src="../images/img18.jpg" alt="">
    <span>John Mathews</span>
    <div class="buy" onclick="openPage(this);">Buy</div>
    <div class="amount">Rs 989</div></section>

    <section class="grid" id="grid19"> 
    <img src="../images/img19.jpg" alt="">
    <span>Mark Thomas</span>
    <div class="buy" onclick="openPage(this);">Buy</div>
    <div class="amount">Rs 989</div></section>

    <section class="grid" id="grid20"> 
    <img src="../images/img20.webp" alt="">
    <span>Alex Glen</span>
    <div class="buy" onclick="openPage(this);">Buy</div>
    <div class="amount">Rs 989</div></section>

    <section class="grid" id="grid21"> 
    <img src="../images/img21.jpg" alt="">
    <span>Susanne Charles</span>
    <div class="buy" onclick="openPage(this);">Buy</div>
    <div class="amount">Rs 989</div></section>

    <section class="grid" id="grid22"> 
    <img src="../images/img22.jpg" alt="">
    <span>Susanne Charles</span>
    <div class="buy" onclick="openPage(this);">Buy</div>
    <div class="amount">Rs 989</div></section>

    <section class="grid" id="grid23"> 
    <img src="../images/img23.jpg" alt="">
    <span>Diya Shah</span>
    <div class="buy" onclick="openPage(this);">Buy</div>
    <div class="amount">Rs 989</div></section>
   </div>
<script>
  function openPage(clickedElement){
    const amount=clickedElement.nextElementSibling.innerHTML;
    window.location.href='../index/confirmation.html?amount=' +encodeURIComponent(amount);

  }
</scripT>


</body>
</html>