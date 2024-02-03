<?php

include_once 'databaseConnection.php';
include_once 'user.php';

class UserRepository {
    private $connection;

    public function __construct() {
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    }

    public function insertUser($user) {
        $conn = $this->connection;

        $username = $user['username'];
        $email = $user['email'];
        $password = $user['password'];
        $user_type = $user['user_type'];

        $sql = "INSERT INTO users (username, email, password, user_type) VALUES (?, ?, ?, ?)";
        $statement = $conn->prepare($sql);
        $statement->execute([$username, $email, $password, $user_type]);

        echo "<script> alert('User has been inserted successfully!'); </script>";
    }


    public function getAllUsers() {
        $conn = $this->connection;

        $sql = "SELECT * FROM users";
        $statement = $conn->query($sql);
        $users = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $users;
    }

    public function getUserById($id) {
        $conn = $this->connection;

        $sql = "SELECT * FROM users WHERE id = ?";
        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
        $user = $statement->fetch(PDO::FETCH_ASSOC);

        return $user;
    }

    public function updateUser($id, $name, $email, $password) {
        $conn = $this->connection;

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $sql = "UPDATE users SET name=?, email=?, password=? WHERE id=?";
        $statement = $conn->prepare($sql);
        $statement->execute([$name, $email, $hashedPassword, $id]);

        echo "<script>alert('Update was successful');</script>";
    }

    public function deleteUser($id) {
        $conn = $this->connection;

        $sql = "DELETE FROM users WHERE id=?";
        $statement = $conn->prepare($sql);
        $statement->execute([$id]);

        echo "<script>alert('Delete was successful');</script>";
    }
}

?>
