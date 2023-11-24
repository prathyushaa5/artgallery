<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="navbar">
   
    <span class="p1"><a href="tel:+7454453578">  <i class="fa-solid fa-phone"></i></a>
        <a href="mailto:someone@gmail.com">  <i class="fa-solid fa-envelope"></i></a>
    </span>
    
    <a class="home" href="../index/index.html">Home</a>
    <a class="admin">Admin</a>
    <a class="aboutUs" href="../about-us/about-us.html">About Us</a>
    </div>
    <div class="main">
    <div class="slider">
        <span id="slide1"></span>
        <span id="slide2"></span>
        <span id="slide3"></span>
    <div class="image-container">
        <img src="../images/bg1.jpg" width="1000" height="600" class="slide">
        <img src="../images/bg2.jpeg" width="1000" height="600" class="slide">
        <img src="../images/bg3.jpg"  width="1000" height="600" class="slide">
    </div>
    <div class="buttons">
        <a href="#slide1"></a>
        <a href="#slide2"></a>
        <a href="#slide3"></a>
    </div>
    
    </div>
    <div class="name1" onmouseover="changeColor();" onmouseout="nochangeColor();">
        Art Gallery
    </div>

    <div class="name2">
        "ART is not what you see but what you make others see"
    </div>
    <div class="name3">
        <p>Shop for the ART you'll love</p>
        <button class="name3-shopnow"><a href="../Login/login.html">Shop Now</a></button> 
    </div>
   
</div>

<script src="index.js">

</script>
</body>
</html>