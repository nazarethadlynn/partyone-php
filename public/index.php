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
    <a href="view-all.php" class="view-all-btn">View All</a>
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
  <a href="/PARTYONE-PHP/public/book-now.php" class="book-btn">
  Book Now
</a>
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
  <a href="/PARTYONE-PHP/public/book-now.php" class="book-btn">
  Book Now
</a>
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
   <a href="/PARTYONE-PHP/public/book-now.php" class="book-btn">
  Book Now
</a>
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
    <a href="view-all.php" class="view-all-btn">View All</a>
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

<!-- ================= REQUEST CALLBACK SECTION ================= -->
<section class="request-callback">

  <h2>Request Callback</h2>
  <p class="callback-subtitle">
    Please fill your details, we will get back to you shortly
  </p>

  <form class="callback-form" id="callbackForm">

    <div class="form-group">
      <label>Name</label>
      <input type="text" name="name" placeholder="Your Name" required>
    </div>

    <div class="form-group">
      <label>Phone Number</label>
      <input type="tel" name="phone" placeholder="+91" required>
    </div>

    <div class="form-group select-wrap">
      <label>Location (Optional)</label>
      <select name="location">
        <option value="">Select Location</option>
        <option>Bangalore</option>
        <option>Mumbai</option>
        <option>Chennai</option>
        <option>Hyderabad</option>
      </select>

      <svg class="select-icon" viewBox="0 0 24 24">
        <path d="M6 9l6 6 6-6" />
      </svg>
    </div>

    <div class="form-row">

      <!-- DATE -->
      <div class="form-group icon-wrap">
        <label>Party Date (Optional)</label>
        <input type="date" name="date">
        <svg class="input-icon" viewBox="0 0 24 24">
          <rect x="3" y="4" width="18" height="18" rx="2"/>
          <line x1="3" y1="10" x2="21" y2="10"/>
        </svg>
      </div>

      <!-- TIME -->
      <div class="form-group icon-wrap">
        <label>Party Time (Optional)</label>
        <input type="time" name="time">
        <svg class="input-icon" viewBox="0 0 24 24">
          <circle cx="12" cy="12" r="9"/>
          <line x1="12" y1="7" x2="12" y2="12"/>
          <line x1="12" y1="12" x2="15" y2="14"/>
        </svg>
      </div>

    </div>

    <button type="submit" class="callback-btn">Submit</button>

  </form>

</section>
<!-- ================= END REQUEST CALLBACK ================= -->
<!-- ================= LOVED BY CLIENTS ================= -->
<section class="loved-clients">

  <h2>Loved by clients</h2>
  <p class="clients-subtitle">
    At Impact, our client's success stories are our greatest achievement.
    Hear what our partners have to say.
  </p>

  <div class="testimonial-wrapper">
    <div class="testimonial-track">

      <!-- ORIGINAL SET -->
      <div class="testimonial-card">
        <div class="stars">★★★★★</div>
        <p>
          They're a true partner in our growth. Their work has been instrumental
          in helping us reach new heights.
        </p>
        <div class="client-info">
          <img src="../assets/images/feedback/user1.webp" alt="">
          <div>
            <strong>Ryan Martinez</strong>
            <span>EchoWave Tech</span>
          </div>
        </div>
      </div>

      <div class="testimonial-card">
        <div class="stars">★★★★★</div>
        <p>
          Their team took the time to truly understand our vision and delivered
          beyond expectations and delivered everything on time.
        </p>
        <div class="client-info">
          <img src="../assets/images/feedback/user2.jpg" alt="">
          <div>
            <strong>Michael Reynolds</strong>
            <span>Urban Threads</span>
          </div>
        </div>
      </div>

      <div class="testimonial-card">
        <div class="stars">★★★★★</div>
        <p>
          Impact brought our ideas to life in ways we never imagined.
          Their attention to detail made our project a success.
        </p>
        <div class="client-info">
          <img src="../assets/images/feedback/user3.webp" alt="">
          <div>
            <strong>David Lawson</strong>
            <span>GreenLeaf</span>
          </div>
        </div>
      </div>

      <div class="testimonial-card">
        <div class="stars">★★★★★</div>
        <p>
          Impact brought our ideas to life in ways we never imagined.
          Their attention to detail made our project a success.
        </p>
        <div class="client-info">
          <img src="../assets/images/feedback/user4.webp" alt="">
          <div>
            <strong>David Lawson</strong>
            <span>GreenLeaf</span>
          </div>
        </div>
      </div>

      <!-- DUPLICATED SET -->
      <div class="testimonial-card">
        <div class="stars">★★★★★</div>
        <p>
          They're a true partner in our growth. Their work has been instrumental
          in helping us reach new heights.
        </p>
        <div class="client-info">
          <img src="../assets/images/feedback/user1.webp" alt="">
          <div>
            <strong>Ryan Martinez</strong>
            <span>EchoWave Tech</span>
          </div>
        </div>
      </div>

      <div class="testimonial-card">
        <div class="stars">★★★★★</div>
        <p>
          Their team took the time to truly understand our vision and delivered
          beyond expectations and delivered everything on time.
        </p>
        <div class="client-info">
          <img src="../assets/images/feedback/user2.jpg" alt="">
          <div>
            <strong>Michael Reynolds</strong>
            <span>Urban Threads</span>
          </div>
        </div>
      </div>

      <div class="testimonial-card">
        <div class="stars">★★★★★</div>
        <p>
          Impact brought our ideas to life in ways we never imagined.
          Their attention to detail made our project a success.
        </p>
        <div class="client-info">
          <img src="../assets/images/feedback/user3.webp" alt="">
          <div>
            <strong>David Lawson</strong>
            <span>GreenLeaf</span>
          </div>
        </div>
      </div>

      <div class="testimonial-card">
        <div class="stars">★★★★★</div>
        <p>
          Impact brought our ideas to life in ways we never imagined.
          Their attention to detail made our project a success.
        </p>
        <div class="client-info">
          <img src="../assets/images/feedback/user4.webp" alt="">
          <div>
            <strong>David Lawson</strong>
            <span>GreenLeaf</span>
          </div>
        </div>
      </div>

    </div>
  </div>
