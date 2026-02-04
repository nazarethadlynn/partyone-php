<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
include '../includes/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Kids Activities – PartyOne</title>

<style>
:root {
  --primary: #e11d48;
  --dark: #0f172a;
  --muted: #6b7280;
  --bg: #f8fafc;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: Inter, system-ui, sans-serif;
}

body {
  background: var(--bg);
  color: #111827;
}


/* ================= CLEAN IMAGE-ONLY BANNER ================= */
.kids-banner {
  height: 270px;

  /* 🔥 MATCH CONTENT WIDTH EXACTLY */
  margin: 32px 30px 0;   /* same as .section horizontal padding */

  border-radius: 22px;

  background-image: url("../assets/images/kids/banner/Kids-Activity-Page.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;

  overflow: hidden;
  position: relative;
}


/* ================= SECTION ================= */
.section {
  padding: 20px 30px;
  text-align: center; /* ✅ CENTER EVERYTHING INSIDE */
}

.section-title {
  font-size: 26px;
  font-weight: 800;
  margin-bottom: 4px;
}

.section-sub {
  color: var(--muted);
  margin-bottom: 12px;
}

/* ================= ACTIVITY CARDS ================= */
.cards {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 26px;
}

/* CARD BASE */
.card {
  background: #fff;
  border-radius: 18px;
  overflow: hidden;
  box-shadow: 0 10px 28px rgba(0,0,0,.08);
  transition: 
    transform 0.35s ease,
    box-shadow 0.35s ease;
  cursor: pointer;
}

/* HOVER EFFECT */
.card:hover {
  transform: translateY(-8px);
  box-shadow: 0 22px 48px rgba(0,0,0,.18);
}

/* IMAGE */
.card img {
  width: 100%;
  height: 200px;
  object-fit: cover;
  transition: transform 0.45s ease;
}

/* IMAGE ZOOM ON HOVER */
.card:hover img {
  transform: scale(1.06);
}

/* TEXT AREA — CENTERED */
.card-body {
  padding: 10px 14px;
  background: #fff;
  text-align: center;   /* ✅ CENTER TEXT */
}

/* TITLE */
.card-title h2 {
  font-size: 18px;
  font-weight: 700;
  margin: 0;            /* FIX EXTRA SPACE */
  line-height: 1.3;
  color: #111827;
}

/* OPTIONAL PRICE */
.card-price {
  font-size: 14px;
  color: var(--muted);
  margin-top: 4px;
}


/* ================= STATS ================= */
.stats {
  background: #0b1220;
  color: #fff;
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  padding: 40px 80px;
  text-align: center;
}

.stat h2 {
  font-size: 28px;
}

.stat p {
  color: #9ca3af;
  margin-top: 6px;
}

/* ================= FOOTER ================= */
.footer {
  background: #fff;
  padding: 60px 80px;
  display: grid;
  grid-template-columns: 2fr 1fr 1fr;
  gap: 40px;
  border-top: 1px solid #e5e7eb;
}

.footer h4 {
  margin-bottom: 12px;
}

.footer a {
  display: block;
  text-decoration: none;
  color: #374151;
  margin-bottom: 8px;
}














/* ================= BUDGET FILTER ================= */
.budget-filter-wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 14px;
  margin: 20px 0 30px;
  flex-wrap: wrap;
}

.budget-label {
  font-weight: 600;
  color: #111;
}

.budget-filters {
  display: flex;
  gap: 10px;
}

.budget-btn {
  padding: 10px 18px;
  border-radius: 999px;
  border: 1.5px solid #e5e7eb;
  background: #fff;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.25s ease;
}

.budget-btn:hover {
  background: #f3f4f6;
}

.budget-btn.active {
  background: #e11d48;
  color: #fff;
  border-color: #e11d48;
}








/* =========================================================
   ✅ PRODUCTS GRID — NO SCROLL, FULL STACK LAYOUT
   ========================================================= */

.products {
  display: grid;                     /* 🔥 GRID INSTEAD OF FLEX */
  grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
  gap: 22px;
  padding-bottom: 16px;

  overflow-x: hidden;                /* 🔥 REMOVE SCROLLBAR */
}

/* ---------- PRODUCT CARD ---------- */
.product {
  min-width: 260px;
  height: 420px;
  background: #fff;
  border-radius: 8px;
  box-shadow: 0 12px 26px rgba(0,0,0,0.08);
  overflow: hidden;
  scroll-snap-align: start;

  display: flex;
  flex-direction: column;
  padding-bottom: 14px;
}

/* Hover */
.product:hover {
  transform: translateY(-6px);
  box-shadow: 0 18px 36px rgba(0,0,0,0.14);
}

/* ---------- IMAGE ---------- */
.product-img {
  position: relative;
  height: 230px;
  margin: 14px;
  border-radius: 02px;
  overflow: hidden;
}

.product-img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 16px;
}

/* ---------- BADGE ---------- */
.product-badge {
  position: absolute;
  top: 12px;
  right: 12px;
  background: #e11d48;
  color: #fff;
  padding: 5px 10px;
  font-size: 12px;
  font-weight: 700;
  border-radius: 999px;
}


