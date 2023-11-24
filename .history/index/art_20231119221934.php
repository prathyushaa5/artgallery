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
<style>
  body{
    font-family:Arial,sans-serif;
  }
  .form-container{
    margin-bottom:20px;
  }

  #all-photos-container{
    display:flex;
    flex-wrap:wrap;
  }
  .photo-card{
    border:1px solid black;
    margin:10px;
    padding:10px;
    width:200px;
  }
</style>
<body>
  <div style="color:white;background-color:black;font-size:18px;padding:5px;text-align:center;">HELLO,<?php echo $user_data['user_name'];?></div>
   <div class="art-navbar">
    <div class="art-navbar-head"><p class="featured-art" style="margin:0px;padding:10px;">FEATURED ARTS</p>><a style="color:white;" href="../index/index.html">Back</a>
   </div>
   <div class="art-grid" id="grid1">
    <section class="grid">
      <img src="../images/img1.jpg" alt="">
      <div class="buy" onclick="openPage(this)">Buy</div>
      <div class="amount">Rs 799</div></section>
   
    <section class="grid" id="grid2">
    <img src="../images/img2.jpg" alt="">
    <div class="buy" onclick="openPage(this)">Buy</div>
    <div class="amount">Rs 799</div></section>

    <section class="grid" id="grid3">
    <img src="../images/img4.jpg" alt="">
    <div class="buy" onclick="openPage(this)">Buy</div>
     <div class="amount">Rs 999</div></section>

    <section class="grid" id="grid4">
    <img src="../images/img3.jpg" alt="">
    <div class="buy" onclick="openPage(this);">Buy</div>
    <div class="amount">Rs 679</div></section>

    <section class="grid" id="grid5"> 
    <img src="../images/img9.jpg" alt="">
    <div class="buy" onclick="openPage(this);">Buy</div>
    <div class="amount">Rs 899</div></section>

    <section class="grid" id="grid6">
    <img src="../images/img6.jpg" alt="">
    <div class="buy" onclick="openPage(this);">Buy</div>
    <div class="amount">Rs 599</div></section>

    <section class="grid" id="grid7">
    <img src="../images/img7.jpg" alt="">
    <div class="buy" onclick="openPage(this);">Buy</div>
    <div class="amount">Rs 599</div></section>

    <section class="grid" id="grid8"> 
    <img src="../images/img10.jpg" alt="">
    <div class="buy"  onclick="openPage(this);">Buy</div>
    <div class="amount">Rs 1200</div></section>

    <section class="grid" id="grid9"> 
    <img src="../images/img8.jpg" alt="">
    <div class="buy" onclick="openPage(this);">Buy</div>
    <div class="amount">Rs 1999</div></section>

    <section class="grid" id="grid10">
    <img src="../images/img5.jpg" alt="">
    <div class="buy" onclick="openPage(this);">Buy</div>
    <div class="amount">Rs 499</div></section>

    <section class="grid" id="grid11"> 
    <img src="../images/img11.jpg" alt="">
    <div class="buy" onclick="openPage(this);">Buy</div>
    <div class="amount">Rs 599</div></section>

    <section class="grid" id="grid12"> 
    <img src="../images/img12.jpg" alt="">
    <div class="buy" onclick="openPage(this);">Buy</div>
    <div class="amount">Rs 1099</div></section>

    
    <section class="grid" id="grid13"> 
    <img src="../images/img13.jpg" alt="">
    <div class="buy" onclick="openPage(this);">Buy</div>
    <div class="amount">Rs 989</div></section>

    <section class="grid" id="grid14"> 
    <img src="../images/img15.jpg" alt="">
    <div class="buy" onclick="openPage(this);">Buy</div>
    <div class="amount">Rs 989</div></section>

    <section class="grid" id="grid15"> 
    <img src="../images/img14.jpg" alt="">
    <div class="buy"onclick="openPage(this);">Buy</div>
    <div class="amount">Rs 989</div></section>


    <section class="grid" id="grid16"> 
    <img src="../images/img16.jpg" alt="">
    <div class="buy" onclick="openPage(this);">Buy</div>
    <div class="amount">Rs 989</div></section>

    <section class="grid" id="grid17"> 
    <img src="../images/img17.jpg" alt="">
    <div class="buy" onclick="openPage(this);">Buy</div>
    <div class="amount">Rs 989</div></section>

    <section class="grid" id="grid18"> 
    <img src="../images/img18.jpg" alt="">
    <div class="buy" onclick="openPage(this);">Buy</div>
    <div class="amount">Rs 989</div></section>
   </div>
<script>
  function openPage(clickedElement){
    const amount=clickedElement.nextElementSibling.innerHTML;
    window.location.href='../index/confirmation.html?amount=' +encodeURIComponent(amount);

  }
</script>



</body>
</html>