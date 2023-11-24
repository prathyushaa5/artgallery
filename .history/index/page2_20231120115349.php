<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Page 2</title>
</head>

<style>
    body {
    font-family: Arial, sans-serif;
    margin: 20px;
}

form {
    margin-bottom: 20px;
}

.image-container {
    border: 1px solid #ddd;
    padding: 10px;
    margin: 10px;
    text-align: center;
}

img {
    max-width: 100%;
    max-height: 200px;
    display: block;
    margin: 0 auto;
}

.amount {
    margin-top: 10px;
}

.buy-button {
    background-color: #4CAF50;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
</style>
<body>
    <?php
        // Retrieve images from the database
        // Add your database connection code here
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "artgallery";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM pictures";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="image-container">';
                echo '<img src="' . $row['image_path'] . '" alt="Uploaded Image">';
                echo '<div class="amount">Amount: $' . $row['price'] . '</div>';
                echo '<button class="buy-button">Buy</button>';
                echo '</div>';
            }
        } else {
            echo 'No images found.';
        }

        $conn->close();
    ?>

    <script src="script.js"></script>
</body>
</html>