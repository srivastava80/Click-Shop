<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shipping/Billing Address</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=call">
    <style>
      body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-image: url("https://png.pngtree.com/thumb_back/fh260/background/20190221/ourmid/pngtree-delivery-banner-poster-background-image_12237.jpg");
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
}

        .container {
            max-width: 1000px;
            margin: 50px auto;
            padding: 20px;
            display: flex;
            justify-content: space-between;
        }
        .container {
    max-width: 1200px;
    margin: 50px auto;
    padding: 20px;
    text-align: center;
}

.checkout-form {
    background-color: transparent;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 80%;
    margin: 0 auto;
}

.form-group {
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
input[type="email"] {
    width: 100%;
    padding: 10px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.form-group i {
    margin-right: 10px;
}

button {
    width: 100%;
    padding: 15px;
    background-color: #28a745;
    border: none;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    border-radius: 4px;
}

button:hover {
    background-color: #218838;
}

.row {
    display: flex;
    justify-content: space-between;
    margin-bottom: 15px;
}

.col-md-6 {
    width: 48%;
}

@media (max-width: 768px) {
    .col-md-6 {
        width: 100%;
    }
    .row {
        flex-direction: column;
    }
}
.alert-box {
    position: fixed;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    background-color: #ff9800;
    color: #fff;
    padding: 10px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    animation: moveTop 5s infinite;
}

@keyframes moveTop {
    0% {
        top: 0;
    }
    50% {
        top: 50px;
    }
    100% {
        top: 0;
    }
}
    </style>
    
</head>

<body>
<div class="alert-box">
Important!! Address Finality!!
Please ensure accuracy when filling in your billing and shipping addresses, as they will be considered final and cannot be modified later.
</div>
    <div class="container">
        <div class="checkout-form">
            <h3>Shipping/Billing Address</h3>
            <form action="payment.php" method="post">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name">
                            <i class="fas fa-user"></i>
                            Full Name
                        </label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">
                            <i class="fas fa-envelope"></i>
                            Email
                        </label>
                        <input type="email" id="email" name="email" required>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="phone">
                            <span class="material-symbols-outlined">
                                call
                            </span>
                            Phone Number
                        </label>
                        <input type="text" id="phone" name="phone" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="alternate_phone">
                            <span class="material-symbols-outlined">
                                call
                            </span>
                            Alternate Phone Number
                        </label>
                        <input type="text" id="alternate_phone" name="alternate_phone" required>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="address">
                            <i class="fas fa-address-card"></i>
                            Full Address
                        </label>
                        <input type="text" id="address" name="address" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="city">
                            <i class="fas fa-city"></i>
                            City
                        </label>
                        <input type="text" id="city" name="city" required>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="state">
                            <i class="fas fa-map-marker-alt"></i>
                            State
                        </label>
                        <input type="text" id="state" name="state" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="zip">
                            <i class="fas fa-map-pin"></i>
                            Zip Code
                        </label>
                        <input type="text" id="zip" name="zip" required>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="delivery_days">
                            <i class="fas fa-clipboard-list" aria-placeholder="Minimum 1 day"></i>
                            Delivery Days
                        </label>
                        <select id="delivery_days" name="delivery_days" required>
                            <option value="">Select Delivery Days</option>
                            <?php
                            for ($i = 3; $i <= 10; $i++) {
                                echo "<option value='$i'>$i Days</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="delivery_time">
                            <i class="fas fa-shipping-fast"></i>
                            Delivery Time 
                        </label>
                        <select id="delivery_time" name="delivery_time" required>
                            <option value="">Select Delivery Time</option>
                            <option value="8am-12pm">8:00 AM - 12:00 PM</option>
                            <option value="12pm-5pm">12:00 PM - 5:00 PM</option>
                            <option value="5pm-11pm">5:00 PM - 11:00 PM</option>
                        </select>
                    </div>
                </div>

              
    <!-- Form fields here -->
    <button class="clkbtn" type="submit">Pay Now</button>

            </form>
        </div>
    </div>
</body>
</body>

</html>