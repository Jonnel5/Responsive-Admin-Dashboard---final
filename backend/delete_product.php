<?php
// Check if product ID is provided and valid
if(isset($_POST['product_id']) && is_numeric($_POST['product_id'])) {
    // Sanitize the input to prevent SQL injection
    $product_id = $_POST['product_id'];
    
    // Your database connection code here
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

    // Prepare and execute SQL statement to delete the product
    $sql = "DELETE FROM table_product WHERE productid = ?";

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $product_id);

    if ($stmt->execute()) {
        echo "Product deleted successfully";
        header("Location: ../pages/maindashboard.php"); // Redirect back to productmanagement.php after deletion
        exit;
    } else {
        echo "Error deleting product: " . $conn->error;
    }

    $stmt->close(); // Close the prepared statement
    $conn->close(); // Close the database connection
} else {
    echo "Invalid product ID";
}
?>