/* ---------- WISHLIST ICON ---------- */
.product-wishlist {
  position: absolute;
  top: 12px;
  left: 12px;

  width: 34px;
  height: 34px;
  border-radius: 50%;

  background: #ffffff;
  border: 1.5px solid #e5e7eb;

  display: grid;
  place-items: center;

  font-size: 18px;
  color: #6b7280;

  box-shadow: 0 6px 14px rgba(0,0,0,.12);
  cursor: pointer;

  transition: all 0.25s ease;
}

/* Hover (soft feedback) */
.product-wishlist:hover {
  transform: scale(1.08);
}

/* ❤️ ACTIVE (CLICKED) STATE */
.product-wishlist.active {
  background: #fde8ec;          /* soft pink */
  border-color: #f9b4c2;
  color: #e11d48;               /* red heart */
}


.product-cart {
  position: absolute;
  bottom: 12px;
  right: 12px;

  width: 44px;
  height: 44px;
  border-radius: 50%;

  background: #ffffff;
  border: 1.5px solid #e5e7eb;

  display: grid;
  place-items: center;

  font-size: 17px;
  color: #6b7280;

  box-shadow: 0 4px 10px rgba(0,0,0,0.08);
  cursor: pointer;

  transition: all 0.25s ease;
}

/* 🌸 SOFT PINK HOVER — EXACT LOOK */
.product-cart:hover {
  background: #fde8ec;                 /* soft blush pink */
  border-color: #f9b4c2;               /* subtle pink border */
  color: #e11d48;                      /* brand red/pink icon */
  box-shadow: 0 6px 14px rgba(225,29,72,0.18);
  transform: scale(1.06);
}


/* ---------- BODY ---------- */
.product-body {
  padding: 8px 16px 0;
  display: flex;
  flex-direction: column;
  flex-grow: 1;
  text-align: left;
}

/* ---------- 🔒 TITLE (LOCKED HEIGHT) ---------- */
.product-title {
  font-size: 15px;
  font-weight: 700;
  line-height: 1.35;
  margin: 6px 0 4px;

  /* 🔥 THIS IS THE KEY FIX */
  height: 40px;                 /* exactly 2 lines */
  overflow: hidden;

  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
}


/* ---------- PRICE ROW ---------- */
.product-price-row {
  display: flex;
  align-items: center;        /* 🔥 key */
  gap: 8px;
  margin-top: 2px;
}

.product-price {
  font-size: 16px;
  font-weight: 700;
  color: #111827;
}

.product-old-price {
  font-size: 13px;
  color: #9ca3af;
  text-decoration: line-through;
}

/* ---------- RATING ROW ---------- */
.product-rating {
  display: flex;              /* 🔥 SAME STRUCTURE */
  align-items: center;        /* 🔥 SAME ALIGNMENT */
  gap: 6px;
  margin-top: 6px;
}

.product-rating .star {
  font-size: 14px;
  color: #fbbf24;
  line-height: 1;
}

.product-rating .rating-value {
  font-size: 13px;
  font-weight: 600;
  color: #111827;
}

.product-rating .rating-count {
  font-size: 12.5px;
  color: #6b7280;
}

/* ---------- FOOTER (LOCKED BOTTOM) ---------- */
.product-footer {
  margin-top: auto;
  padding: 6px 15px 0;
}

/* ---------- BUTTON ---------- */
.book-btn {
  width: 100%;
  padding: 12px 0;
  border-radius: 12px;
  background: #e11d48;
  color: #fff;
  font-size: 15px;
  font-weight: 700;
  text-align: center;
  text-decoration: none;
}

.book-btn:hover {
  background: #c5163d;
}




















/* ================= CATEGORY TOGGLE BUTTON ================= */
.category-toggle {
  position: fixed;
  left: -16px;
  top: calc(var(--header-height) + 24px);

  z-index: 1300;

  display: flex;
  align-items: center;

  background: #ffffff;
  border-radius: 14px;
  padding: 12px 14px;

  box-shadow: 0 12px 30px rgba(0,0,0,0.18);
  cursor: pointer;

  transition: transform 0.25s ease, opacity 0.2s ease;
}

/* hide toggle when drawer open */
.category-toggle.hide {
  opacity: 0;
  pointer-events: none;
  transform: translateX(-12px);
}


/* ICON */
.category-toggle .hamburger {
  font-size: 20px;
  color: var(--primary);
  line-height: 1;
}

/* TEXT (hidden initially) */
.category-toggle .toggle-text {
  font-weight: 700;
  color: #374151;
  white-space: nowrap;

  max-width: 0;
  opacity: 0;
  margin-left: 0;

  transition: all 0.3s ease;
}

/* hover → reveal text */
.category-toggle:hover .toggle-text {
  max-width: 120px;
  opacity: 1;
  margin-left: 10px;
}


/* ================= CATEGORY DRAWER (LEFT SLIDE) ================= */
.category-drawer {
  position: fixed;
  left: -360px;                 /* hidden on left */
  top: var(--header-height);
  width: 360px;
  height: calc(100vh - var(--header-height));

  background: #ffffff;
  z-index: 1200;

  box-shadow: 12px 0 30px rgba(0,0,0,0.2);
  transition: left 0.35s ease;

  display: flex;
  flex-direction: column;
}

.category-drawer.open {
  left: 0;
}