<!-- READ MORE CONTENT -->
<div class="clients-readmore">

  <div class="readmore-text collapsed" id="readMoreText">
    <p>
      Celebrations are the essence of life. PartyOne would like to join you in your celebrations by presenting you an unbelievable range of Party Decorations in Bangalore, Theme decors, Party entertainers, Party planners, Eateries like Popcorn stall, Ice Gola, Party Essentials and many more. The 10 most popular PartyOne birthday party theme decorations are Disney Mickey Mouse, Chhota Bheem, Disney Cars & Spiderman for Boys, Disney Minnie Mouse, Barbie, Crown & Disney Princess for Girls and The Jungle theme & The Smiley theme for both boys and girls as neutral themes.
    </p>

    <p>
      Birthday parties have evolved leaps and bounds with entertainment playing a pivotal role in the party planning process. The most popular party artists in demand at PartyOne include Magicians, Tattoo artists, Caricature artists, Puppet show artists, Mascots, Balloon modelling, Game show hosts, Face Painting experts, Theme decorators, Party organisers and Event Managers.
    </p>

    <p>
      Bangalore, also known as Bengaluru, is the Silicon Valley of India. From Lalbagh Botanical Garden to Cubbon Park, the city balances rapid innovation with lush greenery, making it one of the most vibrant cities in the country.
    </p>

    <p>
      Bangalore is also a global education hub with institutions like IISc and IIM Bangalore. Its rich culture, food scene, festivals, and entrepreneurial spirit make it a city full of life and celebration.
    </p>
  </div>

  <button class="read-toggle" onclick="toggleReadMore()" id="readToggle">
    Read More >>
  </button>

</div>

</section>
<!-- ================= END LOVED BY CLIENTS ================= -->

