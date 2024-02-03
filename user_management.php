<?php
include('dashboard.php');
include_once 'functions.php';

if (!isLoggedIn()) {
    header('location: login.php');
}


include_once 'userRepository.php';
$userRepository = new UserRepository();

//CRUD
if (isset($_POST['add_user'])) {
   
    $user = array(
        'username' => $_POST['username'],
        'email' => $_POST['email'],
        'password' => md5($_POST['password']), 
        'user_type' => $_POST['user_type']
    );
    $userRepository->insertUser($user);
}

if (isset($_POST['update_user'])) {

    $user_id = $_POST['user_id'];
    $user = array(
        'username' => $_POST['username'],
        'email' => $_POST['email'],
        'user_type' => $_POST['user_type']
    );
    $userRepository->updateUser($user_id, $user);
}

if (isset($_GET['delete_user'])) {
    
    $user_id = $_GET['delete_user'];
    $userRepository->deleteUser($user_id);
}

?>


<div class="container">
    <h2>User Management</h2>


    <form method="post" action="">
        <label>Username:</label>
        <input type="text" name="username" required>
        <label>Email:</label>
        <input type="email" name="email" required>
        <label>Password:</label>
        <input type="password" name="password" required>
        <label>User Type:</label>
        <select name="user_type" required>
            <option value="user">User</option>
            <option value="admin">Admin</option>
        </select>
        <button type="submit" name="add_user">Add User</button>
    </form>


    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>User Type</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $users = $userRepository->getAllUsers();
            foreach ($users as $user) :
            ?>
                <tr>
                    <td><?php echo $user['id']; ?></td>
                    <td><?php echo $user['username']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php echo $user['user_type']; ?></td>
                    <td>
                      <a href="edit_user.php?id=<?php echo $user['id']; ?>" style="color: red;">Edit</a>
                      <a href="?delete_user=<?php echo $user['id']; ?>" style="color: blue;" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