/* HEADER */
.drawer-header {
  display: flex;
  justify-content: space-between;
  align-items: center;

  padding: 20px;
  border-bottom: 1px solid #e5e7eb;
}

.drawer-header h3 {
  font-size: 20px;
  font-weight: 800;
}

.close-btn {
  font-size: 22px;
  cursor: pointer;
  color: #6b7280;
}

/* LIST */
.drawer-list {
  list-style: none;
  padding: 12px 16px;
  overflow-y: auto;
  flex: 1;
}

.drawer-list li {
  padding: 14px 16px;
  border-radius: 10px;
  font-weight: 600;
  color: #374151;
  cursor: pointer;
}

.drawer-list li:hover {
  background: #f3f4f6;
}

.drawer-list li.active {
  background: #fde8ec;
  color: var(--primary);
}



/* ================= BACKDROP (DISABLED) ================= */
.drawer-backdrop {
  display: none;
}














/* ================= PAGE SHIFT WHEN DRAWER OPENS ================= */
.page-content {
  transition: margin-left 0.35s ease;
}

.page-content.shifted {
  margin-left: 360px; /* same as drawer width */
}

</style>
</head>

<body>
<div class="page-content">
<!-- BANNER (NEW) -->
<section class="kids-banner"></section>


<!-- CATEGORY TOGGLE BUTTON -->
<div class="category-toggle" onclick="toggleCategoryMenu()">
  <span class="hamburger">☰</span>
  <span class="toggle-text">Categories</span>
</div>

<!-- SLIDE-IN CATEGORY MENU -->
<div class="category-drawer" id="categoryDrawer">
  <div class="drawer-header">
    <h3>Categories</h3>
    <span class="close-btn" onclick="toggleCategoryMenu()">✕</span>
  </div>

  <ul class="drawer-list">
    <li>Balloon Decorations</li>
    <li>Theme Decor</li>
    <li class="active">All Kids Activities</li>
    <li>Fun Entertainers</li>
    <li>Live Eateries</li>
    <li>Live Cartoon Characters</li>
    <li>Game Stalls</li>
    <li>Fun Party Artists</li>
    <li>Live Musical Delivery</li>
    <li>Photography</li>
    <li>Kids Play Rentals</li>
  </ul>
</div>

<!-- BACKDROP -->
<div class="drawer-backdrop" id="drawerBackdrop" onclick="toggleCategoryMenu()"></div>


<!-- ACTIVITIES -->
<section class="section">
  <h2 class="section-title">Most Popular Party Activities</h2>
  <p class="section-sub">The most loved entertainment choices for 2026.</p>

  <div class="cards">

    
    <div class="card" onclick="filterByCategory('magic')">
  <img src="../assets/images/kids/categories/magicshow.webp">
  <div class="card-body">
    <div class="card-title"><h2>Professional Magic Shows</h2></div>
  </div>
</div>

<div class="card" onclick="filterByCategory('face')">
  <img src="../assets/images/kids/categories/facepainting.webp">
  <div class="card-body">
    <div class="card-title"><h2>Artistic Face Painting</h2></div>
  </div>
</div>

<div class="card" onclick="filterByCategory('inflatable')">
  <img src="../assets/images/kids/categories/inflatables.webp">
  <div class="card-body">
    <div class="card-title"><h2>Premium Inflatables</h2></div>
  </div>
</div>

<div class="card" onclick="filterByCategory('puppet')">
  <img src="../assets/images/kids/categories/Puppet.webp">
  <div class="card-body">
    <div class="card-title"><h2>Classic Puppet Theater</h2></div>
  </div>
</div>

  </div>
</section>



<!-- FEATURED -->
<section class="section" id="magic-products">
  <h2 class="section-title">Featured Party Products</h2>
  <p class="section-sub">Curated premium party supplies.</p>


<div class="budget-filter-wrapper">
  <span class="budget-label">Filter by Budget</span>

  <div class="budget-filters">
    <button class="budget-btn active" data-range="all">All</button>
    <button class="budget-btn" data-range="low">Below ₹2999</button>
    <button class="budget-btn" data-range="mid">₹3000 – 6999</button>
    <button class="budget-btn" data-range="high">₹7000 Above</button>
  </div>
</div>


  <div class="products">

<!-- MAGIC PRODUCT 1 -->
<div class="product" data-category="magic" data-price="3499">
  <div class="product-img">
    <img src="../assets/images/kids/magicshow/princess-anna.webp" alt="Princess Anna Mascot">
    <div class="product-wishlist" onclick="toggleWishlist(this)">♡</div>
    <div class="product-cart">🛒</div>
    <div class="product-badge">22% OFF</div>
  </div>

  <div class="product-body">
    <div class="product-title">Princess Anna Cartoon Mascot</div>

    <div class="product-price-row">
      <div class="product-price">₹3,499</div>
      <div class="product-old-price">₹4,499</div>
    </div>

  
<div class="product-rating">
  <span class="star">★</span>
  <span class="rating-value">4.9</span>
  <span class="rating-count">(120+ bookings)</span>
</div>

    <div class="product-footer">
      <a href="book-now.php" class="book-btn">Book Now</a>
    </div>
  </div>
</div>

