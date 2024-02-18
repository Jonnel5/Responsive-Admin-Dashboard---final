// add hovered class to selected list item
let list = document.querySelectorAll(".navigation li");

function activeLink() {
    list.forEach((item) => {
        item.classList.remove("hovered");
    });
    this.classList.add("hovered");
}

list.forEach((item) => item.addEventListener("mouseover", activeLink));

// Menu Toggle
let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");

toggle.onclick = function () {
    navigation.classList.toggle("active");
    main.classList.toggle("active");
};

// Function to handle delete product
function deleteProduct(productId) {
    // Here you can implement the logic to delete the product with the given ID
    console.log('Deleting product with ID:', productId);
}

// Function to handle update product
function updateProduct(productId) {
    // Here you can implement the logic to update the product with the given ID
    console.log('Updating product with ID:', productId);
}

// =================== Login =========================

document.addEventListener('DOMContentLoaded', function () {
    const loginForm = document.getElementById('loginForm');

    loginForm.addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent form submission

        // Get username and password from the form
        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;

        // Check if username and password are correct (for demonstration purposes)
        if (username === 'admin' && password === 'password') {
            // Redirect to the dashboard page after successful login
            window.location.href = 'index.php';
        } else {
            alert('Invalid username or password. Please try again.');
        }
    });
});

function loadProductManagement() {
    // Fetch the content of productmanagement.html
    fetch('./pages/productmanagement.php')
        .then(response => response.text())
        .then(data => {
            // Place the content into the main div
            document.getElementById('mainContent').innerHTML = data;
        })
        .catch(error => console.error('Error loading content:', error));
}

function Customers() {
    // Fetch the content of productmanagement.html
    fetch('./pages/customers.php')
        .then(response => response.text())
        .then(data => {
            // Place the content into the main div
            document.getElementById('mainContent').innerHTML = data;
        })
        .catch(error => console.error('Error loading content:', error));
}

function Dashboard() {
    // Fetch the content of productmanagement.html
    fetch('./pages/dashboard.php')
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
    fetch('./pages/signout.php')
        .then(response => response.text())
        .then(data => {
            // Place the content into the main div
            document.getElementById('mainContent').innerHTML = data;
        })
        .catch(error => console.error('Error loading content:', error));
}

function Message() {
    // Fetch the content of productmanagement.html
    fetch('./pages/message.php')
        .then(response => response.text())
        .then(data => {
            // Place the content into the main div
            document.getElementById('mainContent').innerHTML = data;
        })
        .catch(error => console.error('Error loading content:', error));
}

function Login() {
    window.location.href = 'login.php';
}
