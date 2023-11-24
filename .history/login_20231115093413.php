<?php
  $username = $_POST['username'];
  $password = $_POST['password'];


$conn=new mysqli('localhost','root','','artgallery')
if($conn->connect-error){
    die('connection failed :' .$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into login(username,password) values(?,?)");
    $stmt->blind_param("ss",$username,$password);
    $stmt->execute();
    echo "registration successfully ..."
    $stmt ->close();
    $conn ->close();
}
?>