<!-- MAGIC PRODUCT 2 -->
<div class="product" data-category="magic" data-price="4999">
  <div class="product-img">
    <img src="../assets/images/kids/magicshow/clown.webp" alt="Clown Magic Show">
    <div class="product-wishlist" onclick="toggleWishlist(this)">♡</div>
    <div class="product-cart">🛒</div>
    <div class="product-badge">18% OFF</div>
  </div>

  <div class="product-body">
    <div class="product-title">Funny Clown Magic Show</div>

    <div class="product-price-row">
      <div class="product-price">₹4,999</div>
      <div class="product-old-price">₹6,099</div>
    </div>

   
<div class="product-rating">
  <span class="star">★</span>
  <span class="rating-value">4.8</span>
  <span class="rating-count">(95+ bookings)</span>
</div>

    <div class="product-footer">
      <a href="book-now.php" class="book-btn">Book Now</a>
    </div>
  </div>
</div>

<!-- MAGIC PRODUCT 3 -->
<div class="product" data-category="magic" data-price="6999">
  <div class="product-img">
    <img src="../assets/images/kids/magicshow/elsa.webp" alt="Grand Illusion Magic Show">
    <div class="product-wishlist" onclick="toggleWishlist(this)">♡</div>
    <div class="product-cart">🛒</div>
    <div class="product-badge">25% OFF</div>
  </div>

  <div class="product-body">
    <div class="product-title">Grand Illusion Magic Show</div>

    <div class="product-price-row">
      <div class="product-price">₹6,999</div>
      <div class="product-old-price">₹9,299</div>
    </div>

    
    <div class="product-rating">
  <span class="star">★</span>
  <span class="rating-value">5.0</span>
  <span class="rating-count">(210+ bookings)</span>
</div>


    <div class="product-footer">
      <a href="book-now.php" class="book-btn">Book Now</a>
    </div>
  </div>
</div>

<!-- MAGIC PRODUCT 4 -->
<div class="product" data-category="magic" data-price="8999">
  <div class="product-img">
    <img src="../assets/images/kids/magicshow/anchor.jpg" alt="Stage Magician Show">
    <div class="product-wishlist" onclick="toggleWishlist(this)">♡</div>
    <div class="product-cart">🛒</div>
    <div class="product-badge">20% OFF</div>
  </div>

  <div class="product-body">
    <div class="product-title">Premium Stage Magician</div>

    <div class="product-price-row">
      <div class="product-price">₹8,999</div>
      <div class="product-old-price">₹11,299</div>
    </div>

    
      <div class="product-rating">
  <span class="star">★</span>
  <span class="rating-value">4.9</span>
  <span class="rating-count">(180+ bookings)</span>
</div>

    <div class="product-footer">
      <a href="book-now.php" class="book-btn">Book Now</a>
    </div>
  </div>
</div>

<!-- MAGIC PRODUCT 5 -->
<div class="product" data-category="magic" data-price="5999">
  <div class="product-img">
    <img src="../assets/images/kids/magicshow/kids-anchor.jpg" alt="Kids Party Anchor">
    <div class="product-wishlist" onclick="toggleWishlist(this)">♡</div>
    <div class="product-cart">🛒</div>
    <div class="product-badge">15% OFF</div>
  </div>

  <div class="product-body">
    <div class="product-title">Kids Birthday Party Anchor</div>

    <div class="product-price-row">
      <div class="product-price">₹5,999</div>
      <div class="product-old-price">₹6,999</div>
    </div>

  
    <div class="product-rating">
  <span class="star">★</span>
  <span class="rating-value">4.8</span>
  <span class="rating-count">(140+ bookings)</span>
</div>

    <div class="product-footer">
      <a href="book-now.php" class="book-btn">Book Now</a>
    </div>
  </div>
</div>

<!-- MAGIC PRODUCT 6 -->
<div class="product" data-category="magic" data-price="7499">
  <div class="product-img">
    <img src="../assets/images/kids/magicshow/comedy-magician.jpg" alt="Comedy Magician Show">
    <div class="product-wishlist" onclick="toggleWishlist(this)">♡</div>
    <div class="product-cart">🛒</div>
    <div class="product-badge">30% OFF</div>
  </div>

  <div class="product-body">
    <div class="product-title">Comedy & Illusion Magic Show</div>

    <div class="product-price-row">
      <div class="product-price">₹7,499</div>
      <div class="product-old-price">₹10,699</div>
    </div>

   
    <div class="product-rating">
  <span class="star">★</span>
  <span class="rating-value">5.0</span>
  <span class="rating-count">(220+ bookings)</span>
</div>

    <div class="product-footer">
      <a href="book-now.php" class="book-btn">Book Now</a>
    </div>
  </div>
</div>



<!-- FACE PAINTING PRODUCT 1 -->
<div class="product" data-category="face" data-price="3499">
  <div class="product-img">
    <img src="../assets/images/kids/facepainting/face-1.jpg" alt="Kids Face Painting Basic">
    <div class="product-wishlist" onclick="toggleWishlist(this)">♡</div>
    <div class="product-cart">🛒</div>
    <div class="product-badge">22% OFF</div>
  </div>

  <div class="product-body">
    <div class="product-title">Basic Kids Face Painting</div>

    <div class="product-price-row">
      <div class="product-price">₹3,499</div>
      <div class="product-old-price">₹4,499</div>
    </div>

    
    <div class="product-rating">
  <span class="star">★</span>
  <span class="rating-value">4.8</span>
  <span class="rating-count">(110+ bookings)</span>
