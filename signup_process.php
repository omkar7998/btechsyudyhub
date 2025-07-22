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
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['message'];  // Assuming 'message' is the password field in the signup form

// Prepare SQL query using prepared statements
$stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $password);  // 'sss' stands for 3 string parameters

// Execute the statement
if ($stmt->execute()) {
    echo "New record created successfully";
    // Optionally, redirect to the login page or show a success message
    header("Location: login.html");
    exit;
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