<!-- ================= DISCOVERY LINKS SECTION ================= -->
<section class="discovery-links">

  <div class="discovery-container">

    <div class="discovery-block">
      <h3>Most Loved Services in Bangalore</h3>
      <p>
        <a href="/products/kids-activities">All Kids Activities</a> |
        <a href="/products/party-artists">Fun Party Artists</a> |
        <a href="/products/balloon-decorations">Balloon Decorations</a> |
        <a href="/products/theme-decor">Theme Decor</a> |
        <a href="/products/fun-entertainers">Fun Entertainers</a> |
        <a href="/products/tattoo">Tattoo</a> |
        <a href="/products/photography">Photography</a> |
        <a href="/products/magicians">Magicians</a> |
        <a href="/products/kids-play-rentals">Kids Play Rentals</a> |
        <a href="/products/game-host">Game Host</a> |
        <a href="/products/balloon-sculptor">Balloon Sculptor</a> |
        <a href="/products/live-characters">Live Cartoon Characters</a> |
        <a href="/products/eateries">Live Eateries</a> |
        <a href="/products/caricature">Caricature</a> |
        <a href="/products/mascot">Mascot</a>
      </p>
    </div>

    <div class="discovery-block">
      <h3>PartyOne Services in Other Cities</h3>
      <p>
        <a href="/city/chennai">Chennai</a> |
        <a href="/city/hyderabad">Hyderabad</a> |
        <a href="/city/mumbai">Mumbai</a> |
        <a href="/city/pune">Pune</a> |
        <a href="/city/kolkata">Kolkata</a> |
        <a href="/city/delhi">Delhi</a> |
        <a href="/city/ahmedabad">Ahmedabad</a> |
        <a href="/city/thane">Thane</a> |
        <a href="/city/gurgaon">Gurgaon</a> |
        <a href="/city/noida">Noida</a> |
        <a href="/city/coimbatore">Coimbatore</a> |
        <a href="/city/lucknow">Lucknow</a> |
        <a href="/city/faridabad">Faridabad</a> |
        <a href="/city/ghaziabad">Ghaziabad</a> |
        <a href="/city/erode">Erode</a>
      </p>
    </div>

    <div class="discovery-block">
      <h3>Top Category in Bangalore</h3>
      <p>
        <a href="/category/birthday">Birthday</a> |
        <a href="/category/wedding">Wedding Services</a> |
        <a href="/category/house-warming">House Warming Services</a> |
        <a href="/category/surprises">Surprises</a> |
        <a href="/category/festival">Festival Decorations</a> |
        <a href="/category/decorations">Decorations</a> |
        <a href="/category/candlelight">Candlelight Dinners</a> |
        <a href="/category/private-theater">Private Theater Celebration</a> |
        <a href="/category/corporate">Corporate Planner</a>
      </p>
    </div>

    <div class="discovery-block">
      <h3>Recently Added Products in Bangalore</h3>
      <p>
        <a href="/product/romantic-dinner">Romantic Dinner Date at Hakuna Matata</a> |
        <a href="/product/special-candlelight">Special Candlelight Dinner</a> |
        <a href="/product/kids-storytelling">Kids Live Storytelling</a> |
        <a href="/product/independence-day-society">Housing Society Independence Day Decoration</a> |
        <a href="/product/tricolour-decor">Tricolour Independence Day Bay Decoration</a>
      </p>
    </div>

    <div class="discovery-block">
      <h3>Top Decoration Categories in Bangalore</h3>
      <p>
        <a href="/decor/flower">Flower Decoration</a> |
        <a href="/decor/welcome-baby">Welcome Baby Decorations</a> |
        <a href="/decor/anniversary">Anniversary Decorations</a> |
        <a href="/decor/retirement">Retirement Decoration</a> |
        <a href="/decor/bachelorette">Bachelorette Decorations</a> |
        <a href="/decor/room">Room Decorations</a> |
        <a href="/decor/naming-ceremony">Naming Ceremony Decorations</a> |
        <a href="/decor/surprise">Surprise Decorations</a> |
        <a href="/decor/car-boot">Car Boot Decorations</a>
      </p>
    </div>

    <div class="discovery-block">
      <h3>Candlelight Dinner & Private Theater Categories in Bangalore</h3>
      <p>
        <a href="/candlelight/all">All Candlelight Dinners</a> |
        <a href="/candlelight/poolside">Poolside Dinners</a> |
        <a href="/candlelight/restaurant">Restaurant Dinners</a> |
        <a href="/candlelight/couple-movie">Couple Movie Experiences</a> |
        <a href="/candlelight/friends-family">Friends & Family Shows</a>
      </p>
    </div>

  </div>

</section>
<!-- ================= END DISCOVERY LINKS SECTION ================= -->

<!-- CITY POPUP (INDEX ONLY) -->
<div id="cityPopup" class="popup-overlay">
  <div class="popup-box">
    <div class="popup-header">
      <h2>SELECT YOUR CITY</h2>
      <span class="close-btn" onclick="closeCityPopup()">✕</span>
    </div>

    <div class="city-grid">
      <button onclick="setCity('Bangalore')">Bangalore</button>
      <button onclick="setCity('Mumbai')">Mumbai</button>
      <button onclick="setCity('Chennai')">Chennai</button>
      <button onclick="setCity('Hyderabad')">Hyderabad</button>
      <button onclick="setCity('Delhi')">Delhi</button>
      <button onclick="setCity('Ahmedabad')">Ahmedabad</button>
      <button onclick="setCity('Pune')">Pune</button>
      <button onclick="setCity('Kolkata')">Kolkata</button>
      <button onclick="setCity('Jaipur')">Jaipur</button>
      <button onclick="setCity('Mangalore')">Mangalore</button>
      <button onclick="setCity('Mysore')">Mysore</button>
      <button onclick="setCity('Noida')">Noida</button>
      <button onclick="setCity('Gurgaon')">Gurgaon</button>
      <button onclick="setCity('Lucknow')">Lucknow</button>
    </div>
  </div>
</div>

<script src="../assets/js/city-popup.js"></script>



<?php include "../includes/footer.php"; ?>



