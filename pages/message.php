<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Message Page</title>
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

    <!-- Message List -->
    <div class="container">
        <h1>Messages</h1>
        <ul class="message-list">
            <li class="message-item">
                <div class="sender">Jonnel Daipal</div>
                <div class="message">Thank you!</div>
                <div class="timestamp">10:00 AM</div>
            </li>
            <li class="message-item">
                <div class="sender">Christian Apiag</div>
                <div class="message">Nice</div>
                <div class="timestamp">11:05 AM</div>
            </li>
            <!-- Add more message items as needed -->
        </ul>
    </div>

    <!-- Link to your JavaScript file -->
    <script src="assets/js/main.js"></script>
</body>
</html>
