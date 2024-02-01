<?php
// Include the database connection file at the beginning
include_once('db_connection.php');

// Handle registration form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name_us'];
    $surname = $_POST['surname_us'];
    $email = $_POST['email_us'];
    $password = $_POST['pass_us'];
    $confirmPassword = $_POST['conf_pass_us'];

    // Validate form data
    if (empty($name) || empty($surname) || empty($email) || empty($password) || empty($confirmPassword)) {
        echo "All fields are required";
        exit;
    }

    // Check if passwords match
    if ($password !== $confirmPassword) {
        echo "Passwords do not match";
        exit;
    }

    // Hash the password securely
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert user data into the database
    $sql = "INSERT INTO users (name, surname, email, password, role) VALUES ('$name', '$surname', '$email', '$hashedPassword', 'user')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection when done (optional, as PHP automatically closes connections when the script finishes)
$conn->close();
?>