</div>

    <div class="product-footer">
      <a href="book-now.php" class="book-btn">Book Now</a>
    </div>
  </div>
</div>

<!-- FACE PAINTING PRODUCT 2 -->
<div class="product" data-category="face" data-price="4499">
  <div class="product-img">
    <img src="../assets/images/kids/facepainting/face-2.jpg" alt="Theme Face Painting">
    <div class="product-wishlist" onclick="toggleWishlist(this)">♡</div>
    <div class="product-cart">🛒</div>
    <div class="product-badge">18% OFF</div>
  </div>

  <div class="product-body">
    <div class="product-title">Theme Based Face Painting</div>

    <div class="product-price-row">
      <div class="product-price">₹4,499</div>
      <div class="product-old-price">₹5,499</div>
    </div>

    
    <div class="product-rating">
  <span class="star">★</span>
  <span class="rating-value">4.9</span>
  <span class="rating-count">(145+ bookings)</span>
</div>

    <div class="product-footer">
      <a href="book-now.php" class="book-btn">Book Now</a>
    </div>
  </div>
</div>

<!-- FACE PAINTING PRODUCT 3 -->
<div class="product" data-category="face" data-price="5999">
  <div class="product-img">
    <img src="../assets/images/kids/facepainting/face-3.jpg" alt="Premium Face Painting">
    <div class="product-wishlist" onclick="toggleWishlist(this)">♡</div>
    <div class="product-cart">🛒</div>
    <div class="product-badge">25% OFF</div>
  </div>

  <div class="product-body">
    <div class="product-title">Premium Artistic Face Painting</div>

    <div class="product-price-row">
      <div class="product-price">₹5,999</div>
      <div class="product-old-price">₹7,999</div>
    </div>

    
    <div class="product-rating">
  <span class="star">★</span>
  <span class="rating-value">5.0</span>
  <span class="rating-count">(210+ bookings)</span>
</div>

    <div class="product-footer">
      <a href="book-now.php" class="book-btn">Book Now</a>
    </div>
  </div>
</div>

<!-- FACE PAINTING PRODUCT 4 -->
<div class="product" data-category="face" data-price="6999">
  <div class="product-img">
    <img src="../assets/images/kids/facepainting/face-4.jpg" alt="Glow Face Painting">
    <div class="product-wishlist" onclick="toggleWishlist(this)">♡</div>
    <div class="product-cart">🛒</div>
    <div class="product-badge">20% OFF</div>
  </div>

  <div class="product-body">
    <div class="product-title">Glow & UV Face Painting</div>

    <div class="product-price-row">
      <div class="product-price">₹6,999</div>
      <div class="product-old-price">₹8,799</div>
    </div>

    
    <div class="product-rating">
  <span class="star">★</span>
  <span class="rating-value">4.9</span>
  <span class="rating-count">(170+ bookings)</span>
</div>

    <div class="product-footer">
      <a href="book-now.php" class="book-btn">Book Now</a>
    </div>
  </div>
</div>

<!-- FACE PAINTING PRODUCT 5 -->
<div class="product" data-category="face" data-price="4999">
  <div class="product-img">
    <img src="../assets/images/kids/facepainting/face-5.webp" alt="Cartoon Face Painting">
    <div class="product-wishlist" onclick="toggleWishlist(this)">♡</div>
    <div class="product-cart">🛒</div>
    <div class="product-badge">15% OFF</div>
  </div>

  <div class="product-body">
    <div class="product-title">Cartoon Character Face Painting</div>

    <div class="product-price-row">
      <div class="product-price">₹4,999</div>
      <div class="product-old-price">₹5,899</div>
    </div>

    
    <div class="product-rating">
  <span class="star">★</span>
  <span class="rating-value">4.7</span>
  <span class="rating-count">(135+ bookings)</span>
</div>

    <div class="product-footer">
      <a href="book-now.php" class="book-btn">Book Now</a>
    </div>
  </div>
</div>

<!-- FACE PAINTING PRODUCT 6 -->
<div class="product" data-category="face" data-price="7999">
  <div class="product-img">
    <img src="../assets/images/kids/facepainting/face-6.webp" alt="Luxury Face Painting">
    <div class="product-wishlist" onclick="toggleWishlist(this)">♡</div>
    <div class="product-cart">🛒</div>
    <div class="product-badge">30% OFF</div>
  </div>

  <div class="product-body">
    <div class="product-title">Luxury Face Painting Experience</div>

    <div class="product-price-row">
      <div class="product-price">₹7,999</div>
      <div class="product-old-price">₹11,399</div>
    </div>

    
    <div class="product-rating">
  <span class="star">★</span>
  <span class="rating-value">5.0</span>
  <span class="rating-count">(260+ bookings)</span>
</div>

    <div class="product-footer">
      <a href="book-now.php" class="book-btn">Book Now</a>
    </div>
  </div>
</div>




