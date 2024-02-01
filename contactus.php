<?php
// Include the database connection file at the beginning
include_once('db_connection.php');

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['register'])) {
        // Handle registration form
        $name = $_POST['name_us'];
        $surname = $_POST['surname_us'];
        $email = $_POST['email_us'];
        $password = password_hash($_POST['pass_us'], PASSWORD_DEFAULT); // Hash the password

        $sql = "INSERT INTO users (name, surname, email, password) VALUES ('$name', '$surname', '$email', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } elseif (isset($_POST['login'])) {
        // Handle login form
        // Add your login logic here
    }
}

// ... rest of your PHP code

// Close the connection when done (optional, as PHP automatically closes connections when the script finishes)
$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link href='//fonts.googleapis.com/css?family=Signika+Negative:300,400,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="contactus.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="contactus.css?v=<?php echo time(); ?>">

</head>
<body>
    <div id="viewport" class="bkg-layer">
          <div id="content" class="bkg-content-holder">
              <div class="content-holder">

             
<header class="header">
               <div class="header-container flex flex-space-between-center">
                    
                    <div class="header-logo">
                         <img src="img/IsmailKadare-logos_transparent.png" alt="LogoIK"/>
                    </div>

                     <div class="header-nav">
                        <nav class = "nav-links">
                             <ul class="main-nav-list flex-space-between link-spacer">
                 
                                  <li><a href="index.php">HOME</a></li>
                                  <li><a href="aboutUs.php">ABOUTUS</a></li>
                                  <li><a href="shop.php">SHOP</a></li>
                                  <li><a href="contactus.php">CONTACT</a></li>
                                  <li><a href="shopping-cart.php"><i class="fas fa-shopping-cart"></i></a></li>
                                  <li><a href="dashboard.php"><i class="fas fa-user"></i></a></li>
                              </ul>
                         </nav>
                      </div>
                 </div>
          </header>

        <div class="content-top position-relative">
                <div class="content-top-content">

                    <div class="content-top-asset position-relative">

                          <picture class="flex">
                                  <img src="img/home.jpg" alt="Mytological Creatures and Symbolic Imagery" class="body-bkg-img"/>
                          </picture>

                          <div class="content-body-fade"></div>
                      </div>
                 </div>

       
                  <main class="sliders-container">
                        <ul class="pagination">
                          <li class="pagination__item"><a class="pagination__button"></a></li>
                          <li class="pagination__item"><a class="pagination__button"></a></li>
                          <li class="pagination__item"><a class="pagination__button"></a></li>
                          <li class="pagination__item"><a class="pagination__button"></a></li>
                        </ul>
                  </main>
                

                    <div class="main">
                        <ul class="cards">
                                  <li class="cards_item">

                                        <div class="card">
                                              <div class="card_image"><img src="img/location.jpg" alt="mixed vegetable salad in a mason jar. " /></div>

                                                    <div class="card_content">
                                                        <h2 class="card_title">Location <span class="orange">&#x2022; </span></h2>

                                                        <div class="card_text">
                                                            <p>We are delighted to connect with you! At IK-Ecommerce Company, we value communication and look forward to hearing from you.  </p>
                                                            <br><p>
                                                                Address 1:
    	                                                        Street: Rruga Luan Haradinaj
                                                                City: Pristina
                                                                Zip Code: 10000
                                                                Country: Kosovo
                                                            </p>
                                                            <p>
                                                                Address 2:Street: Rruga Deshmoret e Kombit
                                                                City: Tirana
                                                                Zip Code: 1001
                                                                Country: Albania 
                                                               
                                                            </p>


                                                        </div>

                                                        <button class="card_btn orange">See more +</button>
                                                </div>
                                            </div>
                                    </li>
                    
                                    <li class="cards_item">
                                        <div class="card">
                                              <div class="card_image"><img src="img/people.jpg" alt="a Reuben sandwich on wax paper. " /></div>

                                                  <div class="card_content">
                                                      <h2 class="card_title">Assistance<span class="orange">&#x2022; </span></h2>
                                                          <div class="card_text">
                                                                <p>For any inquiries or assistance, please feel free to contact us at:
                                                                </p>
                                                                
                                                                <p>Phone: [888 888 888]
                                                                   Email: [ikecommerce@gmail.com]
                                                                </p>
                                                                <p>Phone: [111 111 111]
                                                                    Email: [ikeGcommerce@gmail.com]
                                                                </p>

                                                            </div>
                                                          <button class="card_btn orange">See more +</button>
                                                    </div>
                                          </div>
                                      </li>

                                    <li class="cards_item">
                                          <div class="card">

                                                <div class="card_image">
                                                    <img src="img/gallery.jpg" alt="A side view of a plate of figs and berries. " />
                                                </div>

                                                <div class="card_content">
                                                    <h2 class="card_title">Visiting Hours <span class="orange">&#x2022; </span></h2>
                                                    <span class="note-sm">Gallery/Company</span>

                                                    <div class="card_text">
                                                        <p>We welcome you to visit us during our operational hours:</p>
                                                        <p>Connect with us on social media to stay updated!</p>
                                                    </div>
                                                    <button class="card_btn orange">See more +</button>
                                                </div>

                                          </div>
                                      </li>
                          </ul>
                      </div>
     

         <!-- Combined Login/Register Form -->
    <div class="cont_principal">
        <div class="cont_centrar">
            <div class="cont_login">
                <form action="contactus.php" method="POST">

                    <!-- Registration Form Fields -->
                    <!-- ... your existing registration form fields ... -->

                    <div class="cont_btn">
                        <button id="register" type="button" class="btn-7" name="register"><span>REGISTER</span></button>
                    </div>

                    <!-- Script to redirect to register.php -->
                    <script>
                        document.getElementById('register').addEventListener('click', function () {
                            window.location.href = 'rregister.php';
                        });
                    </script>

                    <!-- Login Form Fields -->
                    <!-- ... your existing login form fields ... -->

                    <div class="cont_btn">
                        <button id="signin" type="button" class="btn-7" name="login"><span>SIGN IN</span></button>
                    </div>

                    <!-- Script to redirect to signin.php -->
                    <script>
                        document.getElementById('signin').addEventListener('click', function () {
                            window.location.href = 'signin.php';
                        });
                    </script>
                </form>
            </div>
        </div>
    </div>
       


</div>
<?php include('footer.php'); ?>
<script src='https://rawgit.com/lmgonzalves/momentum-slider/master/dist/momentum-slider.min.js'></script>
<script  src="./contactus.js"></script>


</body>
</html>
