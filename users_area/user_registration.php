<?php
include('../includes/connect.php');
include('../functions/common_functions.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registeration Page</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css" />
    <link rel="stylesheet" href="../assets/css/main.css" />
  
</head>
<style>
    @import url('https://fonts.googleapis.com/icon?family=Material+Icons');
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
    background-image: url("https://static.vecteezy.com/system/resources/thumbnails/001/849/553/small_2x/modern-gold-background-free-vector.jpg");
    background-size: cover; /* Image ko puri screen par stretch karta hai */
    background-position: center; /* Image ko center mein set karta hai */
    background-repeat: no-repeat; /* Image ko repeat nahi hone deta */
    background-attachment: fixed; /* Image ko fixed karta hai, jab scroll karte hain toh image nahi hilta */
    height: 100vh; /* Body ka height 100% screen ka hota hai */
    margin: 0; /* Body ke margins ko 0 karta hai */
}
.profile-picture {
  position: absolute;
  top: 10px;
  left: 10px;
}

.profile-picture img {
  width: 300px;
  height: 150px;

  padding: 2px;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}
</style>
<body>
<div class="register">
    <div class="container py-5">
        <div class="row justify-content-center">
        <div class="profile-picture">
 <a href="https://www.cardekho.com/"> <img src="https://etimg.etb2bimg.com/thumb/msid-90419897,width-1200,height-900,resizemode-4/.jpg" alt="Image"></a>
</div>
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-4 d-none d-lg-block text-center my-auto">
                        <div class="rounded-circle overflow-hidden mx-auto" style="width: 300px; height: 300px;">
                            <img src="https://png.pngtree.com/png-vector/20210921/ourlarge/pngtree-register-now-sign-banner-png-image_3948762.png" alt="Registration Image" class="img-fluid" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-8  rounded shadow">
                        <div class="my-auto">
                           
                            <form action="" method="post" enctype="multipart/form-data" class="d-flex flex-column gap-4 p-4 shadow bg-light rounded">
                            <h2 class="text-center mb-4 h-font">Start Your Journey With Us!!</h2>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-outline">
                                            <label for="user_username" class="form-label"> Username</label>
                                            <input type="text" placeholder="Enter your username" autocomplete="off" required="required" name="user_username" id="user_username" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-outline">
                                            <label for="user_email" class="form-label"> Email</label>
                                            <input type="email" placeholder="Enter your email" autocomplete="off" required="required" name="user_email" id="user_email" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-outline">
                                            <label for="user_password" class="form-label">Password</label>
                                            <input type="password" placeholder="Enter your password" autocomplete="off" required="required" name="user_password" id="user_password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-outline">
                                            <label for="conf_user_password" class="form-label">Confirm Password</label>
                                            <input type="password" placeholder="Confirm your password" autocomplete="off" required="required" name="conf_user_password" id="conf_user_password" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-outline">
                                    <label for="user_address" class="form-label">Address</label>
                                    <textarea rows="3" cols="30" placeholder="Enter your address" autocomplete="off" required="required" name="user_address" id="user_address" class="form-control"></textarea>
                                </div>
                                <div class="form-outline">
                                    <label for="user_mobile" class="form-label">Mobile</label>
                                    <input type="text" placeholder="Enter your mobile" autocomplete="off" required="required" name="user_mobile" id="user_mobile" class="form-control">
                                </div>
                                <div class="form-outline">
                                    <label for="user_image" class="form-label"> User Image</label>
                                    <input type="file" required="required" name="user_image" id="user_image" class="form-control">
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p>
                                            Already have an account? <a href="user_login.php" class="text-primary text-decoration-underline"><strong>Login</strong></a>
                                        </p>
                                    </div>
                                    <div>
                                        <input type="submit" value="Register" class="btn btn-primary mb-2" name="user_register">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    <script src="./assets//js/bootstrap.bundle.js"></script>
</body>

</html>
<!-- php code  -->
<?php
if (isset($_POST['user_register'])) {
    $user_username = $_POST['user_username'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $hash_password = password_hash($user_password,PASSWORD_DEFAULT);
    $conf_user_password = $_POST['conf_user_password'];
    $user_address = $_POST['user_address'];
    $user_mobile = $_POST['user_mobile'];
    $user_image = $_FILES['user_image']['name'];
    $user_image_tmp = $_FILES['user_image']['tmp_name'];
    $user_ip = getIPAddress();
    // check if user exist or not
    $select_query = "SELECT * FROM `user_table` WHERE username='$user_username' OR user_email='$user_email'";
    $select_result = mysqli_query($con, $select_query);
    $rows_count = mysqli_num_rows($select_result);
    if ($rows_count > 0) {
        echo "<script>window.alert('Username | Email already exist');</script>";
    } else if ($user_password != $conf_user_password) {
        echo "<script>window.alert('Passwords are not match');</script>";
    } else {
        // insert query
        move_uploaded_file($user_image_tmp, "./user_images/$user_image");
        $insert_query = "INSERT INTO `user_table` (username,user_email,user_password,user_image,user_ip,user_address,user_mobile) VALUES ('$user_username','$user_email','$hash_password','$user_image','$user_ip','$user_address','$user_mobile')";
        $insert_result = mysqli_query($con, $insert_query);
        if ($insert_result) {
            echo "<script>window.alert('User added successfully');</script>";
        } else {
            die(mysqli_error($con));
        }
    }
    // //select cart items check if items in cart go to checkout !| go to index.php
    // $select_cart_items = "SELECT * FROM `card_details` WHERE ip_address='$user_ip'";
    // $select_cart_items_result = mysqli_query($con,$select_cart_items);
    // $rows_count_cart_items = mysqli_num_rows($select_cart_items_result);
    // if($rows_count_cart_items > 0 ){
    //     $_SESSION['username'] = $user_username;
    //     echo "<script>window.alert('You have items in your cart');</script>";
    //     echo "<script>window.open('checkout.php','_self');</script>";
    // }else{
    //     echo "<script>window.open('../index.php','_self');</script>";
    // }
}
?>