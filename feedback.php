<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" 
          content="width=device-width,initial-scale=1.0">
    <title>FeedBack Form</title>
    <link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="index.css">
    <style>
        /*style.css */
@import url(
'https://fonts.googleapis.com/css2?family=Poppins&display=swap');
body {
    margin: 0;
    display: flex;
    align-items: center;
    justify-content: space-around;
    flex-direction: column;
    height: 100vh;
    background-image: url("https://img.freepik.com/premium-vector/quote-frame-blank-template-speech-box-banner-concept-website-vector-illustration_96930-1400.jpg?semt=ais_hybrid");
    background-size: cover; /* Image ko cover karne ke liye */
    background-position: center; /* Image ko center mein rakhne ke liye */
    background-repeat: no-repeat; /* Image ko repeat hone se rokne ke liye */
    font-family: 'Poppins', sans-serif;
}
.textup {
    text-align: center;
    color: rgb(11, 118, 11);
    font-weight: 700;
}

i {
    margin-right: 3px;
}

.form-box {
    position: absolute;
    right: 10%;
    top: 50%;
    transform: translateY(-50%);
    background-color: #fff;
    box-shadow: 0 0 10px rgba(36, 67, 40, 0.8);
    padding: 15px;
    border-radius: 8px;
    width: 600px; /* Form ki width badhai */
}
form {
    max-width: 400px;
    margin: 0 auto;
}

.radio-group {
    display: flex;
    margin-bottom: 16px;
}

input[type="radio"] {
    margin-right: 8px;
}

label {
    display: block;
    margin-bottom: 8px;
    font-size: 17px;
    color: green;
    font-weight: 600;
}

input,
textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 12px;
    box-sizing: border-box;
    border-radius: 10px;

}

button {
    background-color: #368b44;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 25px;
    cursor: pointer;
    width: 100%;
    font-size: 15px;
    transition: .2s linear;
}

button:hover {
    background-color: #0a6808;
    border: none;
    transform: translateY(-10px);
}

h1 {
    color: black;
}
body {
        font-family: Arial, sans-serif;
    }

    .container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
    }

    .form-box {
        width: 50%; /* Form width badhaya */
        background-color: #f0f0f0;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .image-box {
    width: 30%;
    border-radius: 20px; /* Image ko curve shape mein dalne ke liye */
    overflow: hidden; /* Image ko curve shape mein fit karne ke liye */
}

.image-box img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Image ko curve shape mein fit karne ke liye */
}

    .animated-form {
        width: 15%;
        text-align: center;
        font-size: 14px;
        color: #666;
        animation: animate 2s infinite;
    }

    @keyframes animate {
        0% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.1);
        }
        100% {
            transform: scale(1);
        }
    }
    </style>
</head>

<body>
    <h1>We Value Your Opinion!!</h1>
    <div class="container">
        <div class="form-box">
            <div class="textup">
                <i class="fa fa-solid fa-clock"></i>
                It only takes two minutes!!
            </div>
            <br>
            <form action="index.php" method="post">
                <label for="uname">
                    <i class="fa fa-solid fa-user"></i>
                    Name
                </label>
                <input type="text" id="uname" 
                       name="uname" required>

                <label for="email">
                    <i class="fa fa-solid fa-envelope"></i>
                    Email Address
                </label>
                <input type="email" id="email" 
                       name="email" required>

                <label for="phone">
                    <i class="fa-solid fa-phone"></i>
                    Phone No
                </label>
                <input type="tel" id="phone" 
                       name="phone" required>

                <label>
                    <i class="fa-solid fa-face-smile"></i>
                    Do you satisfy with our service?
                </label>
                <div class="radio-group">
                    <input type="radio" id="yes" 
                           name="satisfy" value="yes" checked>
                    <label for="yes">Yes</label>

                    <input type="radio" id="no" 
                           name="satisfy" value="no">
                    <label for="no">No</label>
                </div>

                <label for="msg">
                    <i class="fa-solid fa-comments" 
                       style="margin-right: 3px;"></i>
                    Write your Suggestions:
                </label>
                <textarea id="msg" name="msg" 
                          rows="4" cols="10" required>
                </textarea>
                <button type="submit">
                    Submit
                </button>
            </form>
        </div>
        <!-- <div class="image-box">
            <img src="https://media.istockphoto.com/id/688306678/photo/your-feedback-matters.jpg?s=612x612&w=0&k=20&c=aZOMZjbwsKe9HxUIJbQcnfcToNVFg38FWrudO3Ff7ks=" alt="Image" width="100%" height="100%">
        </div> -->
       
    </div>
</body>

</html>