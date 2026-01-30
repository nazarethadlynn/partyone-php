<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
include '../includes/header.php';
?>

<style>
/* ================= PAGE BASE ================= */
.kids-wrap {
  padding: 36px 32px 60px;
  background: #fff;
}

.kids-heading {
  font-size: 30px;
  font-weight: 700;
  margin-bottom: 6px;
}

.kids-sub {
  font-size: 15px;
  color: #6b7280;
  margin-bottom: 30px;
}

/* ================= FILTER SECTION ================= */
.filters-box {
  background: #f9fafb;
  border: 1px solid #e5e7eb;
  border-radius: 18px;
  padding: 20px 22px;
  margin-bottom: 34px;

  display: flex;
  align-items: center;
  gap: 28px;
  flex-wrap: wrap;
}

/* EACH FILTER ROW IN ONE LINE */
.filter-row {
  display: flex;
  align-items: center;
  gap: 12px;
  flex-wrap: wrap;
  margin-bottom: 0;
}

/* ⭐ PUSH ACTIVITY TYPE TO RIGHT */
#typeFilters {
  margin-left: auto;
}

/* LABEL INLINE */
.filter-label {
  width: auto;
  font-size: 14px;
  font-weight: 600;
  color: #374151;
  margin-right: 6px;
  white-space: nowrap;
}

/* FILTER PILL */
.filter-pill {
  padding: 8px 16px;
  border-radius: 999px;
  border: 1.5px solid #d1d5db;
  background: #fff;
  font-size: 14px;
  font-weight: 600;
  cursor: pointer;
  transition: .25s ease;
  white-space: nowrap;
}

.filter-pill:hover {
  border-color: #e11d48;
  color: #e11d48;
}

.filter-pill.active {
  background: #e11d48;
  border-color: #e11d48;
  color: #fff;
}

/* ================= PRODUCTS ================= */
.products-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
  gap: 26px;
}

.product {
  border: 1px solid #e5e7eb;
  border-radius: 18px;
  overflow: hidden;
  background: #fff;
  transition: .25s ease;
}

.product:hover {
  transform: translateY(-6px);
  box-shadow: 0 18px 40px rgba(0,0,0,.08);
}

.product img {
  width: 100%;
  height: 180px;
  object-fit: cover;
  background: #f3f4f6;
}

.product-body {
  padding: 16px;
}

.product-title {
  font-size: 16px;
  font-weight: 700;
  margin-bottom: 6px;
}

.product-desc {
  font-size: 13px;
  color: #6b7280;
  margin-bottom: 10px;
}

.product-price {
  font-size: 18px;
  font-weight: 700;
  margin-bottom: 14px;
}

.product-body a {
  display: inline-block;
  padding: 10px 18px;
  background: #e11d48;
  color: #fff;
  border-radius: 999px;
  font-size: 13px;
  font-weight: 700;
  text-decoration: none;
}

/* ================= MOBILE ================= */
@media (max-width: 768px) {
  .filters-box {
    flex-direction: column;
    align-items: flex-start;
    gap: 18px;
  }

  #typeFilters {
    margin-left: 0;
  }
}








/* ================= IMAGE-STYLE PRODUCT CARDS ================= */

.product {
  background: #fff;
  border-radius: 22px;
  box-shadow: 0 10px 30px rgba(0,0,0,.08);
  overflow: hidden;
  display: flex;
  flex-direction: column;
  transition: .25s ease;
}

.product:hover {
  transform: translateY(-6px);
  box-shadow: 0 18px 45px rgba(0,0,0,.12);
}

/* IMAGE */
.product-img {
  position: relative;
  height: 220px;
}

.product-img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

/* HEART */
.product-wishlist {
  position: absolute;
  top: 14px;
  left: 14px;
  width: 36px;
  height: 36px;
  background: #fff;
  border-radius: 50%;
  display: grid;
  place-items: center;
  font-size: 16px;
  color: #9ca3af;
  box-shadow: 0 4px 10px rgba(0,0,0,.15);
}

/* DISCOUNT */
.product-badge {
  position: absolute;
  top: 14px;
  right: 14px;
  background: #e11d48;
  color: #fff;
  font-size: 12px;
  font-weight: 700;
  padding: 6px 10px;
  border-radius: 999px;
}

/* BODY */
.product-body {
  padding: 14px 16px 16px;
  display: flex;
  flex-direction: column;
  gap: 8px;
}

