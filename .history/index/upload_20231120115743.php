<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="artgallery";

if(!$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){
  die("failed connection");


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $uploadDir = 'uploads/';
    $uploadFile = $uploadDir . basename($_FILES['image']['name']);
    
    if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
        $price = $_POST['price'];

        // Save to MySQL database
        // Add your database connection details here
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "artgallery";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO pictures (image_path, price) VALUES ('$uploadFile', '$price')";

        if ($conn->query($sql) === TRUE) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false]);
        }

        $conn->close();
    } else {
        echo json_encode(['success' => false]);
    }
}
?>