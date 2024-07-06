<?php
// Define database connection parameters
$servername = "localhost";
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "testdb"; // Your database name

// Initialize variables to store user input and error messages
$usernameInput = $passwordInput = "";
$usernameError = $passwordError = "";

// Function to sanitize user input
function sanitizeInput($input) {
    return htmlspecialchars(stripslashes(trim($input)));
}

// Function to validate user input
function validateInput($input) {
    return !empty($input);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate username
    if (empty($_POST["username"])) {
        $usernameError = "Username is required";
    } else {
        $usernameInput = sanitizeInput($_POST["username"]);
    }

    // Validate password
    if (empty($_POST["password"])) {
        $passwordError = "Password is required";
    } else {
        $passwordInput = sanitizeInput($_POST["password"]);
    }

    // If both username and password are provided, attempt database validation
    if (!empty($usernameInput) && !empty($passwordInput)) {
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // SQL query to retrieve user data
        $sql = "SELECT * FROM users WHERE username='$usernameInput' AND password='$passwordInput'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Successful login
            // Redirect or display further content here
            header("Location: welcome.php?username=" . urlencode($usernameInput));
            exit();
        } else {
            // Invalid credentials
            header("Location: index.php?usernameError=Invalid username or password&passwordError=");
            exit();
        }

        // Close connection
        $conn->close();
    }
}
?>
