<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Customers Page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Link to your CSS file -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Topbar -->
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

    <!-- Customers Table -->
    <div class="container">
        <h1>Customers</h1>
        <table class="customer-table">
            <thead>
                <tr>
                    <th>Customer ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Jonnel Daipal</td>
                    <td>jonneldaipal@gmail.com</td>
                    <td>Balangasan, Pagadian City</td>
                    <td>09382956996</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Wilfred Catalan</td>
                    <td>WilfredCatalan@gmail.com</td>
                    <td>Mahayag, Zambaonga Del Sur</td>
                    <td>09667249847</td>
                </tr>
                <td>1</td>
                    <td>Chirstian Apiah</td>
                    <td>Chiristianapiag@gmail.com</td>
                    <td>Mahayag, Zambaonga Del
                    </td>
                    <td>09382956996</td>
                <tr>
                    <td>2</td>
                    <td>june mark cruz</td>
                    <td>junemarkcruz@gmail.com</td>
                    <td>Pagadian, Zambaonga Del Sur</td>
                    <td>09667249847</td>
                </tr>
                <!-- Add more customer rows as needed -->
            </tbody>
        </table>
    </div>

    <!-- Link to your JavaScript file -->
    <script src="assets/js/main.js"></script>
</body>
</html>
