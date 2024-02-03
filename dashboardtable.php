<?php 
 
  include('functions.php');

  // Check if the user is logged in
  if (!isLoggedIn()) {
      header('location: login.php');
  }

  
  // Fetch user data
  $userData = displayUserData();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css'>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./dashboard.css">
  <style>
    
    #sidebar ul.nav li a {
      color: #0b090a;
    }

    #sidebar ul.nav li.active a,
    #sidebar ul.nav li:hover a {
      background: #0d2818;
      color: #ffffff;
    }

    .navbar {
      background: #020202;
      border: none;
    }

    .navbar-default .navbar-nav > li > a {
      color: #ffffff;
    }

    .navbar-default .navbar-nav > li > a:hover,
    .navbar-default .navbar-nav > li > a:focus {
      background: #37474F;
      color: #ffffff;
    }

  </style>
</head>
<body>
  <div id="viewport">
   

      <div class="container-fluid">
      <h1>Welcome, <?php echo $_SESSION['user']['username']; ?></h1>
        <h2>User Data</h2>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>ID</th>
              <th>Username</th>
              <th>Email</th>
              <th>User Type</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($userData as $user) : ?>
              <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['username']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td><?php echo $user['user_type']; ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
 

 


</body>
</html>
