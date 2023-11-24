<?php
session_start();
   include("connection.php");  
   include("functions.php");


   if($_SERVER['REQUEST_METHOD']== "POST"){
    //something was posted 

   $user_name= $_POST['user_name'];
   $password= $_POST['password'];
   if(!empty($user_name)&& !empty($password)){
     //save to database;
     $user_id=random_num(10);
     $query="insert into users(user_id,user_name,password) values ('$user_id','$user_name','$password')";
     mysqli_query($con,$query);
     header("Location: login.php");
     die;
   }else{
    $_SESSION['error_message']="Enter valid username/password";
    header('Location: signup.php');
    die;
   }
   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
body{
    padding:0px;
    margin:0px;
    display:flex;
    justify-content:center;
    align-items:center;
    background-color:#9F91CC;
}
.login,.signup{
    margin:10px;
    font-size:30px;
    font-weight:bolder;
    text-align:left;
   
   
}
.box{
    width:30%;
    height:74vh;
    border:2px solid #ccc;
    margin:100px;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
    border-radius:20px;
    background-color:#ffffff;
    text-align:center;  
}
input{
  height:15%;
  width:100%;
  box-sizing:border-box;
}
a{
    text-decoration:none;
    color:#111111;
}
#button,#reset{
    color:#ffffff;
    background-color:#9F91CC;
    border:none;
    font-weight:bolder;
    display:block;
    width:100%;

}
#button:hover{
    opacity:0.5;
}
a:hover{
    color:green;
}
#reset{
    margin-top:10px;
}
#reset:hover{
    opacity:0.5;
}
#back{
    float:right;
}

</style>
<body>
    <div class="box">
    <form method="post">
        <div class="signup">Signup</div>
    <input type="text" name="user_name" id="user_name" placeholder="user_name" size="30"><br><br>
    <input type="password" name="password" id="password" placeholder="password" size="30"><br><br>
    <input type="submit" id="button" value="Signup"><br><br>
    <a href="login.php">Click to login</a>
    <input type ="reset" id="reset">
    <?php
    $errorMessage = isset($_SESSION['error_message'])? $_SESSION['error_message'] : '';
    unset($_SESSION['error_message']);?>
    <div style="color:red; margin-top:10px;"><?php echo $errorMessage;?></div><br><br>
    <a href="../index/index.html" id="back"><i class="fa-solid fa-arrow-left"></i></a>

    </form>
    </div>
</body>
</html>