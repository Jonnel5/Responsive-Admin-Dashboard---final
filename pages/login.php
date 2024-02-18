<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css"> <!-- Assuming you have a style.css file for styling -->
</head>

<body>
    <div class="container">
        <h2>Login</h2>
        <form id="loginForm">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="button" onclick="displayLoginModal()">Login</button>
        </form>
    </div>

    <!-- Login Modal -->
    <div id="loginModal" class="modal" style="display: none;">
        <div class="modal-content">
            <span class="close" onclick="closeLoginModal()">&times;</span>
            <div class="modal-container">
                <h2>Login</h2>
                <form id="loginFormModal" onsubmit="login(event)">
                    <div class="form-group">
                        <label for="usernameModal">Username</label>
                        <input type="text" id="usernameModal" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="passwordModal">Password</label>
                        <input type="password" id="passwordModal" name="password" required>
                    </div>
                    <button type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Script for displaying the login modal -->
    <script>
        function displayLoginModal() {
            document.getElementById('loginModal').style.display = 'block';
        }

        function closeLoginModal() {
            document.getElementById('loginModal').style.display = 'none';
        }

        // Function to handle login form submission
        function login(event) {
            event.preventDefault(); // Prevent default form submission

            // Retrieve the values of the username and password input fields
            var username = document.getElementById('usernameModal').value;
            var password = document.getElementById('passwordModal').value;

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
    </script>
</body>

</html>
