<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/home.css">
    <link rel="stylesheet" type="text/css" href="./css/recipe.css">
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
        <section class="container humba" id="humba">
        <h2 class="recipe-title">Humba Recipe</h2>
      </section>

      <section>
          <div class="pic-rcp">
          <div class="pic-slider">
            <img src="./assets/images/recipe/humba.png" alt="Image1" class="pic">
          </div>
        </div>
    </section>

    <section class="serve-container">
        <div class="serve-card">
            <p class="recipe-subtitle">Cooking Time</p>
            <img src="./assets/images/recipe/cooking.png" alt="" class="icon">
            <p class="recipe-subtitle1">30 mins</p>
        </div>
        <div class="serve-card">
            <p class="recipe-subtitle">Prepare Time</p>
            <img src="./assets/images/recipe/wall-clock.png" alt="" class="icon">
            <p class="recipe-subtitle1">10 mins</p>
        </div>
        <div class="serve-card">
            <p class="recipe-subtitle">Serves</p>
            <img src="./assets/images/recipe/cloche.png" alt="" class="icon">
            <p class="recipe-subtitle1">4 people</p>
        </div>
    </section>

    <section class="ingredient-container">
            <div class="column left-column">
                <h2 class="ingredient-title">Ingredients</h2>
                <ul class="ingredient-text">
                    <li>2 tbsp cooking oil</li>
                    <li>1 pc onion, chopped</li>
                    <li>1 tbsp garlic, chopped</li>
                    <li>½ kg liempo, cubed</li>
                    <li>1 pc Knorr pork cube</li>
                    <li>¼ cup black beans</li>
                    <li>¼ cup vinegar</li>
                    <li>1 cup pineapple juice</li>
                    <li>water as needed</li>
                    <li>½ cup brown sugar</li>
                    <li>2 pcs chilies</li>
                    <li>½ cup banana blossoms</li>
                    <li>Knorr Pork Cube</li>
                </ul>
            </div>
            <div class="column right-column">
                <h2 class="ingredient-title">Cook</h2>
                <ol class="ingredient-text">
                    <li>Step 1</li>
                        <p>Get your pan nice and hot over medium heat. Pour some oil and sauté the onion, garlic until brown and soft, then add the cubed pork.</p>
                    <li>Step 2</li>
                        <p>Add Knorr Pork Cubes and black beans. Sauté for a minute.</p>
                    <li>Step 3</li>
                        <p>Pour the vinegar and let this simmer before adding the pineapple juice, water, brown sugar, soy sauce, chillies and banana blossoms.</p>
                    <li>Step 4</li>
                        <p>Cook this covered at low heat until pork is tender and sauce has thickened. Taste and check the seasoning.</p>
                    <li>Step 5</li>
                        <p>With hot rice, you’ll find yourself eating more than usual. So, what are you waiting for? Give this recipe a try!</p>
                </ol>
            </div>
    </section>
    <section>
        <h1 class="suggested-title">Suggested Recipes</h1>
        <div class="popular-container container grid">
            <a href="./chickenadobo.html" class="link">
                <article class="popular-card">
                    <img src="./assets/images/categories/img-adobo.png" alt="popular image" class="popular-img">
                    <h3 class="popular-name">Chicken Adobo</h3>
                    <span class="popular-description">a flavorful dish made with meat (usually chicken or pork) marinated in vinegar, soy sauce, and garlic.</span>
                </article>
                </a>
                <a href="./sisig.html" class="link">
                <article class="popular-card">
                    <img src="./assets/images/categories/img-sisig.png" alt="popular image" class="popular-img">
                    <h3 class="popular-name">Crispy Sisig</h3>
                    <span class="popular-description">a sizzling pork dish made with chopped pig's head and liver, seasoned with calamansi and chili peppers.</span>
                </article>
                </a>
                <a href="./afritada.html" class="link">
                    <article class="popular-card">
                        <img src="./assets/images/categories/img-afritada.png" alt="popular image" class="popular-img">
                        <h3 class="popular-name">Pork Afritada</h3>
                        <span class="popular-description">pork stewed in a tomato-based sauce with vegetables such as potatoes, carrots, and bell peppers.</span>
                    </article>
                </a>
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
    </body>
    </html>