<?php

$con = new mysqli('localhost', 'root', '', 'portfolio');

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

if (isset($_POST['submit'])) {
    $name = strip_tags($con->real_escape_string($_POST['name']));
    $email = strip_tags($con->real_escape_string($_POST['email']));
    $phone = strip_tags($con->real_escape_string($_POST['phone']));
    $subject = strip_tags($con->real_escape_string($_POST['subject']));
    $budget = strip_tags($con->real_escape_string($_POST['budget']));
    $message = strip_tags($con->real_escape_string($_POST['message']));

    // Handle file upload
    $target_dir = "temp_folder/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size (limit to 5MB)
    if ($_FILES["file"]["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg" && $fileType != "gif" && $fileType != "pdf") {
        echo "Sorry, only JPG, JPEG, PNG, GIF, and PDF files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            $sql = "INSERT INTO info(name, email, phone, subject, budget, message, file) VALUES('$name', '$email', '$phone', '$subject', '$budget', '$message', '$target_file')";
            if ($con->query($sql) === TRUE) {
                echo "The file ". htmlspecialchars(basename($_FILES["file"]["name"])). " has been uploaded.";
            } else {
                echo "Error: " . $sql . "<br>" . $con->error;
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

$con->close();

// Redirect after processing
header('location:http://localhost/portfolio/index.php');

?>
