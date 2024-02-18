<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "the_best_deals";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Collect form data
        $productName = $_POST['productName'];
        $productDescriptions = $_POST['productDescriptions'];
        $productCategory = $_POST['productCategory'];
        $productPrice = $_POST['productPrice'];
        $productImage = $_FILES['productImage']['tmp_name'];

        // Convert image to base64
        $productImageBase64 = base64_encode(file_get_contents($productImage));

        // Prepare and bind SQL statement
        $stmt = $conn->prepare("INSERT INTO table_product (productname, productDescriptions, productCategory, productPrice, productImage) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $productName, $productDescriptions, $productCategory, $productPrice, $productImageBase64);

        

        // Execute the statement
        if ($stmt->execute()) {
            // echo "New product added successfully";
            header('location: ../pages/maindashboard.php');
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close statement and connection
        $stmt->close();
        $conn->close();
    }
?>
