<?php
// Include the database connection file at the beginning
include_once('db_connection.php');

//$error_message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    // Handle login form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Fetch user data based on the provided username
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found, verify password
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Password is correct, redirect or perform other actions
            header('Location: dashboard.php');
            exit();
        } else {
            // Password is incorrect, set error message
            $error_message = 'Invalid password';
        }
    } else {
        // User not found, set error message
        $error_message = 'User not found';
    }
}

?>















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link href='//fonts.googleapis.com/css?family=Signika+Negative:300,400,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="signincontactus.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
       
        form {
            max-width: 400px;
            margin: 20px auto;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }

        button {
            padding: 10px;
        }

        .link_forgot_pass {
            opacity: 0;
            top: -5px;
        }
    </style>
</head>
<body>
    <div id="viewport" class="bkg-layer">
          <div id="content" class="bkg-content-holder">
              <div class="content-holder">

              <?php include('header.php'); ?>

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
                             <div class="cont_tabs_login">
                               <ul class='ul_tabs'>
                                    <li class="active"><a href="#" onclick="sign_in()">SIGN IN</a><span class="linea_bajo_nom"></span></li>
                                  
                                </ul>
                            </div>

                          <!--<div class="cont_text_inputs">
                                Registration Form Fields 
                                <input type="text" class="input_form_sign d_block active_inp" placeholder="NAME" name="name_us" />
                                <input type="text" class="input_form_sign d_block active_inp" placeholder="SURNAME" name="surname_us" />
                                <input type="text" class="input_form_sign d_block active_inp" placeholder="EMAIL" name="email_us" />
                                <input type="password" class="input_form_sign d_block active_inp" placeholder="PASSWORD" name="pass_us" />
                                <input type="password" class="input_form_sign" placeholder="CONFIRM PASSWORD" name="conf_pass_us" />
                                <a href="#" class="link_forgot_pass d_block">Forgot Password ?</a>
                            </div>-->

                            

                           <div class="cont_text_inputs">
                               
                                <input type="text" class="input_form_sign d_block active_inp" placeholder="USERNAME" name="username" />
                                <input type="password" class="input_form_sign d_block active_inp" placeholder="PASSWORD" name="password" />
                                <a href="#" class="link_forgot_pass d_block">Forgot Password ?</a>
                            </div>
                           <!-- <div class="cont_btn">
                                <button type="submit" class="btn-7" name="register"><span>REGISTER</span></button>
                            </div>-->

                            <div class="cont_btn">
                                <button type="submit" class="btn-7" name="login"><span>SIGN IN</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
       
<?php include('footer.php'); ?>

</div>

<script src='https://rawgit.com/lmgonzalves/momentum-slider/master/dist/momentum-slider.min.js'></script>
<script  src="./contactus.js"></script>


</body>
</html>
