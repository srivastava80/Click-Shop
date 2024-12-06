<?php
include('../includes/connect.php');
include('../functions/common_functions.php');
@session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> User Login Page</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css" />
    <link rel="stylesheet" href="../assets/css/main.css" />
</head>
<style>
        @import url('https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    
@import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');

    *{
      font-family: "Poppins", sans-serif;
    }
    .h-font{
      font-family: "Merienda", cursive;
    }
    .hp-font{
      font-family: "Pacifico", cursive;
    }
       body {
    background-image: url("https://cdn.photoroom.com/v2/image-cache?path=gs://background-7ef44.appspot.com/backgrounds_v3/black/47_-_black.jpg ");
    background-size: cover; /* Image ko puri screen par stretch karta hai */
    background-position: center; /* Image ko center mein set karta hai */
    background-repeat: no-repeat; /* Image ko repeat nahi hone deta */
    background-attachment: fixed; /* Image ko fixed karta hai, jab scroll karte hain toh image nahi hilta */
    height: 100vh; /* Body ka height 100% screen ka hota hai */
    margin: 0; /* Body ke margins ko 0 karta hai */
}


.register form {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.register label {
    font-weight: bold;
    margin-bottom: 10px;
}

.register input[type="text"],
.register input[type="password"] {
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

.register input[type="submit"] {
    background-color: #4CAF50;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.register input[type="submit"]:hover {
    background-color: #3e8e41;
}

.register a {
    text-decoration: none;
    color: #4CAF50;
}

.register a:hover {
    color: #3e8e41;
}

</style>
<body>
    
<div class="register">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-4 d-none d-lg-block text-center my-auto">
                        <div class="rounded-circle overflow-hidden">
                            <img src="https://img.freepik.com/free-vector/login-concept-illustration_114360-739.jpg" alt="Login Image" class="img-fluid" style="width: 300px; height: 300px; object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <form action="" method="post" class="d-flex flex-column gap-4 p-4 shadow bg-light rounded" style="width: 80%; margin-left: 10%;">
                            <h2 class="text-center mb-4 h-font">Unlock Your Account!!</h2>
                            <div class="form-group">
                                <label for="user_username" class="form-label">Username</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    <input type="text" placeholder="Enter your username" autocomplete="off" required="required" name="user_username" id="user_username" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="user_password" class="form-label">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    <input type="password" placeholder="Enter your password" autocomplete="off" required="required" name="user_password" id="user_password" class="form-control">
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div><a href="user_registration.php" class="text-decoration-underline">Forget your password?</a></div>
                                <div><input type="submit" value="Login" class="btn btn-primary" name="user_login"></div>
                            </div>
                            <p class="text-center mt-4">
                                Don't have an account? <a href="user_registration.php" class="text-primary text-decoration-underline"><strong>Register</strong></a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <script src="./assets//js/bootstrap.bundle.js"></script>
</body>

</html>
<?php
if (isset($_POST['user_login'])) {
    $user_username = $_POST['user_username'];
    $user_password = $_POST['user_password'];
    $select_query = "SELECT * FROM `user_table` WHERE username='$user_username'";
    $select_result = mysqli_query($con, $select_query);
    $row_data = mysqli_fetch_assoc($select_result);
    $row_count = mysqli_num_rows($select_result);
    $user_ip = getIPAddress();
    //check if user have items |! -> redirect to payment | index 
    $select_cart_query = "SELECT * FROM `card_details` WHERE ip_address='$user_ip'";
    $select_cart_result = mysqli_query($con, $select_cart_query);
    $row_cart_count = mysqli_num_rows($select_cart_result);
    //user check about username & pass
    if ($row_count > 0) {
        if (password_verify($user_password, $row_data['user_password'])) {
            // echo "<script>alert('Login Successfully')</script>";
            $_SESSION['username'] = $user_username;
            if ($row_count == 1 && $row_cart_count == 0) {
                $_SESSION['username'] = $user_username;
                echo "<script>alert('Login Successfully');</script>";
                echo "<script>window.open('profile.php','_self');</script>";
            } else if ($row_count == 1 && $row_cart_count > 0) {
                $_SESSION['username'] = $user_username;
                echo "<script>alert('Login Successfully');</script>";
                echo "<script>window.open('payment.php','_self');</script>";
            }
        } else {
            echo "<script>alert('Invalid Credentials')</script>";
        }
    } else {
        echo "<script>alert('Invalid Credentials')</script>";
    }
}
?>