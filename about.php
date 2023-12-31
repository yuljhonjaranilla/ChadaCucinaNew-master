<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/home.css">
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
        <section>
        <div class="pic-ctn1">
          <div class="pic-slider">
            <img src="./assets/images/about/cc1 1.png" alt="Image1" class="pic">
          </div>
        </div>
        </section>

        <section class="container history" id="history">
        <span class="section-subtitle"> HISTORY</span>
        <h2 class="section-title">Chada Cucina</h2>
          <div class="sub-title">
            <p>Chada Cucina is a food blog and shopping site that specializes in Filipino cuisine. The site was founded in 2022 by two student Filipino food enthusiasts who wanted to share their love for the rich and diverse flavors of Filipino cooking with the world.</p>
            <p>At first, Chada Cucina started out as a simple blog where the founders shared their favorite Filipino recipes and cooking tips. However, as the blog gained popularity, the founders decided to expand their offerings and create a platform where people could order Filipino foods and see the ingredients used in their preparation.</p>
            <p>Over the years, Chada Cucina has become a go-to source for Filipino food lovers all over the world. The site offers a wide variety of Filipino dishes, from classic favorites like adobo and pancit to lesser-known regional specialties. Each recipe is carefully curated and accompanied by detailed instructions, making it easy for even novice cooks to recreate the dishes at home.</p>
            <p>In addition to recipes, Chada Cucina also offers an online store where customers can purchase ingredients, cooking tools, and other food-related products. The store carries a range of products, from staple ingredients like rice and vinegar to specialty items like banana leaves and shrimp paste.</p>
            <p>Today, Chada Cucina is a thriving online community of Filipino food enthusiasts, home cooks, and professional chefs. The site continues to evolve and expand, with new recipes, products, and features being added all the time. Whether you're a longtime fan of Filipino cuisine or a curious newcomer, Chada Cucina is the perfect place to explore the delicious flavors and rich culinary traditions of the Philippines.</p>
        </div>
      </section>

      <section>
      <span class="section-subtitle">FOUNDERS SPOTLIGHT</span>
      <h2 class="section-title">Meet the Team</h2>

          <div class="pic-ctn">
          <div class="pic-slider">
            <img src="./assets/images/about/Yul.png" alt="Image1" class="pic1">
            <img src="./assets/images/about/Christian.png" alt="Image2" class="pic1">
          </div>
          <div class="button-ctn">
            <button class="button-about" onclick="showPic(1)"></button>
            <button class="button-about" onclick="showPic(2)"></button>
          </div>
        </div>
    </section>

    <section class="form">
        <span class="section-subtitle">CHITCHAT</span>
        <h2 class="section-title">Contact Us</h2>
          <div>
            <form action="" class="contact-form" onsubmit="return onSubmit();">
              <label for="name">Name</label>
              <input type="text" id="name" name="name" required>
            
              <label for="email">Email</label>
              <input type="email" id="email" name="email" required>
            
              <label for="message">Message</label>
              <textarea id="message" name="message" rows="5" required></textarea>
            
              <button type="submit">Send</button>
            </form>
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
                    Chada Cucina is a food blog and shopping <br/>
                    site that specializes in Filipino cuisine.  <br/>
                    The site was founded in 2022 by two student <br/>
                    Filipino food enthusiasts who wanted to <br/>
                    share their love for the rich and diverse <br/>
                    flavors of Filipino cooking with the world. <br/>
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
  <script src="./js/scrollreveal.min.js"></script>
  <script src="./js/main.js"></script>
  <script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function prevPic() {
      showSlides(slideIndex -= 1);
    }

    function nextPic() {
      showSlides(slideIndex += 1);
    }

    function showPic(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("pic");
      var buttons = document.getElementsByClassName("button");

      if (n > slides.length) {
        slideIndex = 1;
      }

      if (n < 1) {
        slideIndex = slides.length;
      }

      for (i = 0; i < slides.length; i++) {
        slides[i].style.transform = "translateX(-" + (slideIndex - 1) * 100 + "%)";
      }

      for (i = 0; i < buttons.length; i++) {
        buttons[i].classList.remove("active");
      }

      buttons[slideIndex - 1].classList.add("active");
    }

    function onSubmit() {
      alert('Thank you! Your message has been sent.');
      return true; 
    }

  </script>
    </body>
    </html>