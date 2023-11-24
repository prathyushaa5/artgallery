<?php
session_start();
include("connection.php");  
include("functions.php");


if($_SERVER['REQUEST_METHOD']== "POST"){
 //something was posted 

$user_name= $_POST['user_name'];
$password= $_POST['password'];
if(!empty($user_name)&& !empty($password)){
  //read from database;
  $user_id=random_num(10);
  $query="select * from users where user_name='$user_name' limit 1";
  $result=mysqli_query($con,$query);
  if($result){
    if($result && mysqli_num_rows($result)>0)
{
    $user_data=mysqli_fetch_assoc($result);
     if($user_data['password']==$password){
        $_SESSION['user_id']=$user_data['user_id'];
        header("Location: art.php");
        die;
     }
} 
 }
 echo "Please enter valid username or password!";
  
}else{
 echo "Please enter valid username or password!";
}
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../index/style.css">
</head>
<body>
    <div class="box">
    <form method="post">
        <div class="login">Login</div>
    <input type="text" name="user_name" id="user_name" placeholder="user_name"><br><br>
    <input type="password" name="password" id="password" placeholder="password"><br><br>
    <input type="submit" value="Login">
    <a href="signup.php"> Click to Signup</a>
    </form>
    </div>
</body>
</html>