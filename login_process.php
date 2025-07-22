<?php
// Database connection
$servername = "localhost";
$username = "root";  // default XAMPP username
$password = "";      // default XAMPP password (empty)
$dbname = "btech_study_hub";  // your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$username = $_POST['username'];
$password = $_POST['password'];

// Debug: Output received data
echo "Username: $username <br>";
echo "Password: $password <br>";

// Query the database to find the user
$sql = "SELECT * FROM users WHERE email='$username' AND password='$password'";
echo "SQL Query: $sql <br>";  // Debug: Check the query
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // User found, login successful
    // Redirect to home page or dashboard
    header("Location: branches.html");
    exit;
} else {
    // User not found, show error
    echo "Invalid username or password";
}

$conn->close();
?>
