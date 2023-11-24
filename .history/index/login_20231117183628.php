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
 $_SESSION['error_message']="Incorrect username or password";
 header('Location: login.php');
 die;
  
}else{
 $_SESSION['error_message']="Incorrect username or password";
 header('Location: login.php');
 die;
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
    height:65vh;
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

</style>

<body>
    <div class="box">
    <form method="post">
        <div class="login">Login</div>
    <input type="text" name="user_name" id="user_name" placeholder="user_name" size="30"><br><br>
    <input type="password" name="password" id="password" placeholder="password"><br><br>
    <input type="submit" value="Login" id="button"><br><br>
    <div><a href="signup.php"> Click to Signup</a></div>
    <input type ="reset" id="reset">
    <?php
    $errorMessage = isset($_SESSION['error_message'])? $_SESSION['error_message'] : '';
    unset($_SESSION['error_message']);?>
    <div style="color:red; margin-top:10px;"><?php echo $errorMessage;?></div><br><br>
     

    </form>
    </div>
</body>
</html>