/* TITLE */
.product-title {
  font-size: 15px;
  font-weight: 700;
  color: #111827;
  line-height: 1.3;
}

/* PRICE */
.product-price-row {
  display: flex;
  align-items: center;
  gap: 8px;
}

.product-price {
  font-size: 18px;
  font-weight: 700;
}

.product-old-price {
  font-size: 14px;
  color: #9ca3af;
  text-decoration: line-through;
}

/* RATING */
.product-rating {
  display: flex;
  align-items: center;
  gap: 6px;
  font-size: 14px;
  color: #f59e0b;
  font-weight: 600;
}

/* FOOTER */
.product-footer {
  margin-top: auto;
  display: flex;
  align-items: center;
  gap: 12px;
}

/* CART ICON */
.product-cart {
  width: 44px;
  height: 44px;
  border-radius: 50%;
  background: #f3f4f6;
  display: grid;
  place-items: center;
  font-size: 18px;
  color: #6b7280;
}

/* CTA */
.product-footer a {
  flex: 1;
  text-align: center;
  background: #e11d48;
  color: #fff;
  padding: 12px 0;
  border-radius: 999px;
  font-size: 14px;
  font-weight: 700;
  text-decoration: none;
}


















/* ================= KIDS BANNER (FIXED IMAGE ALIGNMENT) ================= */
.kids-banner {
  position: relative;
  height: 260px;
  border-radius: 22px;
  overflow: hidden;
  margin-bottom: 32px;
  background: #000;
}

/* IMAGE – FULL WIDTH, NO EMPTY SPACE */
.kids-banner-img {
  position: absolute;
  inset: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;        /* 🔑 fills entire grid */
  object-position: center;  /* keeps subject centered */
  display: block;
}



/* MOBILE */
@media (max-width: 768px) {
  .kids-banner {
    height: 200px;
  }

  .kids-banner-content {
    left: 20px;
  }

  .kids-banner-content h1 {
    font-size: 26px;
  }

  .kids-banner-content p {
    font-size: 15px;
  }
}



/* ================= MODERN FILTER BAR ================= */
.modern-filters {
  background: #ffffff;
  border: 1px solid #e5e7eb;
  border-radius: 22px;
  padding: 18px 22px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 24px;
  flex-wrap: wrap;
}

.modern-filters .filter-row {
  display: flex;
  align-items: center;
  gap: 12px;
  flex-wrap: wrap;
}

.modern-filters .filter-label {
  font-size: 14px;
  font-weight: 700;
  color: #111827;
  margin-right: 8px;
}

/* Pills refined */
.modern-filters .filter-pill {
  padding: 10px 18px;
  border-radius: 999px;
  border: 1.5px solid #d1d5db;
  background: #fff;
  font-size: 14px;
  font-weight: 600;
  cursor: pointer;
  transition: all .25s ease;
}

.modern-filters .filter-pill.active {
  background: #e11d48;
  border-color: #e11d48;
  color: #fff;
}

.modern-filters .filter-pill:hover {
  border-color: #e11d48;
  color: #e11d48;
}

/* Mobile stack */
@media (max-width: 900px) {
  .modern-filters {
    flex-direction: column;
    align-items: flex-start;
  }
}














/* ================= CATEGORY FILTER CARDS (IMAGE STYLE) ================= */
.category-cards {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 26px;
  margin-bottom: 40px;
}

.category-card {
  position: relative;
  height: 220px;
  border-radius: 22px;
  overflow: hidden;
  cursor: pointer;
  transition: .25s ease;
}

.category-card img {
  position: absolute;
  inset: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.category-card::after {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    to top,
    rgba(0,0,0,.65),
    rgba(0,0,0,.1)
  );
}

.category-card span {
  position: absolute;
  left: 20px;
  bottom: 18px;
  z-index: 2;
  color: #fff;
  font-size: 20px;
  font-weight: 800;
}

.category-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 18px 40px rgba(0,0,0,.35);
}

/* MOBILE */
@media (max-width: 900px) {
  .category-cards {
    grid-template-columns: repeat(2, 1fr);
  }
}


</style>

<div class="kids-wrap">




<div class="kids-banner">
  <img
    src="../assets/images/kids/banner/Kids-Activity-Page.jpg"
    alt="Kids Party Activities"
    class="kids-banner-img"
  />


