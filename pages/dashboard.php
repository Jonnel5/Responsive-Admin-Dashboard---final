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
    $sql = "SELECT COUNT(`productid`) FROM `table_product`;";
    $result = $conn->query($sql);
?>

<!DOCTYPE html lang="en">
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/main.js"></script>
</head>
<body>
    <div class="topbar">
        <div class="toggle">
            <ion-icon name="menu-outline"></ion-icon>
        </div>

        <div class="search">
            <label>
                <input type="text" placeholder="Search here">
                <ion-icon name="search-outline"></ion-icon>
            </label>
        </div>

        <div class="user">
            <img src="assets/imgs/customer02.jpg" alt="">
        </div>
    </div>
    <div class="cardBox">
        <div class="card">
            <!-- <div>
                <div class="numbers">1,504</div>
                <div class="cardName">Daily Views</div>
            </div> -->

            <div>
                <div class="numbers">
                    <?php
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row['COUNT(`productid`)']; // Display the count value
                    } else {
                        echo "0"; // Default value if no rows are returned
                    }
                    ?>
                </div>
                <div class="cardName">Total Product</div>
            </div>

            <div class="iconBx">
                <ion-icon name="eye-outline"></ion-icon>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="numbers">80</div>
                <div class="cardName">Sales</div>
            </div>

            <div class="iconBx">
                <ion-icon name="cart-outline"></ion-icon>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="numbers">284</div>
                <div class="cardName">Comments</div>
            </div>

            <div class="iconBx">
                <ion-icon name="chatbubbles-outline"></ion-icon>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="numbers">₱7,842</div>
                <div class="cardName">Earning</div>
            </div>

            <div class="iconBx">
                <ion-icon name="cash-outline"></ion-icon>
            </div>
        </div>
    </div>
<!-- ================ ChartJs ================= -->
    <div class="chartsBx">
        <div class="chart"> <canvas id="chart-1"></canvas> </div>
        <div class="chart"> <canvas id="chart-2"></canvas> </div>
    </div>


    <!-- ================ Order Details List ================= -->
    <div class="details">
        <form action="productlist.php" method="post">
        <div class="recentOrders">
            <div class="cardHeader">
                <h2>Recent Orders</h2>
                <a href="#" class="btn">View All</a>
            </div>

            <table>
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>Price</td>
                        <td>Payment</td>
                        <td>Category</td>
                        <td>Status</td>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Pants Black</td>
                        <td>₱250</td>
                        <td>Paid</td>
                        <td>Men</td>
                        <td><span class="status delivered">Delivered</span></td>
                    </tr>

                    <tr>
                        <td>World Balance</td>
                        <td>₱150</td>
                        <td>Due</td>
                        <td>Shoes</td>
                        <td><span class="status pending">Pending</span></td>
                    </tr>

                    <tr>
                        <td>Black dress</td>
                        <td>₱250</td>
                        <td>Paid</td>
                        <td>Women</td>
                        <td><span class="status return">Return</span></td>
                    </tr>

                    <tr>
                        <td>Addidas Shoes</td>
                        <td>₱620</td>
                        <td>Due</td>
                        <td>Shoes</td>
                        <td><span class="status inProgress">In Progress</span></td>
                    </tr>

                    <tr>
                        <td>Top Shirt</td>
                        <td>₱200</td>
                        <td>Paid</td>
                        <td>Men</td>
                        <td><span class="status delivered">Delivered</span></td>
                    </tr>

                    <tr>
                        <td>Black dress</td>
                        <td>₱110</td>
                        <td>Due</td>
                        <td>Women</td>
                        <td><span class="status pending">Pending</span></td>
                    </tr>

                    <tr>
                        <td>Nike shoes</td>
                        <td>₱1200</td>
                        <td>Paid</td>
                        <td>Shoes</td>
                        <td><span class="status return">Return</span></td>
                    </tr>

                    <tr>
                        <td>Addidas Shoes</td>
                        <td>₱620</td>
                        <td>Due</td>
                        <td>Shoes</td>
                        <td><span class="status inProgress">In Progress</span></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>

        <!-- ================= New Customers ================ -->
        <div class="recentCustomers">
            <div class="cardHeader">
                <h2>Recent Customers</h2>
            </div>

            <table>
                <tr>
                    <td width="60px">
                        <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                    </td>
                    <td>
                        <h4>Jonnel Daipal <br> <span>Balangasan, Pagadian City</span></h4>
                    </td>
                </tr>

                <tr>
                    <td width="60px">
                        <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                    </td>
                    <td>
                        <h4>Wil fred <br> <span>Mahayag, Zamboanga Del Sur</span></h4>
                    </td>
                </tr>

                <tr>
                    <td width="60px">
                        <div class="imgBx"><img src="assets/imgs/randy canete.jpg" alt=""></div>
                    </td>
                    <td>
                        <h4>Randy Cañete <br> <span>Lower Lumbia, Pagadian City</span></h4>
                    </td>
                </tr>

                <tr>
                    <td width="60px">
                        <div class="imgBx"><img src="assets/imgs/Arianne Mamalias.jpg" alt=""></div>
                    </td>
                    <td>
                        <h4>Arianne Q. Mamalias <br> <span>Molave, Pagadian City</span></h4>
                    </td>
                </tr>

                <tr>
                    <td width="60px">
                        <div class="imgBx"><img src="assets/imgs/joll sirot.jpg" alt=""></div>
                    </td>
                    <td>
                        <h4>Joll Sirot <br> <span>Molave, Zamboanga Del Sur</span></h4>
                    </td>
                </tr>

                <tr>
                    <td width="60px">
                        <div class="imgBx"><img src="assets/imgs/june mark barbag cruz.jpg" alt=""></div>
                    </td>
                    <td>
                        <h4>June-Mark Barabag Cruz <br> <span>Dao, Pagadian City</span></h4>
                    </td>
                </tr>

                <tr>
                    <td width="60px">
                        <div class="imgBx"><img src="assets/imgs/Meky Quirante.jpg" alt=""></div>
                    </td>
                    <td>
                        <h4>Meky Quirante <br> <span>Balangasan, Pagadian City</span></h4>
                    </td>
                </tr>

                <tr>
                    <td width="60px">
                        <div class="imgBx"><img src="assets/imgs/christian apiag.jpg" alt=""></div>
                    </td>
                    <td>
                        <h4>Christian Apiag <br> <span>Bag-ong Dalagit, Mahayag, Zambaonga Del Sur</span></h4>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <script src="assets/js/main.js"></script>

    <!-- =================== Charts JS ==================== -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.umd.min.js"></script>
    <script src="asset/js/chartJS.js"></script>

<!-- ====== ionicons ======= -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
</body>
</html>