<!-- INFLATABLE PRODUCT 1 -->
<div class="product" data-category="inflatable" data-price="5499">
  <div class="product-img">
    <img src="../assets/images/kids/inflatables/mickey-bouncy1.webp" alt="Mickey Mouse Bouncy Castle">
    <div class="product-wishlist" onclick="toggleWishlist(this)">♡</div>
    <div class="product-cart">🛒</div>
    <div class="product-badge">20% OFF</div>
  </div>

  <div class="product-body">
    <div class="product-title">Mickey Mouse Bouncy Castle</div>

    <div class="product-price-row">
      <div class="product-price">₹5,499</div>
      <div class="product-old-price">₹6,899</div>
    </div>

   
    <div class="product-rating">
  <span class="star">★</span>
  <span class="rating-value">4.9</span>
  <span class="rating-count">(160+ bookings)</span>
</div>

    <div class="product-footer">
      <a href="book-now.php" class="book-btn">Book Now</a>
    </div>
  </div>
</div>

<!-- INFLATABLE PRODUCT 2 -->
<div class="product" data-category="inflatable" data-price="6999">
  <div class="product-img">
    <img src="../assets/images/kids/inflatables/jungle-slide.webp" alt="Jungle Theme Inflatable Slide">
    <div class="product-wishlist" onclick="toggleWishlist(this)">♡</div>
    <div class="product-cart">🛒</div>
    <div class="product-badge">25% OFF</div>
  </div>

  <div class="product-body">
    <div class="product-title">Jungle Theme Inflatable Slide</div>

    <div class="product-price-row">
      <div class="product-price">₹6,999</div>
      <div class="product-old-price">₹9,299</div>
    </div>

    
    <div class="product-rating">
  <span class="star">★</span>
  <span class="rating-value">5.0</span>
  <span class="rating-count">(210+ bookings)</span>
</div>

    <div class="product-footer">
      <a href="book-now.php" class="book-btn">Book Now</a>
    </div>
  </div>
</div>

<!-- INFLATABLE PRODUCT 3 -->
<div class="product" data-category="inflatable" data-price="4999">
  <div class="product-img">
    <img src="../assets/images/kids/inflatables/kids-bouncer.jpg" alt="Kids Party Inflatable Bouncer">
    <div class="product-wishlist" onclick="toggleWishlist(this)">♡</div>
    <div class="product-cart">🛒</div>
    <div class="product-badge">18% OFF</div>
  </div>

  <div class="product-body">
    <div class="product-title">Kids Party Inflatable Bouncer</div>

    <div class="product-price-row">
      <div class="product-price">₹4,999</div>
      <div class="product-old-price">₹6,099</div>
    </div>

   
    <div class="product-rating">
  <span class="star">★</span>
  <span class="rating-value">4.8</span>
  <span class="rating-count">(140+ bookings)</span>
</div>

    <div class="product-footer">
      <a href="book-now.php" class="book-btn">Book Now</a>
    </div>
  </div>
</div>

<!-- INFLATABLE PRODUCT 4 -->
<div class="product" data-category="inflatable" data-price="8999">
  <div class="product-img">
    <img src="../assets/images/kids/inflatables/mega-slide.avif" alt="Mega Inflatable Water Slide">
    <div class="product-wishlist" onclick="toggleWishlist(this)">♡</div>
    <div class="product-cart">🛒</div>
    <div class="product-badge">30% OFF</div>
  </div>

  <div class="product-body">
    <div class="product-title">Mega Inflatable Water Slide</div>

    <div class="product-price-row">
      <div class="product-price">₹8,999</div>
      <div class="product-old-price">₹12,899</div>
    </div>

    <div class="product-rating">
  <span class="star">★</span>
  <span class="rating-value">5.0</span>
  <span class="rating-count">(260+ bookings)</span>
</div>

    <div class="product-footer">
      <a href="book-now.php" class="book-btn">Book Now</a>
    </div>
  </div>
</div>

<!-- INFLATABLE PRODUCT 5 -->
<div class="product" data-category="inflatable" data-price="5999">
  <div class="product-img">
    <img src="../assets/images/kids/inflatables/princess-bounce.webp" alt="Princess Inflatable Castle">
    <div class="product-wishlist" onclick="toggleWishlist(this)">♡</div>
    <div class="product-cart">🛒</div>
    <div class="product-badge">15% OFF</div>
  </div>

  <div class="product-body">
    <div class="product-title">Princess Inflatable Castle</div>

    <div class="product-price-row">
      <div class="product-price">₹5,999</div>
      <div class="product-old-price">₹6,999</div>
    </div>

    
    <div class="product-rating">
  <span class="star">★</span>
  <span class="rating-value">4.8</span>
  <span class="rating-count">(155+ bookings)</span>
</div>
    <div class="product-footer">
      <a href="book-now.php" class="book-btn">Book Now</a>
    </div>
  </div>
</div>

