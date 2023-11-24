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
</head>
<body>
  hello ,<?php echo $user_data['user_name'];?>
</body>
</html>