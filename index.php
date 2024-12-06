<?php
include('./includes/connect.php');
include('./functions/common_functions.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Click & Shop</title>
    <link rel="shortcut icon" href="lo.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/css/main.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
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
  background-image: url("https://images.pexels.com/photos/291762/pexels-photo-291762.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2");
  background-size: cover; /* Image ko puri screen par stretch karega */
  background-position: center; /* Image ko center mein rakhega */
  background-repeat: no-repeat; /* Image ko repeat nahi karega */
  background-attachment: fixed; /* Image ko scroll ke saath nahi hoga */
  height: 100vh; /* Body ka height puri screen ka hoga */
  margin: 0; /* Body ke margins ko remove karega */
}
.box:hover{
    border-top-color:#279e8c !important;
    transform:scale(1.03);
    transition: all 0.3s;

}
   .word{
    color:#FFFAF0;
   } 
   .profile-picture {
  position: absolute; /* Image ko absolute position mein rakhein */
  right: 20px; /* Image ko right side mein rakhein */
  top: 60px; /* Image ko nav bar ke niche rakhein */
}

.profile-picture img {
  width: 200px; /* Image ki width ko 50px karkein */
  height: 190px; /* Image ki height ko 50px karkein */
  border-radius: 50%; /* Image ko circle shape mein karkein */
  object-fit: cover; /* Image ko cover karkein */
  border: 2px solid #fff; /* Image ke aaspaas white border */
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Image ke aaspaas shadow */
}
.container-fluid.bg-white.mt-5 {
  background-image: url('https://t4.ftcdn.net/jpg/07/31/57/71/360_F_731577175_4GRtmLdXZBYwOCdx3ptA7pynk5j6Do15.jpg'); /* Background image ka URL */
  background-size: cover; /* Background image ko cover karein */
  background-position: center; /* Background image ko center mein rakhein */
  background-attachment: fixed; /* Background image ko fixed rakhein */
  padding-bottom: 50px; /* Footer ke neeche ki spacing */
}
.navbar-right {
  position: absolute; /* Image ko absolute position mein rakhein */
}
.img-animate {
  position: absolute;
  right: 30px;
  top: 70px;
  width: 100px;
  height: 170px;
  border-radius: 50%; /* Oval shape mein badalne ke liye */
  animation: flip-flop 5s linear infinite;
}

@keyframes flip-flop {
  0% {
    transform: rotateY(0deg);
  }
  50% {
    transform: rotateY(180deg);
  }
  100% {
    transform: rotateY(360deg);
  }
}



</style>
<body>

   
    <!-- upper-nav -->
    <!-- Start NavBar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <div class="container">
            <a class="navbar-brand fw-bold hp-font" href="index.php">Click & Shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active h-font" aria-current="page" href="./index.php">Home</a>
                    </li>
                      <li class="nav-item">
                        <a class="nav-link h-font" href="About.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link h-font" href="./products.php">Products</a>
                    </li>
                    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle h-font" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        More Features
    </a>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="https://www.bankofbaroda.in/personal-banking/digital-products/cards/credit-cards">Apply For Credit Card</a></li>
        <li><a class="dropdown-item" href="https://applyonline.hdfcbank.com/personal-loans.html?utm_source=paid_google&utm_medium=search&utm_campaign=HB_PL_PPC_GGL_SCH_dom_P2_Co_Ex_NTB_Sep_2024&utm_content=HB_PL_PPC_GGL_SCH_dom_P2_Co_Ex_NTB_Sep_2024_Core&utm_term=Personal%20Loan&gclid=Cj0KCQiA6Ou5BhCrARIsAPoTxrDPeVTfcNab85Yg47OIwOwFx0QO6C5mn5-I7bxE8WR_tDqSyVq86FIaAuUsEALw_wcB">Apply For Personal Loan</a></li>
        <li><a class="dropdown-item" href="https://www.hdfcbank.com/personal/borrow/popular-loans/new-car-loan">Apply For Home & Car Loan</a></li>
        <li><a class="dropdown-item" href="https://www.paylaterapp.com/">Apply For Paylater</a></li>
    </ul>