</div>


<div class="category-cards">

  <div class="category-card" data-type="eatables">
    <img src="../assets/images/kids/categories/food-stalls.jpg" />
    <span>Live Food Stalls</span>
  </div>

  <div class="category-card" data-type="magic">
    <img src="../assets/images/kids/categories/cartoon-characters.webp" />
    <span>Live Cartoon Characters</span>
  </div>

  <div class="category-card" data-type="magic">
    <img src="../assets/images/kids/categories/eatbles.jpg" />
    <span>Eatables</span>
  </div>

  <div class="category-card" data-type="games">
    <img src="../assets/images/kids/categories/games.webp" />
    <span>Arcade Games</span>
  </div>

</div>



<div class="filters-box modern-filters">

  <!-- BUDGET -->
  <div class="filter-row" id="priceFilters">
    <span class="filter-label">Filter by Budget</span>

    <button class="filter-pill active" data-price="">All</button>
    <button class="filter-pill" data-price="low">Below ₹2999</button>
    <button class="filter-pill" data-price="mid">₹3000 – 6999</button>
    <button class="filter-pill" data-price="high">₹7000 Above</button>
  </div>

  <!-- TYPE -->
  <div class="filter-row" id="typeFilters">
    <span class="filter-label">Filter by Activity Type</span>

    <button class="filter-pill active" data-type="">All</button>
    <button class="filter-pill" data-type="games">Games</button>
    <button class="filter-pill" data-type="magic">Magic Show</button>
    <button class="filter-pill" data-type="decor">Decorations</button>
    <button class="filter-pill" data-type="eatables">Eatables</button>
  </div>

</div>



