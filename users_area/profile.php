<?php
include("../includes/connect.php");
include("../functions/common_functions.php");
session_start();
if(!isset($_SESSION['username'])){
    header('location:user_login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION['username'];?> Profile</title>
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
   
</style>
<body>
   
    <!-- upper-nav -->
    <!-- Start NavBar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <div class="container">
            <a class="navbar-brand fw-bold h-font" href="http://localhost/E-Commerce-1-Website-PHP-MYSQL-main/E-Commerce-1-Website-PHP-MYSQL-main/index.php">Click & Shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active h-font" aria-current="page" href="http://localhost/E-Commerce-1-Website-PHP-MYSQL-main/E-Commerce-1-Website-PHP-MYSQL-main/index.php">Home</a>
                    </li>
                      <li class="nav-item">
                        <a class="nav-link h-font" href="http://localhost/E-Commerce-1-Website-PHP-MYSQL-main/E-Commerce-1-Website-PHP-MYSQL-main/About.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link h-font" href="http://localhost/E-Commerce-1-Website-PHP-MYSQL-main/E-Commerce-1-Website-PHP-MYSQL-main/products.php">Products</a>
                    </li>
                  
                    <li class="nav-item">
                        <a class="nav-link h-font" href="http://localhost/E-Commerce-1-Website-PHP-MYSQL-main/E-Commerce-1-Website-PHP-MYSQL-main/Contact.php">Reach Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active h-font"  aria-current="page" href="profile.php">My Account</a>
                    </li>
                </ul>
               
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="../cart.php"><svg width="28" height="28" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11 27C11.5523 27 12 26.5523 12 26C12 25.4477 11.5523 25 11 25C10.4477 25 10 25.4477 10 26C10 26.5523 10.4477 27 11 27Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M25 27C25.5523 27 26 26.5523 26 26C26 25.4477 25.5523 25 25 25C24.4477 25 24 25.4477 24 26C24 26.5523 24.4477 27 25 27Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M3 5H7L10 22H26" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M10 16.6667H25.59C25.7056 16.6667 25.8177 16.6267 25.9072 16.5535C25.9966 16.4802 26.0579 16.3782 26.0806 16.2648L27.8806 7.26479C27.8951 7.19222 27.8934 7.11733 27.8755 7.04552C27.8575 6.97371 27.8239 6.90678 27.7769 6.84956C27.73 6.79234 27.6709 6.74625 27.604 6.71462C27.5371 6.68299 27.464 6.66661 27.39 6.66666H8" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <sup>
                                <?php
                                cart_item();
                                ?>
                            </sup>
                            <span class="d-none">
                                Total Price is: 
                                <?php
                                total_cart_price();
                                ?>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" class="d-flex align-items-center gap-1" href="login.php">
                            <svg width="28" height="28" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M24 27V24.3333C24 22.9188 23.5224 21.5623 22.6722 20.5621C21.8221 19.5619 20.669 19 19.4667 19H11.5333C10.331 19 9.17795 19.5619 8.32778 20.5621C7.47762 21.5623 7 22.9188 7 24.3333V27" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M16.5 14C18.9853 14 21 11.9853 21 9.5C21 7.01472 18.9853 5 16.5 5C14.0147 5 12 7.01472 12 9.5C12 11.9853 14.0147 14 16.5 14Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <?php
                                if(!isset($_SESSION['username'])){
                                    echo "<span>
                                    Welcome guest
                                </span>";
                            }else{
                                    echo "<span>
                                    Welcome ".$_SESSION['username']. "</span>";
                                }
                                ?>
                        </a>
                    </li>
                    <?php
                    if(!isset($_SESSION['username'])){
                        echo "<li class='nav-item'>
                        <a class='nav-link' href='./users_area/user_login.php'>
                            Login
                        </a>
                    </li>";
                }else{
                        echo "<li class='nav-item'>
                        <a class='nav-link' href='./logout.php'>
                            Logout
                        </a>
                    </li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End NavBar -->


    <!-- Start All Prodcuts  -->
    <div class="all-prod">
        <div class="container">
            <div class="sub-container pt-4 pb-4">
                <div class="categ-header">
                    <div class="sub-title">
                        <span class="shape"></span>
                        <span class="title h3 text-dark">Profile</span>
                    </div>
                    <!-- <h2>Browse By Category & Brand</h2> -->
                </div>
                <div class="row mx-0">
                    <div class="col-md-2 side-nav p-0">
                        <!-- side nav  -->
                        <!-- Profile Tabs -->
                        <ul class="navbar-nav me-auto navbar-profile">
                            <?php
                                $username = $_SESSION['username'];
                                $select_user_img = "SELECT * FROM `user_table` WHERE username='$username'";
                                $select_user_img_result = mysqli_query($con,$select_user_img);
                                $row_user_img = mysqli_fetch_array($select_user_img_result);
                                $userImg = $row_user_img['user_image'];
                                echo "                            <li class='nav-item d-flex align-items-center gap-2'>
                                <img src='./user_images/$userImg' alt='$username photo' class='img-profile img-thumbnail'/>
                            </li>";
                            ?>
                           
                            <li class="table-group-divider"></li>
                            <li class="nav-item d-flex align-items-center gap-2">
                                <a href="profile.php?edit_account" class="nav-link fw-bold">
                                    <h6>Edit Account</h6>
                                </a>
                            </li>
                           
                            </li>
                            <li class="table-group-divider"></li>
                            <li class="nav-item d-flex align-items-center gap-2">
                                <a href="profile.php?delete_account" class="nav-link fw-bold">
                                    <h6>Delete Account</h6>
                                </a>
                            </li>
                            <li class="table-group-divider"></li>
                            <li class="nav-item d-flex align-items-center gap-2">
                                <a href="./logout.php" class="nav-link fw-bold">
                                    <h6>Logout</h6>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-10">
                        <!-- Main View  -->
                        <div class="row">
                            <?php
                                get_user_order_details();
                                if(isset($_GET['edit_account'])){
                                    include('./edit_account.php');
                                }
                                if(isset($_GET['my_orders'])){
                                    include('./user_orders.php');
                                }
                                if(isset($_GET['delete_account'])){
                                    include('./delete_account.php');
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Prodcuts  -->



    <script src="../assets/js/bootstrap.bundle.js"></script>
</body>

</html>