<?php
// Database configuration
$hname = 'localhost';
$port = 3306;
$uname = 'root';
$pass = ''; 
$db = 'the_rj_hotel';

// Create database connection
$con = new mysqli($hname, $uname, $pass, $db, $port);
if ($con->connect_error) {
    throw new Exception("Connection failed: " . $con->connect_error);
}

// Function to filter user input
function filteration($data) {
    foreach ($data as $key => $value) {
        $data[$key] = trim($value);
        $data[$key] = strip_tags($data[$key]);
        $data[$key] = htmlspecialchars($data[$key], ENT_QUOTES, 'UTF-8');
    }
    return $data;
}

// Define insert function
function insert($query, $values, $types) {
    global $con;
    $stmt = $con->prepare($query);
    $stmt->bind_param($types, ...$values);
    $result = $stmt->execute();
    $stmt->close();
    return $result;
}

if (isset($_POST['send'])) {
    $frm_data = filteration($_POST);
    $q = "INSERT INTO `user_queries` (`name`, `email`, `subject`, `messages`) VALUES (?, ?, ?, ?)";
    $values = [$frm_data['name'], $frm_data['email'], $frm_data['subject'], $frm_data['messages']];
    $res = insert($q, $values, 'ssss');

    if ($res) {
        echo '<script>alert("success", "Mail sent!");</script>';
    } else {
        echo '<script>alert("Failed", "Try again later!");</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reach Us</title>
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
    <h2 class="fw-bold h-font text-center">Contact Us</h2>
    <div class="h-line bg-dark">
    </div>
<br><br>
    <div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6 mb-5 px-4">
<div class="bg-white rounded shadow p-4 ">
<!-- <iframe class="w-100 rounded mb-4"  height="320" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224407.57787454358!2d77.35083169700312!3d28.49856174748772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cea64b8f89aef%3A0xec0ccabb5317962e!2sGreater%20Noida%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1726499403351!5m2!1sen!2sin"  loading="lazy" ></iframe> -->
    <iframe class="w-100 rounded mb-4"  height="320" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d497698.7766046534!2d77.30054935241097!3d12.954458692775514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1670c9b44e6d%3A0xf8dfc3e8517e4fe0!2sBengaluru%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1731835756428!5m2!1sen!2sin" loading="lazy" ></iframe>
    <h5>Address</h5>
<a href="https://maps.app.goo.gl/pKpvm4K9pNBfSGbR9" target="_blank" class="text-decoration-none d-inline-block text-dark mb-2"><i class="bi bi-geo-alt"></i>
Embassy Tech Village Rd, Devarabisanahalli, Bellandur,<br>
Bengaluru, Karnataka 560103.
</a>
<h5 class="mt-3">Call us</h5>
        <a href="tel: +918076175174" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>+918076175174</a>
        <br>
        <a href="tel: +916394517557" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>+916394517557</a>
       
        <h5 class="mt-3">Follow us</h5>
        <a href="https://x.com/hotel_rj48282?t=D0ZxhIZAYpL1Icb1EAs75A&s=08" class="d-inline-block mb-3  text-dark fs-5 me-2">
        <i class="bi bi-twitter me-1"></i></a>
        
  

    <a href="https://www.instagram.com/sg262022/profilecard/?igsh=YXI4ZzRkeHlreHI1" class="d-inline-block mb-3  text-dark fs-5 me-2">
<i class="bi bi-instagram me-1"></i>
      
</a>

<a href="https://www.facebook.com/share/Lr74aJiumhDoYd4P/" class="d-inline-block mb-3 text-dark fs-5 me-2">
<i class="bi bi-facebook me-1" ></i>

</a>
<h5 class="mt-2">E-mail</h5>
        <a href="mailto: srivastavaraj9718@gmail.com" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-envelope-at-fill"></i>srivastavaraj9718@gmail.com</a>
<h5 class="mt-3">Chat with us</h5>
        <a href="https://wa.me/qr/CINHJQEISJV2K1" class="d-inline-block mb-2">
        <span class="badge rounded-pill bg-light text-dark text-dark fs-6 p-2"><i class="bi bi-whatsapp me-1"></i>
Whatsapp
</span>
    </a>

</div>
        <div>
</div>
        </div>
        <div class="col-lg-6 col-md-6 mb-5 px-4">
<div class="bg-white rounded shadow p-4 ">
    <form method="post">
<h5 class="text-align-center">Send Message</h5>
   <div id="emailHelp" class="form-text">We'll never share your details with anyone else.</div>
<div class="mt-3">
            <label for="exampleInputEmail1" class="form-label">Full Name</label>
            <input name="name" required  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
         
          </div>
          <div class="mt-3">
            <label for="exampleInputEmail1" class="form-label">E-mail</label>
            <input  name="email" required type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
         
          </div>
          <div class="mt-3">
            <label for="exampleInputEmail1" class="form-label">Subject</label>
            <input  name="subject" required type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
         
          </div>
         
          <div class="mt-3">
            <label for="exampleInputEmail1" class="form-label">Message</label>
            <textarea  name="messages" required class="form-control shadow-none" rows="5" style="resize:none"></textarea>
         
          </div>
          <div class="mt-3">
<button type="submit" name="send"  class="btn btn-success custom-bg">Send</button>
</div>

</form>
   
<div>
</div>

</div>

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
  
<h6 class="text-center bg-dark text-white ">2024 Click & Shop. All Rights Reserved <br>  Developed & Manage By Raj Srivastava</h6>
 
<!-- <h6 class="text-center bg-dark text-white p-2 m-1 my-2">Designed & Developed By Raj Srivastava</h6> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>
</html>