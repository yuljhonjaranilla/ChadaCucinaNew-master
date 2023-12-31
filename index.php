<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/login.css">
    <link rel="icon" href="./assets/icons/ChadaCucina.png">
    <title> Login </title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="" class="signin-form">
                    <h2 class="title"> Sign In </h2>
                    <div class="input-field">
                        <i class="ri-user-fill"></i>
                        <input type="text" placeholder="Username">
                    </div>
                    <div class="input-field">
                        <i class="ri-lock-2-fill"></i>
                        <input type="password" placeholder="Password">
                    </div>
                    <input type="submit" value="Login" class="btn" formaction="./home.php">
                    <p class="social-text"> or sign in with social platforms </p>
                    <div class="social-media">
                        <a href="www.facebook.com" target="blank" class="social-icon">
                            <i class="ri-facebook-circle-fill"></i>
                        </a>
                        <a href="www.instagram.com" target="blank" class="social-icon">
                            <i class="ri-instagram-fill"></i>
                        </a>
                        <a href="www.twitter.com" target="blank" class="social-icon">
                            <i class="ri-twitter-fill"></i>
                        </a>
                    </div>
                </form>

                <form action="" class="register-form">
                    <h2 class="title"> Sign Up </h2>
                    <div class="input-field">
                        <i class="ri-user-fill"></i>
                        <input type="text" placeholder="Username">
                    </div>
                    <div class="input-field">
                        <i class="ri-mail-fill"></i>
                        <input type="password" placeholder="Email">
                    </div>
                    <div class="input-field">
                        <i class="ri-lock-2-fill"></i>
                        <input type="password" placeholder="Password">
                    </div>
                    <input type="submit" value="Register" class="btn">

                    <p class="social-text"> or register up with social platforms </p>
                    <div class="social-media">
                        <a href="www.facebook.com" target="blank" class="social-icon">
                            <i class="ri-facebook-circle-fill"></i>
                        </a>
                        <a href="www.instagram.com" target="blank" class="social-icon">
                            <i class="ri-instagram-fill"></i>
                        </a>
                        <a href="www.twitter.com" target="blank" class="social-icon">
                            <i class="ri-twitter-fill"></i>
                        </a>
                    </div>
                </form>
            </div>

            <div class="panels-container">
                <div class="panel left-panel">
                    <div class="content">
                        <h3 class="subtitle"> New here? </h3>
                        <p> 
                            Join our community of Filipino food enthusiasts and gain exclusive
                            access to delicious recipes, informative articles, and convenient 
                            online shopping!  </p>
                        <button class="btn transparent" id="signup-btn"> Sign Up</button>
                    </div>

                    <img src="./assets/images/login/login.svg" class="image" alt="">
                </div>

                <div class="panel right-panel">
                    <div class="content">
                        <h3 class="subtitle"> Already a member? </h3>
                        <p> 
                            Welcome back to our community of Filipino food enthusiasts - keep enjoying exclusive access to our content 
                            and opportunities to connect and share! </p>
                        <button class="btn transparent" id="signin-btn"> Login </button>
                    </div>

                    <img src="./assets/images/login/register.svg" class="image" alt="">
                </div>

        </div>
        </div>
    </div>

    <script src="./js/login.js"></script>
</body>
</html>