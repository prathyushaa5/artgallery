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
    echo "Please enter some valid username and password!";
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
<body>
    <div class="box">
    <form method="post">
        <div class="signup">Signup</div>
    <input type="text" name="user_name" id="user_name" placeholder="user_name"><br><br>
    <input type="password" name="password" id="password" placeholder="password"><br><br>
    <input type="submit" id="button" value="Signup">
    <a href="login.php"> Click to login</a>
    </form>
    </div>
</body>
</html>