<!-- INFLATABLE PRODUCT 6 -->
<div class="product" data-category="inflatable" data-price="7499">
  <div class="product-img">
    <img src="../assets/images/kids/inflatables/obstacle-course.webp" alt="Inflatable Obstacle Course">
    <div class="product-wishlist" onclick="toggleWishlist(this)">♡</div>
    <div class="product-cart">🛒</div>
    <div class="product-badge">22% OFF</div>
  </div>

  <div class="product-body">
    <div class="product-title">Inflatable Obstacle Course</div>

    <div class="product-price-row">
      <div class="product-price">₹7,499</div>
      <div class="product-old-price">₹9,599</div>
    </div>

    
    <div class="product-rating">
  <span class="star">★</span>
  <span class="rating-value">4.9</span>
  <span class="rating-count">(190+ bookings)</span>
</div>
    <div class="product-footer">
      <a href="book-now.php" class="book-btn">Book Now</a>
    </div>
  </div>
</div>




<!-- PUPPET PRODUCT 1 -->
<div class="product" data-category="puppet" data-price="3499">
  <div class="product-img">
    <img src="../assets/images/kids/puppet/animal-puppet.jpg" alt="Animal Friends Puppet Show">
    <div class="product-wishlist" onclick="toggleWishlist(this)">♡</div>
    <div class="product-cart">🛒</div>
    <div class="product-badge">20% OFF</div>
  </div>

  <div class="product-body">
    <div class="product-title">Animal Friends Puppet Show</div>

    <div class="product-price-row">
      <div class="product-price">₹3,499</div>
      <div class="product-old-price">₹4,399</div>
    </div>

    
    <div class="product-rating">
  <span class="star">★</span>
  <span class="rating-value">4.8</span>
  <span class="rating-count">(130+ bookings)</span>
</div>

    <div class="product-footer">
      <a href="book-now.php" class="book-btn">Book Now</a>
    </div>
  </div>
</div>

<!-- PUPPET PRODUCT 2 -->
<div class="product" data-category="puppet" data-price="4999">
  <div class="product-img">
    <img src="../assets/images/kids/puppet/fairy-tales.jpg" alt="Fairy Tale Puppet Theater">
    <div class="product-wishlist" onclick="toggleWishlist(this)">♡</div>
    <div class="product-cart">🛒</div>
    <div class="product-badge">25% OFF</div>
  </div>

  <div class="product-body">
    <div class="product-title">Fairy Tale Puppet Theater</div>

    <div class="product-price-row">
      <div class="product-price">₹4,999</div>
      <div class="product-old-price">₹6,699</div>
    </div>

    

    <div class="product-rating">
  <span class="star">★</span>
  <span class="rating-value">4.9</span>
  <span class="rating-count">(180+ bookings)</span>
</div>

    <div class="product-footer">
      <a href="book-now.php" class="book-btn">Book Now</a>
    </div>
  </div>
</div>

<!-- PUPPET PRODUCT 3 -->
<div class="product" data-category="puppet" data-price="5999">
  <div class="product-img">
    <img src="../assets/images/kids/puppet/comedy-puppet.jpg" alt="Comedy Puppet Show">
    <div class="product-wishlist" onclick="toggleWishlist(this)">♡</div>
    <div class="product-cart">🛒</div>
    <div class="product-badge">18% OFF</div>
  </div>

  <div class="product-body">
    <div class="product-title">Comedy Puppet Show</div>

    <div class="product-price-row">
      <div class="product-price">₹5,999</div>
      <div class="product-old-price">₹7,299</div>
    </div>

    
<div class="product-rating">
  <span class="star">★</span>
  <span class="rating-value">4.8</span>
  <span class="rating-count">(155+ bookings)</span>
</div>
    <div class="product-footer">
      <a href="book-now.php" class="book-btn">Book Now</a>
    </div>
  </div>
</div>

<!-- PUPPET PRODUCT 4 -->
<div class="product" data-category="puppet" data-price="6999">
  <div class="product-img">
    <img src="../assets/images/kids/puppet/moral-story.webp" alt="Moral Story Puppet Show">
    <div class="product-wishlist" onclick="toggleWishlist(this)">♡</div>
    <div class="product-cart">🛒</div>
    <div class="product-badge">22% OFF</div>
  </div>

  <div class="product-body">
    <div class="product-title">Moral Story Puppet Show</div>

    <div class="product-price-row">
      <div class="product-price">₹6,999</div>
      <div class="product-old-price">₹8,999</div>
    </div>

    <div class="product-rating">
  <span class="star">★</span>
  <span class="rating-value">5.0</span>
  <span class="rating-count">(200+ bookings)</span>
</div>

    <div class="product-footer">
      <a href="book-now.php" class="book-btn">Book Now</a>
    </div>
  </div>
</div>

<!-- PUPPET PRODUCT 5 -->
<div class="product" data-category="puppet" data-price="4499">
  <div class="product-img">
    <img src="../assets/images/kids/puppet/kids-special.jpg" alt="Kids Special Puppet Show">
    <div class="product-wishlist" onclick="toggleWishlist(this)">♡</div>
    <div class="product-cart">🛒</div>
    <div class="product-badge">15% OFF</div>
  </div>

  <div class="product-body">
    <div class="product-title">Kids Special Puppet Show</div>

    <div class="product-price-row">
      <div class="product-price">₹4,499</div>
      <div class="product-old-price">₹5,299</div>
    </div>

   
<div class="product-rating">
  <span class="star">★</span>
  <span class="rating-value">4.7</span>
  <span class="rating-count">(120+ bookings)</span>
