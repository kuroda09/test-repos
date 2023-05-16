<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Food Menu</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  </head>
  <body>

    <section class = "menu">
      <div class = "menu-container">
        <div class = "menu-head">
        <button id="back-button">←</button>
          <h2>Special Food Menu</h2>
          <p>list of drinks or dishes that a restaurant or bar serves. It’s typically separated by categories, like appetizers, entrees, desserts, drinks and more. Menus include the name of the dish, its ingredients and its price.</p>
        </div>

        <div class = "menu-btns">
          <button type = "button" class = "menu-btn active-btn" id = "featured">featured</button>
          <button type = "button" class = "menu-btn" id = "today-special">today's special</button>
          <button type = "button" class = "menu-btn" id = "new-arrival">new arrivals</button>
        </div>

        <div class = "food-items">
          <!-- item -->
          <div class = "food-item featured">
            <div class = "food-img">
              <img src = "foods/egg-rice.jpg" alt = "food image">
            </div>
            <div class = "food-content">
              <h2 class = "food-name">Fried Egg & Fried Rice</h2>
              <div class = "line"></div>
              <h3 class = "food-price"></h3>
              <ul class = "rating">
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "far fa-star"></i></li>
              </ul>
              <p class = "category">Categories: <span>Breakfast Meal</span></p>
            </div>
          </div>
          <!-- end of item -->

          <!-- item -->
          <div class = "food-item today-special">
            <div class = "food-img">
              <img src = "foods/barbecue.jpg" alt = "food image">
            </div>
            <div class = "food-content">
              <h2 class = "food-name">Barbecue</h2>
              <div class = "line"></div>
              <h3 class = "food-price"></h3>
              <ul class = "rating">
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "far fa-star"></i></li>
              </ul>
              <p class = "category">Categories: <span>Lunch Meal</span></p>
            </div>
          </div>
          <!-- end of item -->

          <!-- item -->
          <div class = "food-item new-arrival">
            <div class = "food-img">
              <img src = "foods/barbecued-roasted-duck-ramen.jpg" alt = "food image">
            </div>
            <div class = "food-content">
              <h2 class = "food-name">Barbecued Roasted Duck Ramen</h2>
              <div class = "line"></div>
              <h3 class = "food-price"></h3>
              <ul class = "rating">
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "far fa-star"></i></li>
              </ul>
              <p class = "category">Categories: <span>Dinner Meal</span></p>
            </div>
          </div>
          <!-- end of item -->

          <!-- item -->
          <div class = "food-item featured">
            <div class = "food-img">
              <img src = "foods/bread-with-seeds-and-butter.jpg" alt = "food image">
            </div>
            <div class = "food-content">
              <h2 class = "food-name">Bread With Seeds & Butter</h2>
              <div class = "line"></div>
              <h3 class = "food-price"></h3>
              <ul class = "rating">
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "far fa-star"></i></li>
              </ul>
              <p class = "category">Categories: <span>Breakfast Meal</span></p>
            </div>
          </div>
          <!-- end of item -->


          <!-- item -->
          <div class = "food-item featured">
            <div class = "food-img">
              <img src = "foods/chicken-breast-steaks-with-beetroot.jpg" alt = "food image">
            </div>
            <div class = "food-content">
              <h2 class = "food-name">Chicken Breast Steaks</h2>
              <div class = "line"></div>
              <h3 class = "food-price"></h3>
              <ul class = "rating">
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "far fa-star"></i></li>
              </ul>
              <p class = "category">Categories: <span>Lunch Meal</span></p>
            </div>
          </div>
          <!-- end of item -->

          <!-- item -->
          <div class = "food-item today-special">
            <div class = "food-img">
              <img src = "foods/chicken-legs-with-tomatoes-peppers-and-oranges.jpg" alt = "food image">
            </div>
            <div class = "food-content">
              <h2 class = "food-name">Chicken Legs</h2>
              <div class = "line"></div>
              <h3 class = "food-price"></h3>
              <ul class = "rating">
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "far fa-star"></i></li>
              </ul>
              <p class = "category">Categories: <span>Dinner Meal</span></p>
            </div>
          </div>
          <!-- end of item -->

          <!-- item -->
          <div class = "food-item new-arrival">
            <div class = "food-img">
              <img src = "foods/eggplant-cannelloni.jpg" alt = "food image">
            </div>
            <div class = "food-content">
              <h2 class = "food-name">Eggplant Cannelloni</h2>
              <div class = "line"></div>
              <h3 class = "food-price"></h3>
              <ul class = "rating">
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "far fa-star"></i></li>
              </ul>
              <p class = "category">Categories: <span>Breakfast Meal</span></p>
            </div>
          </div>
          <!-- end of item -->

          <!-- item -->
          <div class = "food-item featured">
            <div class = "food-img">
              <img src = "foods/adobo.jpg" alt = "food image">
            </div>
            <div class = "food-content">
              <h2 class = "food-name">Pork Adobo</h2>
              <div class = "line"></div>
              <h3 class = "food-price"></h3>
              <ul class = "rating">
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "far fa-star"></i></li>
              </ul>
              <p class = "category">Categories: <span>Lunch Meal</span></p>
            </div>
          </div>
          <!-- end of item -->

          <!-- item -->
          <div class = "food-item today-special">
            <div class = "food-img">
              <img src = "foods/fried-rice-with-shrimps.jpg" alt = "food image">
            </div>
            <div class = "food-content">
              <h2 class = "food-name">Fried Rice</h2>
              <div class = "line"></div>
              <h3 class = "food-price"></h3>
              <ul class = "rating">
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "far fa-star"></i></li>
              </ul>
              <p class = "category">Categories: <span>Breakfast Meal</span></p>
            </div>
          </div>
          <!-- end of item -->

          <!-- item -->
          <div class = "food-item new-arrival">
            <div class = "food-img">
              <img src = "foods/king-prawns-with-green-lettuce.jpg" alt = "food image">
            </div>
            <div class = "food-content">
              <h2 class = "food-name">King Prawns</h2>
              <div class = "line"></div>
              <h3 class = "food-price"></h3>
              <ul class = "rating">
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "far fa-star"></i></li>
              </ul>
              <p class = "category">Categories: <span>Lunch Meal</span></p>
            </div>
          </div>
          <!-- end of item -->

          <!-- item -->
          <div class = "food-item featured">
            <div class = "food-img">
              <img src = "foods/chicken.jpg" alt = "food image">
            </div>
            <div class = "food-content">
              <h2 class = "food-name">Fried Chicken</h2>
              <div class = "line"></div>
              <h3 class = "food-price"></h3>
              <ul class = "rating">
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "far fa-star"></i></li>
              </ul>
              <p class = "category">Categories: <span>Dinner Meal</span></p>
            </div>
          </div>
          <!-- end of item -->


          <!-- item -->
          <div class = "food-item featured">
            <div class = "food-img">
              <img src = "foods/karekare.jpg" alt = "food image">
            </div>
            <div class = "food-content">
              <h2 class = "food-name">Kare-Kare</h2>
              <div class = "line"></div>
              <h3 class = "food-price"></h3>
              <ul class = "rating">
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "far fa-star"></i></li>
              </ul>
              <p class = "category">Categories: <span>Dinner Meal</span></p>
            </div>
          </div>
          <!-- end of item -->

          <!-- item -->
          <div class = "food-item featured">
            <div class = "food-img">
              <img src = "foods/yogurt.jpg" alt = "food image">
            </div>
            <div class = "food-content">
              <h2 class = "food-name">yogurt with Fruit or Nuts</h2>
              <div class = "line"></div>
              <h3 class = "food-price"></h3>
              <ul class = "rating">
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "far fa-star"></i></li>
              </ul>
              <p class = "category">Categories: <span>Dessert</span></p>
            </div>
          </div>
          <!-- end of item -->

          <!-- item -->
          <div class = "food-item today-special">
            <div class = "food-img">
              <img src = "foods/capcake.jpg" alt = "food image">
            </div>
            <div class = "food-content">
              <h2 class = "food-name">Red Velvet Cupcake</h2>
              <div class = "line"></div>
              <h3 class = "food-price"></h3>
              <ul class = "rating">
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "far fa-star"></i></li>
              </ul>
              <p class = "category">Categories: <span>Dessert</span></p>
            </div>
          </div>
          <!-- end of item -->
           <!-- item -->
           <div class = "food-item new-arrival">
            <div class = "food-img">
              <img src = "foods/cheesecake.jpg" alt = "food image">
            </div>
            <div class = "food-content">
              <h2 class = "food-name">Cheesecake</h2>
              <div class = "line"></div>
              <h3 class = "food-price"></h3>
              <ul class = "rating">
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "fas fa-star"></i></li>
                <li><i class = "far fa-star"></i></li>
              </ul>
              <p class = "category">Categories: <span>Dessert</span></p>
            </div>
          </div>
          <!-- end of item -->
        </div>
      </div>
    </section>
    <script src="script.js"></script>
    <script>
    const backButton = document.getElementById("back-button");

backButton.addEventListener("click", () => {
  window.history.back();
});
</script>
  </body>
</html>