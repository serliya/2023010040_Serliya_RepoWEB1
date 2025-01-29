<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "angkringan";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$user = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];
$confirm_pass = $_POST['confirm_password'];

// Check if passwords match
if ($pass !== $confirm_pass) {
    echo "Passwords do not match!";
    exit();
}

// Hash the password for security
$hashed_password = password_hash($pass, PASSWORD_DEFAULT);

// Insert the new user into the database
$sql = "INSERT INTO users (username, email, password) VALUES ('$user', '$email', '$hashed_password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
