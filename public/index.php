<?php include "../includes/header.php"; ?>

<!-- ===== BANNER SLIDER SECTION (SEPARATE FROM HEADER) ===== -->
<section class="home-banner">
  <div class="banner-container">

    <a href="/shop.php" class="banner-slide active">
      <img src="../assets/images/Banner (1).jpg" alt="New Year Decor">
    </a>

    <a href="/shop.php" class="banner-slide">
      <img src="../assets/images/Banner (2).jpg" alt="Kids Decor">
    </a>

    <a href="/shop.php" class="banner-slide">
      <img src="../assets/images/Banner (3).jpg" alt="Birthday Decor">
    </a>
    <!-- Arrows -->
    <button class="banner-arrow left" onclick="prevBanner()">❮</button>
    <button class="banner-arrow right" onclick="nextBanner()">❯</button>

    <!-- Dots -->
    <div class="banner-dots">
      <span onclick="goBanner(0)" class="dot active"></span>
      <span onclick="goBanner(1)" class="dot"></span>
      <span onclick="goBanner(2)" class="dot"></span>
    </div>

  </div>
</section>

<script src="../assets/js/banner.js"></script>

<!-- ================= LOCATION STRAP ================= -->
<section class="location-strap">
  <div class="location-strap-inner">
    Best Party Organizers in
    <span id="currentCityText">
      <?= $_SESSION['city'] ?? 'Bangalore' ?>
    </span>
  </div>
</section>

<section class="categories-section">
  <h2 class="categories-title">Explore our categories</h2>

  <div class="categories-grid">

    <a href="#" class="category-card">
      <img src="../assets/images/categories/category-birthday.webp" alt="Birthday Services">
      <span>Birthday Services</span>
    </a>

    <a href="#" class="category-card">
      <img src="../assets/images/categories/category-kids.png" alt="All Kids Activity">
      <span>All Kids Activity</span>
    </a>

    <a href="#" class="category-card">
      <img src="../assets/images/categories/category-theme.webp" alt="Birthday Theme Decor">
      <span>Birthday Theme Decor</span>
    </a>

    <a href="#" class="category-card">
      <img src="../assets/images/categories/category-decoration.jpg" alt="Decoration">
      <span>Decoration</span>
    </a>

    <a href="#" class="category-card">
      <img src="../assets/images/categories/category-candle.jpg" alt="Candle Light Dinner">
      <span>Candle Light Dinner</span>
    </a>

    <a href="#" class="category-card">
      <img src="../assets/images/categories/category-theater.jpg" alt="Private Theater Celebration">
      <span>Private Theater Celebration</span>
    </a>

    <a href="#" class="category-card">
      <img src="../assets/images/categories/category-house.jpg" alt="House Warming">
      <span>House Warming</span>
    </a>

    <a href="#" class="category-card">
      <img src="../assets/images/categories/category-naming.jpg" alt="Naming Ceremony">
      <span>Naming Ceremony</span>
    </a>

    <a href="#" class="category-card">
      <img src="../assets/images/categories/category-baby.jpg" alt="Baby Shower">
      <span>Baby Shower</span>
    </a>

    <a href="#" class="category-card">
      <img src="../assets/images/categories/category-surprise.webp" alt="Surprises">
      <span>Surprises</span>
    </a>

     <a href="#" class="category-card">
      <img src="../assets/images/categories/category-anniversary.jpg" alt="Anniversary Celebrations">
      <span>Anniversary Celebrations</span>
    </a>

    <a href="#" class="category-card">
      <img src="../assets/images/categories/category-corporate.png" alt="Corporate Celebrations">
      <span>Corporate Celebrations</span>
    </a>


  </div>
</section>

<!-- ================= PRODUCT SECTION ================= -->
<section class="product-section">

  <div class="section-header">
    <h2>Birthday Decoration</h2>
    <a href="/public/birthday-decoration.php" class="view-all-btn">View All</a>
  </div>

  <div class="product-slider">

    <!-- CARD 1 -->
    <div class="product-card">
      <div class="card-img">
        <span class="discount">15% OFF</span>
        <span class="wishlist">♡</span>
        <img src="../assets/images/birthday-decor/birthday1.jpg" alt="">
      </div>

      <h4>Neon Ring Birthday Decoration</h4>

      <div class="price-row">
        <span class="price">₹5499</span>
        <span class="strike">₹6499</span>
      </div>

      <div class="rating">
        ⭐ 4.9
      </div>

     <div class="card-actions">
  <a href="/public/cart.php" class="cart-btn" title="Add to Cart">
    🛒
  </a>
  <button class="book-btn">Book Now</button>
    </div>
