<?php
    $connection = new mysqli("localhost", "root", '', "downloadimages");
    if ($connection->connect_error) die("Connection failed: ");
    if (isset($_FILES['ImageUpload"'])) {

        if (is_uploaded_file($_FILES['ImageUpload"']['tmp_name'])) {

            $imagePath = $_FILES['ImageUpload"']['tmp_name'];
            $imageName = $_FILES['ImageUpload"']['name'];

            move_uploaded_file($imagePath, "C:/Users/ThinkPad/Desktop/images/$imageName");
            $sql = "INSERT INTO  images (NameOfImage,DescriptionOfImage) VALUES (' $imageName','$imagePath')";
            $connection->close();
        }
    }
?>