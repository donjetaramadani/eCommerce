<?php
// Include the database connection file at the beginning
include_once('db_connection.php');

// Handle login form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate form data
    if (empty($username) || empty($password)) {
        echo "Username and password are required";
        exit;
    }

    // Check if the user exists in the database
    $sql = "SELECT * FROM users WHERE email = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verify the password
        if (password_verify($password, $row['password'])) {
            // Password is correct, handle login success
            echo "Login successful";
        } else {
            // Incorrect password, handle login failure
            echo "Invalid password";
        }
    } else {
        // User not found, handle login failure
        echo "User not found";
    }
}

// Close the connection when done (optional, as PHP automatically closes connections when the script finishes)
$conn->close();
?>