</div>
    <div class="product-footer">
      <a href="book-now.php" class="book-btn">Book Now</a>
    </div>
  </div>
</div>

<!-- PUPPET PRODUCT 6 -->
<div class="product" data-category="puppet" data-price="7999">
  <div class="product-img">
    <img src="../assets/images/kids/puppet/grand-puppet.jpg" alt="Grand Puppet Theater Show">
    <div class="product-wishlist" onclick="toggleWishlist(this)">♡</div>
    <div class="product-cart">🛒</div>
    <div class="product-badge">30% OFF</div>
  </div>

  <div class="product-body">
    <div class="product-title">Grand Puppet Theater Show</div>

    <div class="product-price-row">
      <div class="product-price">₹7,999</div>
      <div class="product-old-price">₹11,399</div>
    </div>

    
    <div class="product-rating">
  <span class="star">★</span>
  <span class="rating-value">5.0</span>
  <span class="rating-count">(240+ bookings)</span>
</div>

    <div class="product-footer">
      <a href="book-now.php" class="book-btn">Book Now</a>
    </div>
  </div>
</div>




</div>


  </div>
</section>
</div>
<!-- STATS -->
<section class="stats">
  <div class="stat">
    <h2>15,000+</h2>
    <p>Parties Hosted</p>
  </div>
  <div class="stat">
    <h2>450+</h2>
    <p>Verified Artists</p>
  </div>
  <div class="stat">
    <h2>4.9/5</h2>
    <p>Avg Review Score</p>
  </div>
  <div class="stat">
    <h2>100%</h2>
    <p>Safety Compliance</p>
  </div>
</section>

<footer class="footer">
  <div>
    <h4>PartyOne</h4>
    <p>Industry standard for professional kids party entertainment.</p>
  </div>

  <div>
    <h4>Services</h4>
    <a href="#">Magic Shows</a>
    <a href="#">Inflatables</a>
    <a href="#">Face Painting</a>
  </div>

  <div>
    <h4>Company</h4>
    <a href="#">About Us</a>
    <a href="#">Safety Standards</a>
    <a href="#">Contact</a>
  </div>
</footer>

<script>
let activeCategory = null;

/* ================= CATEGORY FILTER ================= */
function filterByCategory(category) {
  activeCategory = category;

  const target = document.getElementById("magic-products");

  // ✅ PERFECT OFFSET FOR STICKY HEADER
  const headerHeight = document.querySelector("header")?.offsetHeight || 120;

  const top =
    target.offsetTop - headerHeight - 20; // extra breathing space

  window.scrollTo({
    top: top,
    behavior: "smooth"
  });

  // Show only selected category products
  document.querySelectorAll(".product").forEach(product => {
    product.style.display =
      product.dataset.category === category ? "block" : "none";
  });

  // Reset budget filter
  document.querySelectorAll(".budget-btn").forEach(btn =>
    btn.classList.remove("active")
  );
  document
    .querySelector('.budget-btn[data-range="all"]')
    .classList.add("active");
}

/* ================= BUDGET FILTER ================= */
document.querySelectorAll(".budget-btn").forEach(btn => {
  btn.addEventListener("click", () => {
    document.querySelectorAll(".budget-btn").forEach(b =>
      b.classList.remove("active")
    );
    btn.classList.add("active");

    const range = btn.dataset.range;

    document.querySelectorAll(".product").forEach(product => {
      if (activeCategory && product.dataset.category !== activeCategory) {
        product.style.display = "none";
        return;
      }

      const price = parseInt(product.dataset.price);
      let show = false;

      if (range === "all") show = true;
      if (range === "low") show = price < 3000;
      if (range === "mid") show = price >= 3000 && price <= 6999;
      if (range === "high") show = price >= 7000;

      product.style.display = show ? "block" : "none";
    });
  });
});

/* ================= DEFAULT LOAD ================= */
window.addEventListener("load", () => {
  document.querySelectorAll(".product").forEach(product => {
    product.style.display = "block";
  });

  activeCategory = null;

  document.querySelectorAll(".budget-btn").forEach(btn =>
    btn.classList.remove("active")
  );
  document
    .querySelector('.budget-btn[data-range="all"]')
    .classList.add("active");
});
















function toggleWishlist(el) {
  el.classList.toggle("active");

  // Optional: change heart symbol (♡ → ♥)
  if (el.classList.contains("active")) {
    el.innerHTML = "♥";
  } else {
    el.innerHTML = "♡";
  }
}














/* ================= HEADER HEIGHT FIX ================= */
function setHeaderHeight() {
  const header = document.querySelector("header");
  if (!header) return;

  const height = header.offsetHeight;
  document.documentElement.style.setProperty(
    "--header-height",
    height + "px"
  );
}

window.addEventListener("load", setHeaderHeight);
window.addEventListener("resize", setHeaderHeight);

/* ================= CATEGORY TOGGLE ================= */
function toggleCategoryMenu() {
  const drawer = document.getElementById("categoryDrawer");
  const toggle = document.querySelector(".category-toggle");
  const content = document.querySelector(".page-content");

  drawer.classList.toggle("open");
  toggle.classList.toggle("hide");
  content.classList.toggle("shifted");
}

</script>

</body>
</html>

<?php include '../includes/footer.php'; ?>
