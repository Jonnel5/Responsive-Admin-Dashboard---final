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
// echo "Connected successfully"; // commented out to avoid outputting text in the HTML

// Fetch and display products from the database
$sql = "SELECT * FROM table_product";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Product Management</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <row>
        <col>
            <h3>Product Management</h3>
        </col>
        <col>
            <button onclick="document.getElementById('addProductModal').style.display='block'">Add Product</button>
        </col>
    </row>
</div>

<!-- Add Product Modal -->
<div id="addProductModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close" onclick="document.getElementById('addProductModal').style.display='none'">&times;</span>
        <div class="modal-container">
            <h2>Add Product</h2>
            <!-- Form for adding product -->
            <form action="insert_product.php" method="post" enctype="multipart/form-data">
                <label for="productName">Product Name:</label>
                <input type="text" id="productName" name="productName" required>

                <label for="productDescriptions">Descriptions:</label>
                <input type="text" id="productDescriptions" name="productDescriptions" required>

                <label for="productCategory">Category:</label>
                <select id="productCategory" name="productCategory" required>
                    <option value="men">Men</option>
                    <option value="women">Women</option>
                    <option value="shoes">Shoes</option>
                    <option value="essentials">Essentials</option>
                    <option value="kids">Kids</option>
                </select>

                <label for="productPrice">Price:</label>
                <input type="text" id="productPrice" name="productPrice" required>

                <label for="productImage">Product Image:</label>
                <input type="file" id="productImage" name="productImage" required>

                <button type="submit">Add</button>
            </form>
        </div>
    </div>
</div>

<!-- Product List Table -->
<div class="container product-list-container">
    <h2>Product List</h2>
    <table class="product-list-table">
        <thead>
        <tr>
            <th>Product ID</th>
            <th>Name</th>
            <th>Descriptions</th>
            <th>Category</th>
            <th>Price</th>
            <th>Image</th>
            <th>Action</th> <!-- Added Action column for buttons -->
        </tr>
        </thead>
        <tbody>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['productid'] . "</td>";
                echo "<td>" . $row['productname'] . "</td>";
                echo "<td>" . $row['productDescriptions'] . "</td>";
                echo "<td>" . $row['productCategory'] . "</td>";
                echo "<td>" . $row['productPrice'] . "</td>";
                echo "<td><img src='data:image/jpeg;base64," . $row['productimage'] . "' width='100' height='100' /></td>";
                echo "<td><button>Edit</button></td>";
                echo "<td>
                        <form action='../backend/delete_product.php' method='post'>
                            <input type='hidden' name='product_id' value='" . $row['productid'] . "'>
                            <button type='submit'>Delete</button>
                        </form>
                    </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No products found</td></tr>";
        }
        $conn->close(); // Close the database connection after use
        ?>
        </tbody>
    </table>
</div>

<script src="assets/js/main.js"></script>

<!-- <script>
    // Redirect to index.php after form submission
    document.getElementById('productForm').addEventListener('submit', function () {
        window.location.href = 'index.php';
    });
</script> -->
</body>
</html>