<div class="products-grid">

  <!-- ================= MAGIC SHOW ================= -->

  <div class="product" data-price="mid" data-type="magic">
    <div class="product-img">
      <img src="../assets/images/kids/magicshow/princess-anna.webp">
      <div class="product-wishlist">♡</div>
      <div class="product-badge">22% OFF</div>
    </div>
    <div class="product-body">
      <div class="product-title">Princess Anna Cartoon Mascot</div>
      <div class="product-price-row">
        <div class="product-price">₹3,499</div>
        <div class="product-old-price">₹4,499</div>
      </div>
      <div class="product-rating">⭐ 4.9</div>
      <div class="product-footer">
        <div class="product-cart">🛒</div>
        <a href="book-now.php">Book Now</a>
      </div>
    </div>
  </div>

  <div class="product" data-price="low" data-type="magic">
    <div class="product-img">
      <img src="../assets/images/kids/magicshow/elsa.webp">
      <div class="product-wishlist">♡</div>
      <div class="product-badge">25% OFF</div>
    </div>
    <div class="product-body">
      <div class="product-title">Frozen Princess Elsa Mascot</div>
      <div class="product-price-row">
        <div class="product-price">₹2,999</div>
        <div class="product-old-price">₹3,999</div>
      </div>
      <div class="product-rating">⭐ 5.0</div>
      <div class="product-footer">
        <div class="product-cart">🛒</div>
        <a href="book-now.php">Book Now</a>
      </div>
    </div>
  </div>

  <div class="product" data-price="high" data-type="magic">
    <div class="product-img">
      <img src="../assets/images/kids/magicshow/motu-patlu.jpeg">
      <div class="product-wishlist">♡</div>
      <div class="product-badge">22% OFF</div>
    </div>
    <div class="product-body">
      <div class="product-title">Motu Patlu Mascot</div>
      <div class="product-price-row">
        <div class="product-price">₹6,999</div>
        <div class="product-old-price">₹8,999</div>
      </div>
      <div class="product-rating">⭐ 4.9</div>
      <div class="product-footer">
        <div class="product-cart">🛒</div>
        <a href="book-now.php">Book Now</a>
      </div>
    </div>
  </div>

  <div class="product" data-price="mid" data-type="magic">
    <div class="product-img">
      <img src="../assets/images/kids/magicshow/clown.webp">
      <div class="product-wishlist">♡</div>
      <div class="product-badge">20% OFF</div>
    </div>
    <div class="product-body">
      <div class="product-title">Dwarf Clown Performance</div>
      <div class="product-price-row">
        <div class="product-price">₹3,999</div>
        <div class="product-old-price">₹4,999</div>
      </div>
      <div class="product-rating">⭐ 4.8</div>
      <div class="product-footer">
        <div class="product-cart">🛒</div>
        <a href="book-now.php">Book Now</a>
      </div>
    </div>
  </div>

  <div class="product" data-price="high" data-type="magic">
    <div class="product-img">
      <img src="../assets/images/kids/magicshow/anchor.jpg">
      <div class="product-wishlist">♡</div>
      <div class="product-badge">29% OFF</div>
    </div>
    <div class="product-body">
      <div class="product-title">Kids Party Anchoring</div>
      <div class="product-price-row">
        <div class="product-price">₹4,999</div>
        <div class="product-old-price">₹6,999</div>
      </div>
      <div class="product-rating">⭐ 4.9</div>
      <div class="product-footer">
        <div class="product-cart">🛒</div>
        <a href="book-now.php">Book Now</a>
      </div>
    </div>
  </div>

  <!-- ================= GAMES ================= -->

  <div class="product" data-price="high" data-type="games">
    <div class="product-img">
      <img src="../assets/images/kids/games/mickey-bouncy.webp">
      <div class="product-wishlist">♡</div>
      <div class="product-badge">21% OFF</div>
    </div>
    <div class="product-body">
      <div class="product-title">Mickey Mouse Bouncy Castle</div>
      <div class="product-price-row">
        <div class="product-price">₹5,499</div>
        <div class="product-old-price">₹6,999</div>
      </div>
      <div class="product-rating">⭐ 4.9</div>
      <div class="product-footer">
        <div class="product-cart">🛒</div>
        <a href="book-now.php">Book Now</a>
      </div>
    </div>
  </div>

  <div class="product" data-price="mid" data-type="games">
    <div class="product-img">
      <img src="../assets/images/kids/games/jenga.jpg">
      <div class="product-wishlist">♡</div>
      <div class="product-badge">22% OFF</div>
    </div>
    <div class="product-body">
      <div class="product-title">Giant Jenga Game</div>
      <div class="product-price-row">
        <div class="product-price">₹3,499</div>
        <div class="product-old-price">₹4,499</div>
      </div>
      <div class="product-rating">⭐ 4.8</div>
      <div class="product-footer">
        <div class="product-cart">🛒</div>
        <a href="book-now.php">Book Now</a>
      </div>
    </div>
  </div>

  <div class="product" data-price="mid" data-type="games">
    <div class="product-img">
      <img src="../assets/images/kids/games/sling-puck.jpg">
      <div class="product-wishlist">♡</div>
      <div class="product-badge">21% OFF</div>
    </div>
    <div class="product-body">
      <div class="product-title">Sling Puck Game Board</div>
      <div class="product-price-row">
        <div class="product-price">₹5,499</div>
        <div class="product-old-price">₹6,999</div>
      </div>
      <div class="product-rating">⭐ 4.7</div>
      <div class="product-footer">
        <div class="product-cart">🛒</div>
        <a href="book-now.php">Book Now</a>
      </div>
    </div>
  </div>

  <div class="product" data-price="low" data-type="games">
    <div class="product-img">
      <img src="../assets/images/kids/games/ring-toss.webp">
      <div class="product-wishlist">♡</div>
      <div class="product-badge">18% OFF</div>
    </div>
    <div class="product-body">
      <div class="product-title">Ring Toss Game</div>
      <div class="product-price-row">
        <div class="product-price">₹2,499</div>
        <div class="product-old-price">₹2,999</div>
      </div>
      <div class="product-rating">⭐ 4.6</div>
      <div class="product-footer">
        <div class="product-cart">🛒</div>
        <a href="book-now.php">Book Now</a>
      </div>
    </div>
  </div>

  <div class="product" data-price="low" data-type="games">
    <div class="product-img">
      <img src="../assets/images/kids/games/mini-bowling.jpg">
      <div class="product-wishlist">♡</div>
      <div class="product-badge">15% OFF</div>
    </div>
    <div class="product-body">
      <div class="product-title">Mini Bowling Setup</div>
      <div class="product-price-row">
        <div class="product-price">₹2,999</div>
        <div class="product-old-price">₹3,499</div>
      </div>
      <div class="product-rating">⭐ 4.7</div>
      <div class="product-footer">
        <div class="product-cart">🛒</div>
        <a href="book-now.php">Book Now</a>
      </div>
    </div>
  </div>

  <!-- ================= DECORATIONS ================= -->

  <div class="product" data-price="high" data-type="decor">
    <div class="product-img">
      <img src="../assets/images/kids/decorations/theme-decor.jpg">
      <div class="product-wishlist">♡</div>
      <div class="product-badge">25% OFF</div>
    </div>
    <div class="product-body">
      <div class="product-title">Theme Decoration</div>
      <div class="product-price-row">
        <div class="product-price">₹6,499</div>
        <div class="product-old-price">₹8,499</div>
      </div>
      <div class="product-rating">⭐ 4.9</div>
      <div class="product-footer">
        <div class="product-cart">🛒</div>
        <a href="book-now.php">Book Now</a>
      </div>
    </div>
  </div>

  <div class="product" data-price="mid" data-type="decor">
    <div class="product-img">
      <img src="../assets/images/kids/decorations/balloon-arch.webp">
      <div class="product-wishlist">♡</div>
      <div class="product-badge">20% OFF</div>
    </div>
    <div class="product-body">
      <div class="product-title">Balloon Arch Decoration</div>
      <div class="product-price-row">
        <div class="product-price">₹3,999</div>
        <div class="product-old-price">₹4,999</div>
      </div>
      <div class="product-rating">⭐ 4.8</div>
      <div class="product-footer">
        <div class="product-cart">🛒</div>
        <a href="book-now.php">Book Now</a>
      </div>
    </div>
  </div>

  <div class="product" data-price="mid" data-type="decor">
    <div class="product-img">
      <img src="../assets/images/kids/decorations/backdrop.jpg">
      <div class="product-wishlist">♡</div>
      <div class="product-badge">18% OFF</div>
    </div>
    <div class="product-body">
      <div class="product-title">Birthday Backdrop Setup</div>
      <div class="product-price-row">
        <div class="product-price">₹4,499</div>
        <div class="product-old-price">₹5,499</div>
      </div>
      <div class="product-rating">⭐ 4.8</div>
      <div class="product-footer">
        <div class="product-cart">🛒</div>
        <a href="book-now.php">Book Now</a>
      </div>
    </div>
  </div>

  <div class="product" data-price="low" data-type="decor">
    <div class="product-img">
      <img src="../assets/images/kids/decorations/table-decor.jpg">
      <div class="product-wishlist">♡</div>
      <div class="product-badge">15% OFF</div>
    </div>
    <div class="product-body">
      <div class="product-title">Kids Table Decoration</div>
      <div class="product-price-row">
        <div class="product-price">₹2,999</div>
        <div class="product-old-price">₹3,499</div>
      </div>
      <div class="product-rating">⭐ 4.6</div>
      <div class="product-footer">
        <div class="product-cart">🛒</div>
        <a href="book-now.php">Book Now</a>
      </div>
    </div>
  </div>

  <div class="product" data-price="high" data-type="decor">
    <div class="product-img">
      <img src="../assets/images/kids/decorations/balloon-ceiling.jpg">
      <div class="product-wishlist">♡</div>
      <div class="product-badge">30% OFF</div>
    </div>
    <div class="product-body">
      <div class="product-title">Balloon Ceiling Decoration</div>
      <div class="product-price-row">
        <div class="product-price">₹7,999</div>
        <div class="product-old-price">₹11,499</div>
      </div>
      <div class="product-rating">⭐ 4.9</div>
      <div class="product-footer">
        <div class="product-cart">🛒</div>
        <a href="book-now.php">Book Now</a>
      </div>
    </div>
  </div>

  <!-- ================= EATABLES ================= -->

  <div class="product" data-price="low" data-type="eatables">
    <div class="product-img">
      <img src="../assets/images/kids/eatables/popcorn.jpg">
      <div class="product-wishlist">♡</div>
      <div class="product-badge">10% OFF</div>
    </div>
    <div class="product-body">
      <div class="product-title">Popcorn Machine</div>
      <div class="product-price-row">
        <div class="product-price">₹1,999</div>
        <div class="product-old-price">₹2,199</div>
      </div>
      <div class="product-rating">⭐ 4.5</div>
      <div class="product-footer">
        <div class="product-cart">🛒</div>
        <a href="book-now.php">Book Now</a>
      </div>
    </div>
  </div>

  <div class="product" data-price="low" data-type="eatables">
    <div class="product-img">
      <img src="../assets/images/kids/eatables/candyfloss.jpg">
      <div class="product-wishlist">♡</div>
      <div class="product-badge">12% OFF</div>
    </div>
    <div class="product-body">
      <div class="product-title">Candy Floss Machine</div>
      <div class="product-price-row">
        <div class="product-price">₹2,499</div>
        <div class="product-old-price">₹2,799</div>
      </div>
      <div class="product-rating">⭐ 4.6</div>
      <div class="product-footer">
        <div class="product-cart">🛒</div>
        <a href="book-now.php">Book Now</a>
      </div>
    </div>
  </div>

  <div class="product" data-price="mid" data-type="eatables">
    <div class="product-img">
      <img src="../assets/images/kids/eatables/icecream.webp">
      <div class="product-wishlist">♡</div>
      <div class="product-badge">15% OFF</div>
    </div>
    <div class="product-body">
      <div class="product-title">Ice Cream Cart</div>
      <div class="product-price-row">
        <div class="product-price">₹3,999</div>
        <div class="product-old-price">₹4,699</div>
      </div>
      <div class="product-rating">⭐ 4.8</div>
      <div class="product-footer">
        <div class="product-cart">🛒</div>
        <a href="book-now.php">Book Now</a>
      </div>
    </div>
  </div>

  <div class="product" data-price="mid" data-type="eatables">
    <div class="product-img">
      <img src="../assets/images/kids/eatables/chocolate-fountain.jpg">
      <div class="product-wishlist">♡</div>
      <div class="product-badge">18% OFF</div>
    </div>
    <div class="product-body">
      <div class="product-title">Chocolate Fountain</div>
      <div class="product-price-row">
        <div class="product-price">₹4,999</div>
        <div class="product-old-price">₹5,999</div>
      </div>
      <div class="product-rating">⭐ 4.9</div>
      <div class="product-footer">
        <div class="product-cart">🛒</div>
        <a href="book-now.php">Book Now</a>
      </div>
    </div>
  </div>

  <div class="product" data-price="high" data-type="eatables">
    <div class="product-img">
      <img src="../assets/images/kids/eatables/food-stall.jpg">
      <div class="product-wishlist">♡</div>
      <div class="product-badge">20% OFF</div>
    </div>
    <div class="product-body">
      <div class="product-title">Kids Food Stall Setup</div>
      <div class="product-price-row">
        <div class="product-price">₹6,999</div>
        <div class="product-old-price">₹8,999</div>
      </div>
      <div class="product-rating">⭐ 4.9</div>
      <div class="product-footer">
        <div class="product-cart">🛒</div>
        <a href="book-now.php">Book Now</a>
      </div>
    </div>
  </div>

