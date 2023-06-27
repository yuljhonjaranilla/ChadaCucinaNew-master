<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="./css/home.css">
        <link rel="stylesheet" href="./css/swiper-bundle.min.css">
        <link rel="icon" href="./assets/icons/ChadaCucina.png">
        <title> Chada Cucina </title>
    </head>

    <body>

        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav-logo">
                    <img src="./assets/icons/ChadaCucina.png" alt="ChadaCucina">
                </a>

                <div class="nav-menu" id="nav_menu">
                    <ul class="nav-list grid">

                        <li class="nav-item">
                            <a href="./home.php" class="nav-link"> Home </a>
                        </li>
        
                        <li class="nav-item">
                            <a href="./about.php" class="nav-link"> About </a>
                        </li>
        
                        <li class="nav-item">
                            <a href="./categories.php" class="nav-link"> Categories </a>
                        </li>

                        <li class="nav-item">
                            </button><a href="#order" class="nav-link"><button class="order"> Book Now </button></a> 
                        </li>
                        
                    </ul>

                    <div class="nav-close" id="nav_close">
                        <i class="ri-close-line"></i>
                    </div>

                </div>

                <div class="nav-buttons">

                    <i class="ri-moon-line change theme" id="theme-button"></i>

                    <div class="nav-toggle" id="nav_toggle">
                        <i class="ri-apps-2-line"></i>
                    </div>

                </div>

            </nav>
        </header>

        <main class="main">
            <div class="home-container container grid">
                <img src="./assets/images/home/pan.png" alt="pan" class="home-img">
                <div class="home-data">
                    <h1 class="home-title">
                        Spice up your life <br/>
                        in Filipino <span class="auto-type" style="color:#6FA12B"> delights </span>
                    </h1>
                    
                    <p class="home-description">
                        Experience the bold and unique flavors of Filipino cuisine! Join us on a culinary
                        journey through the Philippines and discover the rich cultural heritage behind
                        each delicious bite.
                    </p>

                    <a href="#" class="button"> Order Now </a>
                    <a href="#" class="button"> Food Details </a>
                </div>
            </div>
            
            <section class="features-section" id="section">
                <span class="section-subtitle"> FEATURES </span>
                <h2 class="section-title"> Savor the Filipino flavor!</h2>
                <div class="features-container container grid">
                    <article class="features-card">
                        <img src="./assets/images/home/ingredients.png" alt="ingredients" class="features-img">
                        <h3 class="features-name"> Ingredients </h3>
                        <span class="features-description"> 
                            Know what you eat - view ingredients at a glance make meal with confidence!
                        </span>
                    </article>

                    <article class="features-card">
                        <img src="./assets/images/home/deliver.png" alt="deliver" class="features-img">
                        <h3 class="features-name"> Deliver </h3>
                        <span class="features-description"> 
                            Satisfy your hunger with delivery - order now and enjoy a hassle-free feast!
                        </span>
                    </article>

                    <article class="features-card">
                        <img src="./assets/images/home/star.png" alt="ingredients" class="features-img">
                        <h3 class="features-name"> Rate </h3>
                        <span class="features-description"> 
                            Share your food experiences by rating the flavors and presentations!
                        </span>
                    </article>
                </div>
            </section>

            <section class="about-section">
                <div class="about-container container grid">
                    <div class="about-data">
                        <span class="section-subtitle"> ABOUT US </span>
                            <h2 class="section-title">
                                <div>
                                    <p class="about-title">Chada Cucina</p>
                                </div>
                            </h2>

                            <p class="section-description">
                                Your one-stop destination for authentic Filipino cuisine, offering a wide range of mouth-watering dishes and their ingredients for you to discover and savor.
                            </p>
                    </div>

                    <img src="./assets/images/home/about-photo.png" alt="about-photo" class="about-img">
                </div>
            </section>

            <section class="sec-container">
                <div class="testimonial mySwiper">
                    <div class="test-content swiper-wrapper">
                        <div class="slide swiper-slide">
                            <img src="./assets/images/home/alex.png" alt="" class="image" />
                                <p>
                                    ChadaCucina is a user-friendly website that makes finding the best Filipino recipes a breeze. 
                                    The intuitive navigation and search feature help me quickly explore different categories and locate specific dishes. 
                                    The detailed step-by-step instructions and accompanying photos ensure that I can easily follow along and create authentic Filipino flavors in my own kitchen.
                                </p>
                
                                <i class="ri-double-quotes-l quote-icon"></i>
              
                                <div class="details">
                                    <span class="name">ALEX SIMON DACER</span>
                                    <span class="job">Senior Web Developer, Our Global Team</span>
                                </div>
                        </div>

                        <div class="slide swiper-slide">
                            <img src="./assets/images/home/love.png" alt="" class="image" />
                                <p>
                                    I'm grateful for discovering ChadaCucina as it has become my go-to resource for Filipino recipes. 
                                    The website offers an extensive collection of mouthwatering dishes, ranging from traditional classics to modern interpretations. 
                                    The user reviews and ratings provide valuable insights, giving me confidence in trying out new recipes and ensuring delicious results every time.
                                </p>
                
                                <i class="ri-double-quotes-l quote-icon"></i>
              
                                <div class="details">
                                    <span class="name">LOVE JHOYE RABOY</span>
                                    <span class="job">Dean, College of Information Technology</span>
                                </div>
                        </div>

                        <div class="slide swiper-slide">
                            <img src="./assets/images/home/angelie.png" alt="" class="image" />
                                <p>
                                    ChadaCucina has revolutionized my approach to cooking Filipino cuisine. 
                                    With its vast recipe selection, I can explore the diverse flavors of different regions in the Philippines. 
                                    The integration of user-generated content and mobile-friendly design make it a convenient and engaging platform, allowing me to access recipes on the go and even find variations and tips shared by fellow cooking enthusiasts.
                                </p>
                
                                <i class="ri-double-quotes-l quote-icon"></i>
              
                                <div class="details">
                                    <span class="name">ANGELIE SABANAL</span>
                                    <span class="job">Instructor, Human Computer Interaction</span>
                                </div>
                        </div>
                    </div>
                    <div class="swiper-button-next swiper-btn"></div>   
                    <div class="swiper-button-prev swiper-btn"></div>   
                </div>   
            </section>

            <section class="newsletter-section">
                <div class="newsletter-container">
                    <div class="picture"></div>
                    <div class="newsletter">
                        <h1 class="newsletter-title"> Don't miss out the latest offers!</h1>
                        <p> Subscribe to our newsletter to receive our latest updates.</p>
                        <form action="" class="newsletter-form">
                            <input type="text" class="emailInput" placeholder="E-Mail">
                            <input type="submit" class="newsletter-btn" value="Join Us">

                        </form>
                    </div>
                </div>
            </section>

        </main>

        <footer class="footer">
            <div class="footer-container container grid">
                <div>
                    <a href="#" class="footer-logo">
                        <img src="./assets/icons/ChadaCucina.png" alt="logo image">
                        ChadaCucina
                    </a>

                    <p class="footer-description">
                        Chada Cucina is a food blog and shopping
                        site that specializes in Filipino cuisine.
                        The site was founded in 2022 by two student
                        Filipino food enthusiasts who wanted to
                        share their love for the rich and diverse 
                        flavors of Filipino cooking with the world.
                    </p>
                </div>

                <div class="footer-content">
                    <div>
                        <h3 class="footer-title"> Main Menu </h3>
                            <ul class="footer-links">

                                <li>
                                    <a href="#" class="footer-link"> Home </a>
                                </li>

                                <li>
                                    <a href="#" class="footer-link"> About </a>
                                </li>

                                <li>
                                    <a href="#" class="footer-link"> Categories </a>
                                </li>

                                <li>
                                    <a href="#" class="footer-link"> Book Now </a>
                                </li>

                                
                            </ul>
                    </div>

                    <div>
                        <h3 class="footer-title"> Information </h3>
                            <ul class="footer-links">

                                <li>
                                    <a href="#" class="footer-link"> Contact </a>
                                </li>

                                <li>
                                    <a href="#" class="footer-link"> Orders & Returns </a>
                                </li>

                                <li>
                                    <a href="#" class="footer-link"> Videos </a>
                                </li>

                                <li>
                                    <a href="#" class="footer-link"> Reservation </a>
                                </li>
                            </ul>
                    </div>

                    <div>
                        <h3 class="footer-title"> Address </h3>
                            <ul class="footer-links">

                                <li class="footer-information">
                                    Cagayan de Oro City, Philippines 
                                </li>

                                <li class="footer-information">
                                    chadacucina@gmail.com <br/>
                                    +63 9123 456 7890
                                </li>

                                <li>
                                    <a href="www.facebook.com" target="blank" class="footer-social-link">
                                        <i class="ri-facebook-circle-fill"></i>
                                    </a>
                                    <a href="www.instagram.com" target="blank" class="footer-social-link">
                                        <i class="ri-instagram-fill"></i>
                                    </a>
                                    <a href="www.twitter.com" target="blank" class="footer-social-link">
                                        <i class="ri-twitter-fill"></i>
                                    </a>
                                </li>
                            </ul>
                    </div>
                </div>
            </div>
            
            <div class="footer-info container">
                <div class="footer-card">
                    <img src="./assets/icons/footer-card-1.png" alt="footer image">
                    <img src="./assets/icons/footer-card-2.png" alt="footer image">
                    <img src="./assets/icons/footer-card-3.png" alt="footer image">
                    <img src="./assets/icons/footer-card-4.png" alt="footer image">
                </div>

                <span class="footer-copy">
                    &#169; Copyright Brobro Company. All rights reserved.
                </span>
            </div>
        </footer>
       
        <a href="#" class="scrollup" id="scroll-up">
            <i class="ri-arrow-up-line"></i>
        </a>

        <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
        <script>
            var typed = new Typed(".auto-type", {
                strings: ["bites!", "kites!", "ignites!"],
                typeSpeed: 200,
                backSpeed: 200,
                loop: true
            })
        </script>

        <script src="./js/swiper-bundle.min.js"></script>
        <script src="./js/scrollreveal.min.js"></script>
        <script src="./js/main.js"></script>
    </body>

</html>