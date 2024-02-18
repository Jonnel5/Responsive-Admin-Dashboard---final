<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Best Deals Dashboard</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="index.php">
                        <span class="icon">
                            <ion-icon name="bag-handle-outline"></ion-icon>
                        </span>
                        <span class="title">The Best Deals</span>
                    </a>
                </li>

                <li>
                    <a href="#" onclick="Dashboard()">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="#" onclick="loadProductManagement()">
                        <span class="icon">
                            <ion-icon name="cart-outline"></ion-icon>
                        </span>
                        <span class="title">Manage Product</span>
                    </a>
                </li>

                <li>
                    <a href="#" onclick="Customers()">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon> 
                        </span>
                        <span class="title">Customers</span>
                    </a>
                </li>

                <li>
                    <a href="#" onclick="Message()">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Messages</span>
                    </a>
                </li>

                <li>
                    <a href="#" onclick="signOut()">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>                     

                <li>
                    <a href="#" onclick="Login()">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Login</span>
                    </a>
                </li>

            </ul>
        </div>
        

        <!-- ========================= Main ==================== -->
        <div class="main" id="mainContent">
            <!-- ======================= Cards ================== -->
        </div>
    </div>

    <!-- Login Modal -->
    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeLoginModal()">&times;</span>
            <div class="modal-container">
                <h2>Login</h2>
                <form id="loginForm" onsubmit="login(event)">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <button type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
        function loadProductManagement() {
            // Fetch the content of productmanagement.html
            fetch('productmanagement.php')
                .then(response => response.text())
                .then(data => {
                    // Place the content into the main div
                    document.getElementById('mainContent').innerHTML = data;
                })
                .catch(error => console.error('Error loading content:', error));
        }

        function Customers() {
            // Fetch the content of productmanagement.html
            fetch('customers.php')
                .then(response => response.text())
                .then(data => {
                    // Place the content into the main div
                    document.getElementById('mainContent').innerHTML = data;
                })
                .catch(error => console.error('Error loading content:', error));
        }

        function Dashboard() {
            // Fetch the content of productmanagement.html
            fetch('dashboard.php')
                .then(response => response.text())
                .then(data => {
                    // Place the content into the main div
                    document.getElementById('mainContent').innerHTML = data;
                })
                .catch(error => console.error('Error loading content:', error));
        }

        function Main() {
            // Fetch the content of productmanagement.html
            fetch('index.php')
                .then(response => response.text())
                .then(data => {
                    // Place the content into the main div
                    document.getElementById('mainContent').innerHTML = data;
                })
                .catch(error => console.error('Error loading content:', error));
        }

        function SignOut() {
            // Fetch the content of productmanagement.html
            fetch('signout.php')
                .then(response => response.text())
                .then(data => {
                    // Place the content into the main div
                    document.getElementById('mainContent').innerHTML = data;
                })
                .catch(error => console.error('Error loading content:', error));
        }

        function Message() {
            // Fetch the content of productmanagement.html
            fetch(' message.php')
                .then(response => response.text())
                .then(data => {
                    // Place the content into the main div
                    document.getElementById('mainContent').innerHTML = data;
                })
                .catch(error => console.error('Error loading content:', error));
        }

        function Login() {
            document.getElementById('loginModal').style.display = 'block';
        }

        function closeLoginModal() {
            document.getElementById('loginModal').style.display = 'none';
        }

        // Function to handle login form submission
        function login(event) {
            event.preventDefault(); // Prevent default form submission

            // Retrieve the values of the username and password input fields
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;

            // Validate the username and password (you can add more sophisticated validation logic here)
            if (username.trim() === '' || password.trim() === '') {
                alert('Please enter both username and password.');
                return; // Stop further execution if validation fails
            }

            // If validation passes, proceed with authentication (you can add your authentication logic here)
            // For demonstration purposes, let's just log the values and redirect to a dashboard page
            console.log('Username:', username);
            console.log('Password:', password);

            // Close the login modal
            closeLoginModal();

            // Redirect the user to a different page upon successful login
            window.location.href = 'dashboard.php'; // Replace 'dashboard.html' with your desired URL
        }

        // Function to handle signout button click
        function signOut() {
            // Perform any necessary signout actions (e.g., clearing session data, logging out from server)

            // For demonstration purposes, let's simply redirect to the login page
            window.location.href = 'index.php'; // Replace 'login.html' with your login page URL
        }
    </script>
</body>

</html>
