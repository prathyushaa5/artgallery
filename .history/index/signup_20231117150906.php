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
    <link rel="stylesheet" href="../index/style.css">
</head>
<body>
    <div class="box">
    <form method="post">
        <div class="signup">Signup</div>
    <input type="text" name="user_name" id="user_name" placeholder="user_name" size="30"><br><br>
    <input type="password" name="password" id="password" placeholder="password" size="30"><br><br>
    <input type="submit" id="button" value="Signup"><br><br>
    <a href="login.php">Click to login</a>
    <?php
    $errorMessage = isset($_SESSION['error_message'])? $_SESSION['error_message'] : '';
    unset($_SESSION['error_message']);?>
    <div style="color:red; margin-top:10px;"><?php echo $errorMessage;?></div><br><br>

    </form>
    </div>
</body>
</html>