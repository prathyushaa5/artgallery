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
  Hello,<?php echo $user_data['user_name'];?>
   <div class="art-navbar">
    <p class="heading">FEATURED ARTS</p>
   </div>
   <div class="art-grid">
    <section class="grid">
      <img src="../images/img1.jpg" alt="">
      <p class="cost">Rs 799</p>
      <p class="buy"><button>Buy</button></p></section>
   
    <section class="grid">
    <img src="../images/img2.jpg" alt="">
    <p class="cost">Rs 799</p>
    <p class="buy"><button>Buy</button></p></section></section>

    <section class="grid">
    <img src="../images/img4.jpg" alt="">
    <p class="cost">Rs 999</p>
    <p class="buy"><button>Buy</button></p></section>

    <section class="grid">
    <img src="../images/img3.jpg" alt="">
    <p class="cost">Rs 679</p>
    <p class="buy"><button>Buy</button></p></section>

    <section class="grid"> 
    <img src="../images/img9.jpg" alt="">
    <p class="cost">Rs 899</p>
    <p class="buy"><button>Buy</button></p></section>

    <section class="grid">
    <img src="../images/img6.jpg" alt="">
    <p class="cost">Rs 599</p>
    <p class="buy"><button>Buy</button></p></section>

    <section class="grid">
    <img src="../images/img7.jpg" alt="">
    <p class="cost">Rs 599</p>
    <p class="buy"><button>Buy</button></p></section>

    <section class="grid"> 
    <img src="../images/img10.jpg" alt="">
    <p class="cost">Rs 1200</p>
    <p class="buy"><button>Buy</button></p></section>

    <section class="grid"> 
    <img src="../images/img8.jpg" alt="">
    <p class="cost">Rs 1999</p>
    <p class="buy"><button>Buy</button></p></section>

    <section class="grid">
    <img src="../images/img5.jpg" alt="">
    <p class="cost">Rs 499</p>
    <p class="buy"><button>Buy</button></p></section>

    <section class="grid"> 
    <img src="../images/img11.jpg" alt="">
    <p class="cost">Rs 599</p>
    <p class="buy"><button>Buy</button></p></section>

    <section class="grid"> 
    <img src="../images/img12.jpg" alt="">
    <p class="cost">Rs1099</p>
    <p class="buy"><button>Buy</button></p></section>

    <section class="grid"> 
    <img src="../images/img13.jpg" alt="">
    <p class="cost">Rs 989</p>
    <p class="buy"><button>Buy</button></p></section>
   </div>


</body>
</html>