</div>








</div>

<script>
let activePrice = '';
let activeType = '';

// PRICE FILTER (ONLY ONE ACTIVE)
document.querySelectorAll('#priceFilters .filter-pill').forEach(btn => {
  btn.addEventListener('click', () => {
    document.querySelectorAll('#priceFilters .filter-pill')
      .forEach(b => b.classList.remove('active'));

    btn.classList.add('active');
    activePrice = btn.dataset.price || '';
    filterProducts();
  });
});

// TYPE FILTER (ONLY ONE ACTIVE)
document.querySelectorAll('#typeFilters .filter-pill').forEach(btn => {
  btn.addEventListener('click', () => {
    document.querySelectorAll('#typeFilters .filter-pill')
      .forEach(b => b.classList.remove('active'));

    btn.classList.add('active');
    activeType = btn.dataset.type || '';
    filterProducts();
  });
});

function filterProducts() {
  document.querySelectorAll('.product').forEach(card => {
    const priceMatch = !activePrice || card.dataset.price === activePrice;
    const typeMatch  = !activeType  || card.dataset.type === activeType;

    card.style.display = (priceMatch && typeMatch) ? 'block' : 'none';
  });
}















document.querySelectorAll('.category-card').forEach(card => {
  card.addEventListener('click', () => {
    const type = card.dataset.type;

    // Update filter pills visually
    document.querySelectorAll('#typeFilters .filter-pill')
      .forEach(btn => {
        btn.classList.toggle('active', btn.dataset.type === type);
      });

    activeType = type;
    filterProducts();

    // Smooth scroll to products
    document.querySelector('.products-grid')
      .scrollIntoView({ behavior: 'smooth' });
  });
});


</script>

<?php include '../includes/footer.php'; ?>
