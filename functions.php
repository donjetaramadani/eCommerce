<?php 
session_start();

$db = mysqli_connect('localhost', 'root', '', 'ecommerce');

$username = "";
$email    = "";
$errors   = array(); 

if (isset($_POST['register_btn'])) {
        register();
}


function register(){
       
        global $db, $errors, $username, $email;

  
        $username    =  e($_POST['username']);
        $email       =  e($_POST['email']);
        $password_1  =  e($_POST['password_1']);
        $password_2  =  e($_POST['password_2']);


        if (empty($username)) { 
                array_push($errors, "Username is required"); 
        }
        if (empty($email)) { 
                array_push($errors, "Email is required"); 
        }
        if (empty($password_1)) { 
                array_push($errors, "Password is required"); 
        }
        if ($password_1 != $password_2) {
                array_push($errors, "The two passwords do not match");
        }


        if (count($errors) == 0) {
                $password = md5($password_1);

                if (isset($_POST['user_type'])) {
                        $user_type = e($_POST['user_type']);
                        $query = "INSERT INTO users (username, email, user_type, password) 
                                          VALUES('$username', '$email', '$user_type', '$password')";
                        mysqli_query($db, $query);
                        $_SESSION['success']  = "New user successfully created!!";
                        header('location: home.php');
                }else{
                        $query = "INSERT INTO users (username, email, user_type, password) 
                                          VALUES('$username', '$email', 'user', '$password')";
                        mysqli_query($db, $query);

                     
                        $logged_in_user_id = mysqli_insert_id($db);

                        $_SESSION['user'] = getUserById($logged_in_user_id); 
                        $_SESSION['success']  = "You are now logged in";
                        header('location: index.php');                          
                }
        }
}


function getUserById($id){
        global $db;
        $query = "SELECT * FROM users WHERE id=" . $id;
        $result = mysqli_query($db, $query);

        $user = mysqli_fetch_assoc($result);
        return $user;
}


function e($val){
        global $db;
        return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
        global $errors;

        if (count($errors) > 0){
                echo '<div class="error">';
                        foreach ($errors as $error){
                                echo $error .'<br>';
                        }
                echo '</div>';
        }
}       

function isLoggedIn()
{
        if (isset($_SESSION['user'])) {
                return true;
        }else{
                return false;
        }
}


if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user']);
    header("location: login.php");
}



if (isset($_POST['login_btn'])) {
    login();
}

// LOGIN USER
function login(){
    global $db, $username, $errors;


    $username = e($_POST['username']);
    $password = e($_POST['password']);

 
    if (empty($username)) {
            array_push($errors, "Username is required");
    }
    if (empty($password)) {
            array_push($errors, "Password is required");
    }


if (count($errors) == 0) {
        $password = md5($password);
    
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
        $results = mysqli_query($db, $query);
    
        if (mysqli_num_rows($results) == 1) {
          
            $logged_in_user = mysqli_fetch_assoc($results);
            if ($logged_in_user['user_type'] == 'admin') {
                $_SESSION['user'] = $logged_in_user;
                $_SESSION['success']  = "You are now logged in";
    
               
                header('location: dashboard.php');
            } else {
                $_SESSION['user'] = $logged_in_user;
                $_SESSION['success']  = "You are now logged in";
    
            
                header('location: index.php');
            }
        } else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}



function isAdmin()
{
        if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
                return true;
        }else{
                return false;
        }
}



function displayUserData() {
        global $db;
        $query = "SELECT * FROM users";
        $result = mysqli_query($db, $query);
    
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }



    /**password validation form 
     * This form ensures that the password meets the criteria of having at least 8 characters, one uppercase letter, one lowercase letter, one digit, and one special character.
     * 
     * 
     * 
     *  function validatePassword() {
     *  const password = document.getElementById("password").value;
     *  const passwordError = document.getElementById("passwordError");
     *  Define regex for password validation
     *  const passwordRegex = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
     *  Check if the password matches the regex
     *  if (passwordRegex.test(password)) {
     *  passwordError.textContent = "";
     *  } else {
     *  passwordError.textContent = "Password must contain at least 8 characters, one uppercase letter, one lowercase letter, one digit, and one special character.";
     *  }
     *  }
     * 
     */