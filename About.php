<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> About CLick & Shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

  </head>



<style>
    @import url('https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    
@import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Gowun+Batang:wght@400;700&display=swap');

    *{
      font-family: "Poppins", sans-serif;
    }
    .h-font{
      font-family: "Merienda", cursive;
    }
    .hp-font{
      font-family: "Pacifico", cursive;
    }
    .k{
        font-family: "Gowun Batang", serif;
    }
    .video{
  width: 100%;
  height: 100%;
  position: absolute;
  bottom: 0;
  z-index: -100;
  right: 0;
  filter: blur(0.2px);
  /* -webkit-filter: blur(8px); */

}
@media (min-aspect-ratio:16/9){
  .video{
    width:100%;
    height:auto;
  }
}
@media (max-aspect-ratio:16/9){
  .video{
    width:auto;
    height:100%;
  }
}
.custom-bg{
  background-color:#23eclac;
}
.custom-bg:hover{
  background-color:#279e8c;
}
.h-line{
    width: 150px;
    margin:0 auto;
    height:1.7px;
}
.box:hover{
    border-top-color:#279e8c !important;
    transform:scale(1.03);
    transition: all 0.3s;

}
.container-fluid.bg-white.mt-5 {
  background-image: url('https://t4.ftcdn.net/jpg/07/31/57/71/360_F_731577175_4GRtmLdXZBYwOCdx3ptA7pynk5j6Do15.jpg'); /* Background image ka URL */
  background-size: cover; /* Background image ko cover karein */
  background-position: center; /* Background image ko center mein rakhein */
  background-attachment: fixed; /* Background image ko fixed rakhein */
  padding-bottom: 50px; /* Footer ke neeche ki spacing */
}

    </style>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand fw-bold h-font" href="index.php">Click & Shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active  h-font" aria-current="page" href="./index.php">Home</a>
                    </li>
                      <li class="nav-item">
                        <a class="nav-link  h-font" href="About.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  h-font" href="./products.php">Products</a>
                    </li>
                  
                    <li class="nav-item">
                        <a class="nav-link  h-font" href="Contact.php">Reach Us</a>
                    </li>
                    <?php
                        if(isset($_SESSION['username'])){                            
                            echo "
                            <li class='nav-item'>
                            <a class='nav-link' href='./users_area/profile.php'>My Account</a>
                        </li>";
                        }
                        else{
                            echo "
                            <li class='nav-item'>
                            <a class='nav-link' href='./users_area/user_registration.php'>Quick Order</a>
                        </li>";
                        }
                    ?>
                    
                </ul>
         
            </div>
        </div>
    </nav>
<div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">About Us</h2>
    <div class="h-line bg-dark">
    </div>
<!-- <p class="text-center mt-3">The RJ HOTEL is a heritage, seven-star, luxury hotel in Greater Noida, Uttar Pradesh, India.<br> Part of the RJ HOTEL, the hotel has 560 or 600 rooms and 44 suites and is considered the <br>flagship property of the group; it employs 1,600 staff.</p> -->
</div>

<div class="container">
    <div class="row justify-content-between align-items-center">
        <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
<h3 class="mb-3 h-font"> Click & Shop</h3>
<p>Click & Shop Private Limited is an Indian e-commerce company, headquartered in Bangalore, 
    and incorporated in Singapore as a private limited company.
     The company initially focused on online book sales before expanding into other product
      categories such as consumer electronics, fashion, home essentials, groceries, and lifestyle products.</p>

        </div>
        <div class="col-lg-5 col-md-5 mb-4  order-lg-2 order-md-2 order-1">
            <img src="lo.png" class="w-100">

        </div>
    </div>

    </div>
    <div class="container mt-5">
<div class="row">
    <div class="col-lg-3 col-md-6 md-4 px-4">
        <div class="bg-white shadow rounded p-4 border-top border-4 text-center box">
            <img src="https://cdn.vectorstock.com/i/1000v/93/55/house-building-logo-design-vector-27369355.jpg" width="80px">
            <h4 class="mt-3">100+Offices</h4>
</div>
    </div>
    <div class="col-lg-3 col-md-6 md-4 px-4">
        <div class="bg-white shadow rounded p-4 border-top border-4 text-center box">
            <img src="https://static.vecteezy.com/system/resources/thumbnails/014/856/628/small/customer-experience-icon-client-satisfaction-symbol-customer-relationship-management-concept-for-graphic-design-logo-website-social-media-mobile-app-ui-illustration-vector.jpg" width="50px">
            <h4 class="mt-3">10 Lac+Happy Customers</h4>
</div>
    </div>
    <div class="col-lg-3 col-md-6 md-4 px-4">
        <div class="bg-white shadow rounded p-4 border-top border-4 text-center box">
            <img src="https://static.vecteezy.com/system/resources/previews/004/235/343/non_2x/five-star-top-review-logo-modern-chat-icon-talk-quotes-in-trendy-linear-line-style-dark-background-free-vector.jpg" width="50px">
            <h4 class="mt-3">8 Lac+Reviews</h4>
</div>
    </div>
    <div class="col-lg-3 col-md-6 md-4 px-4">
        <div class="bg-white shadow rounded p-4 border-top border-4 text-center box">
            <img src="https://thumbs.dreamstime.com/b/people-vector-icon-group-symbol-illustration-businessman-logo-multiple-users-silhouette-153483996.jpg" width="50px">
            <h4 class="mt-3">80000+Staffs</h4>
</div>
    </div>
   
</div>
    </div>
    
</div>

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

<h6 class="text-center bg-dark text-white py-1" style="margin-top: -20px;">2024 Click & Shop. All Rights Reserved </h6>
  <!-- <h6 class="text-center bg-dark text-white p-2 m-1 my-2">Designed & Developed By Raj Srivastava</h6> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>