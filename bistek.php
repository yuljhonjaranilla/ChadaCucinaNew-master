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
        <h2 class="recipe-title">Bistek Recipe</h2>
      </section>

      <section>
          <div class="pic-rcp">
          <div class="pic-slider">
            <img src="./assets/images/recipe/bistek.png" alt="Image1" class="pic">
          </div>
        </div>
    </section>

    <section class="serve-container">
        <div class="serve-card">
            <p class="recipe-subtitle">Cooking Time</p>
            <img src="./assets/images/recipe/cooking.png" alt="" class="icon">
            <p class="recipe-subtitle1">15 mins</p>
        </div>
        <div class="serve-card">
            <p class="recipe-subtitle">Prepare Time</p>
            <img src="./assets/images/recipe/wall-clock.png" alt="" class="icon">
            <p class="recipe-subtitle1">15 mins</p>
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
                    <li>500 g beef sirloin slices, ¼” thick, pounded</li>
                    <li>1 pc Knorr beef cube</li>
                    <li>3 tbsps olive oil</li>
                    <li>fine breadcrumbs</li>
                    <li>cooking oil for frying</li>
                    <li>¾ cup Knorr Liquid Seasoning</li>
                    <li>¼ cup calamansi juice</li>
                    <li>¼ cup water</li>
                    <li>⅛ cup sugar</li>
                    <li>1 tbsp cornstarch diluted in 3 tbsp water</li>
                    <li>150 g onion rings, fried in oil</li>
                    <li>1 pinch crushed black pepper</li>
                    <li>Knorr Beef Cube</li>
                </ul>
            </div>
            <div class="column right-column">
                <h2 class="ingredient-title">Cook</h2>
                <ol class="ingredient-text">
                    <li>Step 1</li>
                        <p>Let’s begin by mashing the Knorr Beef Cube with a mortar and pestle. Pound it well and then slowly drizzle 3 tbsp of olive oil. Mix this well. Massage this mixture onto the beef slices.</p>
                    <li>Step 2</li>
                        <p>For the next step, cover the beef in breadcrumbs.</p>
                    <li>Step 3</li>
                        <p>Now, get your pan nice and hot over medium high heat. Pour some oil and pan-fry the beef slices. Set this aside.</p>
                    <li>Step 4</li>
                        <p>You can now remove the excess oil from the pan.</p>
                    <li>Step 5</li>
                        <p>Let’s now make the sauce: Add the Knorr Liquid Seasoning, calamansi juice, water and sugar in a bowl. Season this with black pepper and adjust the seasoning of sauce as desired. Thicken the sauce with diluted cornstarch and drizzle the sauce on top of the fried beef and top with glazed onion rings. That’s our dish!</p>
                    <li>Step 6</li>
                        <p>Your family will always find comfort in Bisteak Tagalog! This is home! May this recipe allow you to create more memories with your loved ones as you enjoy the company of one another while eating this dish.</p>
                </ol>
            </div>
    </section>
    <section>
        <h1 class="suggested-title">Suggested Recipes</h1>
        <div class="popular-container container grid">
            <a href="./humba.html" class="link">
                <article class="popular-card">
                  <img src="./assets/images/categories/img-humba.png" alt="popular image" class="popular-img">
                  <h3 class="popular-name">Humba</h3>
                  <span class="popular-description">Made with pork belly that is simmered in a sauce made with soy sauce, vinegar, brown sugar, garlic, and other spices.</span>
              </a>
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