</div>

    <!-- CARD 2 -->
    <div class="product-card">
      <div class="card-img">
        <span class="discount">24% OFF</span>
        <span class="wishlist">♡</span>
        <img src="../assets/images/birthday-decor/birthday2.jpg" alt="">
      </div>

      <h4>Pink and White Birthday Decor</h4>

      <div class="price-row">
        <span class="price">₹3199</span>
        <span class="strike">₹4199</span>
      </div>

      <div class="rating">
        ⭐ 5.0
      </div>

       <div class="card-actions">
  <a href="/public/cart.php" class="cart-btn" title="Add to Cart">
    🛒
  </a>
  <button class="book-btn">Book Now</button>
    </div>
</div>

     <!-- CARD 3 -->
    <div class="product-card">
      <div class="card-img">
        <span class="discount">22% OFF</span>
        <span class="wishlist">♡</span>
        <img src="../assets/images/birthday-decor/birthday3.jpg" alt="">
      </div>

      <h4>Candy Theme Balloon Arch Decoration</h4>

      <div class="price-row">
        <span class="price">₹5499</span>
        <span class="strike">₹7499</span>
      </div>

      <div class="rating">
        ⭐ 4.9
      </div>

       <div class="card-actions">
  <a href="/public/cart.php" class="cart-btn" title="Add to Cart">
    🛒
  </a>
  <button class="book-btn">Book Now</button>
    </div>
</div>

     <!-- CARD 4 -->
    <div class="product-card">
      <div class="card-img">
        <span class="discount">18% OFF</span>
        <span class="wishlist">♡</span>
        <img src="../assets/images/birthday-decor/birthday4.webp" alt="">
      </div>

      <h4>Simple Elegant Birthday Decoration</h4>

      <div class="price-row">
        <span class="price">₹6499</span>
        <span class="strike">₹8499</span>
      </div>

      <div class="rating">
        ⭐ 4.9
      </div>

       <div class="card-actions">
  <a href="/public/cart.php" class="cart-btn" title="Add to Cart">
    🛒
  </a>
  <button class="book-btn">Book Now</button>
    </div>
</div>

     <!-- CARD 5 -->
    <div class="product-card">
      <div class="card-img">
        <span class="discount">35% OFF</span>
        <span class="wishlist">♡</span>
        <img src="../assets/images/birthday-decor/birthday5.jpg" alt="">
      </div>

      <h4>Royal Gold & White Birthday Ring Decoration</h4>

      <div class="price-row">
        <span class="price">₹7499</span>
        <span class="strike">₹9999</span>
      </div>

      <div class="rating">
        ⭐ 4.9
      </div>

       <div class="card-actions">
  <a href="/public/cart.php" class="cart-btn" title="Add to Cart">
    🛒
  </a>
  <button class="book-btn">Book Now</button>
    </div>
</div>

     <!-- CARD 6 -->
    <div class="product-card">
      <div class="card-img">
        <span class="discount">28% OFF</span>
        <span class="wishlist">♡</span>
        <img src="../assets/images/birthday-decor/birthday6.jpg" alt="">
      </div>

      <h4>Pastel Balloon Theme Birthday Decoration</h4>

      <div class="price-row">
        <span class="price">₹3999</span>
        <span class="strike">₹4499</span>
      </div>

      <div class="rating">
        ⭐ 4.9
      </div>

      <div class="card-actions">
  <a href="/public/cart.php" class="cart-btn" title="Add to Cart">
    🛒
  </a>
  <button class="book-btn">Book Now</button>
    </div>
 </div>

     <!-- CARD 7 -->
    <div class="product-card">
      <div class="card-img">
        <span class="discount">25% OFF</span>
        <span class="wishlist">♡</span>
        <img src="../assets/images/birthday-decor/birthday7.jpg" alt="">
      </div>

      <h4>Kids Cartoon Theme Balloon Decoration</h4>

      <div class="price-row">
        <span class="price">₹2499</span>
        <span class="strike">₹4999</span>
      </div>

      <div class="rating">
        ⭐ 4.9
      </div>

      <div class="card-actions">
  <a href="/public/cart.php" class="cart-btn" title="Add to Cart">
    🛒
  </a>
  <button class="book-btn">Book Now</button>
    </div>
</div>


    <!-- ADD MORE CARDS SAME WAY -->

  </div>
</section>
<!-- ================= END PRODUCT SECTION ================= -->


<!-- ================= PRODUCT SECTION ================= -->
<section class="product-section">

  <div class="section-header">
    <h2>Theme Decoration</h2>
    <a href="/public/birthday-decoration.php" class="view-all-btn">View All</a>
  </div>

  <div class="product-slider">

    <!-- CARD 1 -->
    <div class="product-card">
      <div class="card-img">
        <span class="discount">15% OFF</span>
        <span class="wishlist">♡</span>
        <img src="../assets/images/theme-decor/theme1.jpg" alt="">
      </div>

      <h4>Butterfly Theme Balloon Decoration</h4>

      <div class="price-row">
        <span class="price">₹4899</span>
        <span class="strike">₹6499</span>
      </div>

      <div class="rating">
        ⭐ 4.8
      </div>

     <div class="card-actions">
  <a href="/public/cart.php" class="cart-btn" title="Add to Cart">
    🛒
  </a>
  <button class="book-btn">Book Now</button>
    </div>
