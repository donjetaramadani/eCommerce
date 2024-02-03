

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


    .container {
    width: 1100px;
    margin-left: 350px;
    margin-top: 100px;
}


@media (max-width: 992px) {
    .container {
        width: 700px; 
        margin-left: 200px; 
    }
}

  </style>
</head>
<body>
  <div id="viewport">
    
    <div id="sidebar">

      <header>
            <div class="header-logo">
                <img src="img/IsmailKadare-logos_transparent.png" alt="LogoIK"/>
            </div>
      </header>


      <ul class="nav">
          
            <li><a href="dashboardtable.php"><i class="zmdi zmdi-view-dashboard"></i> Dashboard</a></li>
            
            
            <li><a href="user_management.php"><i class="zmdi zmdi-account"></i> User Management</a></li>


            <li>
                <a href="#">
                    <i class="zmdi zmdi-comment-more"></i> Contact
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="zmdi zmdi-chart"></i> Products
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="zmdi zmdi-info-outline"></i> About
                </a>
            </li>
             <li>
                <a href="#">
                    <i class="zmdi zmdi-settings"></i> Services
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="zmdi zmdi-notifications"></i> Notifications
                </a>
            </li>
        </ul>
    </div>


   
    <div id="content">
        <nav class="navbar navbar-default">

          <div class="container-fluid">

               <ul class="nav navbar-nav navbar-right">
            
                   <li><a href="logout.php">Sign Out</a></li>
                </ul>
             </div>
        </nav>

    </div>
  </div>

 


</body>
</html>