</li>
                    <li class="nav-item">
                        <a class="nav-link h-font" href="Contact.php">Reach Us</a>
                    </li>
                    <?php
                        if(isset($_SESSION['username'])){                            
                            echo "
                            <li class='nav-item'>
                            <a class='nav-link' 'h-font' href='./users_area/profile.php'>My Account</a>
                        </li>";
                        }
                        else{
                            echo "
                            <li class='nav-item'>
                            <a class='nav-link' 'h-font' href='./users_area/user_registration.php'>Quick Order</a>
                        </li>";
                        }
                    ?>
                </ul>
                
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="./cart.php"><svg width="28" height="28" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                        <a class="nav-link" class="d-flex align-items-center gap-1" href="./users_area/user_login.php">
                            <svg width="28" height="28" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M24 27V24.3333C24 22.9188 23.5224 21.5623 22.6722 20.5621C21.8221 19.5619 20.669 19 19.4667 19H11.5333C10.331 19 9.17795 19.5619 8.32778 20.5621C7.47762 21.5623 7 22.9188 7 24.3333V27" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M16.5 14C18.9853 14 21 11.9853 21 9.5C21 7.01472 18.9853 5 16.5 5C14.0147 5 12 7.01472 12 9.5C12 11.9853 14.0147 14 16.5 14Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <?php
                                if(!isset($_SESSION['username'])){
                                    echo "<span>
                                   
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
                        <a class='nav-link'' h-font' href='./users_area/user_login.php'>
                            Login
                        </a>
                    </li>";
                }else{
                        echo "<li class='nav-item'>
                        <a class='nav-link'  'h-font' href='./users_area/logout.php'>
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
<!--    
    <div class="profile-picture">
 <img src="https://wallpapers.com/images/featured/sales-background-o5k16cgu6jgmvaam.jpg" alt="Image"></a>
</div> -->

<div class="img-animate">
<a href="products.php"><img src="https://wallpapers.com/images/featured/sales-background-o5k16cgu6jgmvaam.jpg" class="img-animate" alt="Animated Image"></a>
</div>
    <!-- Start Landing Section -->
    <div class="landing">
        <div class="container">
            <div class="row m-0">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 p-md-0 tabs-categ">
                    <ul class="p-md-0 d-flex flex-column gap-3 pt-md-3">
                      <strong>  <li> Get Ready to Save Big! Explore Our Latest Features and Catch the Hottest Deals &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;> </strong>
                        </li>
                    </ul>
                </div>
                
            </div>
        </div>
    </div>
    <!-- End Landing Section -->
    <!-- Start Category  -->
    <div class="category">
        <div class="container">
            <div class="categ-header">
                <div class="sub-title">
                    <span class="shape"></span>
                    <span class="title">Fresh Features!
                 
                    
                    </span>
                   
                </div>
         
                </div>
                
    </div>
    <marquee class="word" behavior="scroll" direction="left" style="background-color: transparent; padding: 10px; border-radius: 10px; margin-bottom: 0;">
        <h3>
            <strong>Experience the Best! Dive into Our Newest Features and Snag Unbeatable Deals!!</strong>
        </h3>
    </marquee>

    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-3 col-md-6 md-4 px-4">
                <div class="bg-white shadow rounded p-4 border-top border-4 text-center box">
                    <a href="http://localhost/Hotel-Booking/hotel.php"> 
                        <img src="https://cdn.vectorstock.com/i/1000v/93/55/house-building-logo-design-vector-27369355.jpg" width="100px">
                    </a>
                    <h4 class="mt-3 h-font">Hotel-Booking </h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 md-4 px-4">
                <div class="bg-white shadow rounded p-4 border-top border-4 text-center box">
                    <a href="http://localhost/Vaccation/home.php"> 
                        <img src="https://as2.ftcdn.net/v2/jpg/04/30/78/05/1000_F_430780503_EY4RYOZBWHv1f4FvnGIrsmVp9eEMKWbO.jpg" width="80px">
                    </a>
                    <h4 class="mt-3  h-font">Bus & Train-Tickets</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 md-4 px-4">
                <div class="bg-white shadow rounded p-4 border-top border-4 text-center box">
                    <a href="https://enchanting-naiad-d685e5.netlify.app"> 
                        <img src="https://img.freepik.com/premium-vector/beautiful-unique-food-restaurant-company-logo-design_981150-2156.jpg" width="110px">
                    </a>
                    <h4 class="mt-3 h-font">Food order</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 md-4 px-4">
                <div class="bg-white shadow rounded p-4 border-top border-4 text-center box">
                    <a href="http://localhost/Vaccation/home.php"> 
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJrmxn5qKJjA3AqpQ-r3LUj_xoMT7YtHnqWQ&s" width="130px">
                    </a>
                    <h4 class="mt-3 h-font">Flights & Ships-Tickets</h4>
                </div>
            </div>
        </div>
                </div>
<br>

<marquee behavior="scroll" direction="left">
 <a href="https://www.bankofbaroda.in/personal-banking/digital-products/cards/credit-cards"><img src="https://69ba5cba.rocketcdn.me/wp-content/uploads/2024/03/Bank-of-Baroda-Lifetime-Free-Credit-Cards-Limited-Time-Offer-Post.png" alt="Image 1" width="600" height="150"></a> 
  
                </marquee>


    <!-- End Category  -->
    <!-- Start Advertise  -->
    <div class="adver">
        <div class="container">
            <div class="cover">
                <span class="title">JBL-Music</span>
                <span class="desc">Enhance Your<br />Music Experience</span>

                <button onclick="location.href='products.php'">
                    Buy Now!
                </button>
            </div>
        </div>
    </div>
    <!-- End Advertise  -->
<br>
    <marquee behavior="scroll" direction="right">
 <a href="https://www.medplusmart.com/"><img src="https://i.ytimg.com/vi/TeVSQTWKUeA/maxresdefault.jpg" alt="Image 1" width="500" height="200"></a> 
  
                </marquee>

  
    <!-- Start Products  -->
    <div class="products">
        <div class="container">
            <div class="categ-header">
                <div class="sub-title">
                    <span class="shape"></span>
                    <span class="title">Our Products</span>
                </div>
                <h2>Explore Our Latest Products</h2>
            </div>
            <div class="row mb-3">
                <?php
                getProduct(3);
                getIPAddress();
                ?>
            </div>
            <div class="view d-flex justify-content-center align-items-center">
                <button onclick="location.href='./products.php'">View All Products</button>
            </div>
        </div>
    </div>
    <!-- End Products  -->
 <!-- Footer Section -->
<div class="container-fluid bg-white mt-5" style="padding-bottom: 20px;"> 
  <div class="row">
    <div class="col-lg-4 p-3"> 
      <h3 class="h-font fw-bold fs-3 mb-2">Click & Shop</h3>
      <p>Click & Shop Private Limited is an Indian e-commerce company, headquartered in Bangalore, 
        and incorporated in Singapore as a private limited company.
         The company initially focused on online book sales before expanding into other product
          categories such as consumer electronics, fashion, home essentials, groceries, and lifestyle products.
        
            </p>
    </div>
    <div class="col-lg-4 p-3">
      <h5 class="mb-3 h-font">Quick Links</h5>
      <a href="index.php" class="d-inline-block mb-2 text-dark text-decoration-none"><i class="bi bi-house-door me-1"></i>&nbsp;Home</a><br>
      <a href="About.php" class="d-inline-block mb-2 text-dark text-decoration-none"><i class="bi bi-file-person-fill me-1"></i>&nbsp;About</a><br>
      <a href="product.php" class="d-inline-block mb-2 text-dark text-decoration-none"><i class="bi bi-projector-fill me-1"></i>&nbsp;Products</a><br>
      <a href="Contact.php" class="d-inline-block mb-2 text-dark text-decoration-none"><i class="bi bi-person-rolodex me-1"></i>&nbsp;Reach Us</a><br>
    </div>
    <div class="col-lg-4 p-3">
  <h5 class="mb-3 h-font">Our Global Partners</h5>
  <div class="d-flex align-items-center">
    <div>
      <a href="http://localhost/Hotel-Booking/hotel.php" class="d-inline-block mb-2 text-dark text-decoration-none"><i class="bi bi-building me-1"></i>&nbsp;The RJ Hotel</a><br>
      <a href="https://deeksha0529.github.io/FoodieHub/" class="d-inline-block mb-2 text-dark text-decoration-none"><i class="bi bi-egg me-1"></i>&nbsp;FoodieHub</a><br>
      <a href="http://localhost/Vaccation/home.php" class="d-inline-block mb-2 text-dark text-decoration-none"><i class="bi bi-airplane me-1"></i>&nbsp;Vacation-Tour & Holidays</a><br>
      <a href="https://www.cardekho.com/" class="d-inline-block mb-2 text-dark text-decoration-none"><i class="bi bi-truck me-1"></i>&nbsp;Car Dekho</a><br>
      <a href="https://www.medplusmart.com/?srsltid=AfmBOoqTN_LNtiPB5uj_5Sn05ojk_WZRQWrRiKRvrgfv8HyjuQ0tug1Z" class="d-inline-block mb-2 text-dark text-decoration-none"><i class="bi bi-plus-square me-1"></i>&nbsp;MediPlus</a><br>
    </div>
    <div class="ms-3">
      <img src="pointiong.png" alt="Partner Logo" class="rounded-circle" width="240"height="180">
    </div>
  </div>
</div>
  </div>
  <div class="row" style="margin-top: -20px;"> 
    <div class="col-lg-12 p-2 text-center"> 
      <h5 class="mb-2">Follow us</h5> 
      <a href="https://x.com/hotel_rj48282?t=D0ZxhIZAYpL1Icb1EAs75A&s=08" class="d-inline-block text-dark text-decoration-none mb-1">
        <i class="bi bi-twitter me-1"></i>
        Twitter
      </a>
      <a href="https://www.instagram.com/sg262022/profilecard/?igsh=YXI4ZzRkeHlreHI1" class="d-inline-block text-dark text-decoration-none mb-1 mx-1">
        <i class="bi bi-instagram me-1"></i>
        Instagram
      </a>
      <a href="https://www.facebook.com/share/Lr74aJiumhDoYd4P/" class="text-dark text-decoration-none mb-1">
        <i class="bi bi-facebook me-1"></i>
        Facebook
      </a>
    </div>
  </div>
</div>
                </div>
                </div>
                </div>
                </div>
<!-- Start Footer -->
<h6 class="text-center bg-dark text-white py-1" style="margin-top: -50px;">2024 Click & Shop. All Rights Reserved. <br>Powered by Raj Srivastava</h6>
<!-- End Footer -->
    <script src="./assets/js/bootstrap.bundle.js"></script>
</body>

</html>