</div>

    <!-- CARD 2 -->
    <div class="product-card">
      <div class="card-img">
        <span class="discount">24% OFF</span>
        <span class="wishlist">♡</span>
        <img src="../assets/images/theme-decor/theme2.jpg" alt="">
      </div>

      <h4>Unicorn Theme Birthday Decoration</h4>

      <div class="price-row">
        <span class="price">₹5599</span>
        <span class="strike">₹7499</span>
      </div>

      <div class="rating">
        ⭐ 4.9
      </div>

       <div class="card-actions">
  <a href="/public/cart.php" class="cart-btn" title="Add to Cart">
    🛒
  </a>
  <button class="book-btn">Book Now</button>
    </div>
</div>

     <!-- CARD 3 -->
    <div class="product-card">
      <div class="card-img">
        <span class="discount">22% OFF</span>
        <span class="wishlist">♡</span>
        <img src="../assets/images/theme-decor/theme3.webp" alt="">
      </div>

      <h4>Frozen Elsa Theme Birthday Decoration</h4>

      <div class="price-row">
        <span class="price">₹5299</span>
        <span class="strike">₹6999</span>
      </div>

      <div class="rating">
        ⭐ 4.8
      </div>

       <div class="card-actions">
  <a href="/public/cart.php" class="cart-btn" title="Add to Cart">
    🛒
  </a>
  <button class="book-btn">Book Now</button>
    </div>
</div>

     <!-- CARD 4 -->
    <div class="product-card">
      <div class="card-img">
        <span class="discount">18% OFF</span>
        <span class="wishlist">♡</span>
        <img src="../assets/images/theme-decor/theme4.jpg" alt="">
      </div>

      <h4>Princess Theme Balloon Decoration</h4>

      <div class="price-row">
        <span class="price">₹5299</span>
        <span class="strike">₹6999</span>
      </div>

      <div class="rating">
        ⭐ 4.8
      </div>

       <div class="card-actions">
  <a href="/public/cart.php" class="cart-btn" title="Add to Cart">
    🛒
  </a>
  <button class="book-btn">Book Now</button>
    </div>
</div>

     <!-- CARD 5 -->
    <div class="product-card">
      <div class="card-img">
        <span class="discount">35% OFF</span>
        <span class="wishlist">♡</span>
        <img src="../assets/images/theme-decor/theme5.jpg" alt="">
      </div>

      <h4>Superhero Theme Birthday Decoration</h4>

      <div class="price-row">
        <span class="price">₹6499</span>
        <span class="strike">₹8999</span>
      </div>

      <div class="rating">
        ⭐ 4.9
      </div>

       <div class="card-actions">
  <a href="/public/cart.php" class="cart-btn" title="Add to Cart">
    🛒
  </a>
  <button class="book-btn">Book Now</button>
    </div>
</div>

     <!-- CARD 6 -->
    <div class="product-card">
      <div class="card-img">
        <span class="discount">28% OFF</span>
        <span class="wishlist">♡</span>
        <img src="../assets/images/theme-decor/theme6.webp" alt="">
      </div>

      <h4>Mermaid Theme Birthday Decoration</h4>

      <div class="price-row">
        <span class="price">₹5899</span>
        <span class="strike">₹7999</span>
      </div>

      <div class="rating">
        ⭐ 4.8
      </div>

      <div class="card-actions">
  <a href="/public/cart.php" class="cart-btn" title="Add to Cart">
    🛒
  </a>
  <button class="book-btn">Book Now</button>
    </div>
 </div>

     <!-- CARD 7 -->
    <div class="product-card">
      <div class="card-img">
        <span class="discount">25% OFF</span>
        <span class="wishlist">♡</span>
        <img src="../assets/images/theme-decor/theme7.jpg" alt="">
      </div>

      <h4>Jungle Safari Theme Birthday Decoration</h4>

      <div class="price-row">
        <span class="price">₹6199</span>
        <span class="strike">₹8499</span>
      </div>

      <div class="rating">
        ⭐ 4.9
      </div>

      <div class="card-actions">
  <a href="/public/cart.php" class="cart-btn" title="Add to Cart">
    🛒
  </a>
  <button class="book-btn">Book Now</button>
    </div>
</div>


    <!-- ADD MORE CARDS SAME WAY -->

  </div>
</section>
<!-- ================= END PRODUCT SECTION ================= -->

<?php include "../includes/footer.php"; ?>



