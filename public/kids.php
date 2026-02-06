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
  left: -5px;
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












.addons-overlay {
  display: none;
  position: fixed;
  inset: 0;
  background: rgba(0,0,0,0.55);
  z-index: 99999;
  align-items: center;
  justify-content: center;
}



























/* =========================================================
   📱 MOBILE ACTIVITY FILTER – UNDER BANNER (NO DESKTOP CHANGE)
   ========================================================= */
@media (max-width: 768px) {

  /* 🔥 COMPACT BANNER */
  .kids-banner {
    height: 100px;          /* smaller banner */
    margin: 14px 16px 0;   /* tighter spacing */
    border-radius: 16px;
  }

  /* 🔥 SECTION MOVES UP */
  .kids-banner + .section {
    padding-top: 10px;     /* reduce gap below banner */
  }

  /* ================= SMALL GAP BELOW HEADER ================= */
.header-gap {
  height: 12px;              /* 👈 adjust: 8px / 12px / 16px */
  background: var(--bg);     /* clean white space */
}

  /* ACTIVITY FILTER GRID */
  .cards {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 14px;
    margin-top: 10px;
  }

  /* ACTIVITY CARD */
  .card {
    border-radius: 14px;
    box-shadow: 0 8px 18px rgba(0,0,0,0.12);
    overflow: hidden;
    background: #fff;
  }

  /* IMAGE */
  .card img {
    height: 150px;
    object-fit: cover;
  }

  /* TITLE AREA */
  .card-body {
    padding: 5px 5px 8px;
    text-align: center;
  }

  .card-title h2 {
    font-size: 14px;
    font-weight: 700;
    color: #dc2626; /* red like screenshot */
    line-height: 1.2;
  }

  /* Remove hover lift on mobile */
  .card:hover {
    transform: none;
    box-shadow: 0 8px 18px rgba(0,0,0,0.12);
  }
}

/* ---------- SMALL MOBILE (≤480px) ---------- */
@media (max-width: 480px) {

  .cards {
    gap: 12px;
  }

  .card img {
    height: 105px;
  }

  .card-title h2 {
    font-size: 13px;
  }
}


</style>
</head>

<body>
<div class="page-content">
    <!-- SMALL WHITE GAP BELOW HEADER -->
  <div class="header-gap"></div>
<!-- BANNER (NEW) -->
<section class="kids-banner"></section>


<!-- CATEGORY TOGGLE BUTTON -->
<div class="category-toggle" onclick="toggleCategoryMenu()">
  <span class="hamburger">⋮</span>
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
  <h6 class="section-title">Most Popular Party Activities</h6>
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
     <a href="book-now1.php" class="book-btn">Book Now</a>
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



<script>
/* ======================================================
   GLOBAL STATE
====================================================== */
let activeCategory = "all";

/* ======================================================
   CATEGORY DRAWER
====================================================== */
function toggleCategoryMenu() {
  document.getElementById("categoryDrawer")?.classList.toggle("open");
  document.querySelector(".category-toggle")?.classList.toggle("hide");
  document.querySelector(".page-content")?.classList.toggle("shifted");
}

/* ======================================================
   CATEGORY CARD FILTER (FIXED – NO LAYOUT JUMP)
====================================================== */
function filterByCategory(category) {
  activeCategory = category;

  // close drawer if open
  document.getElementById("categoryDrawer")?.classList.remove("open");
  document.querySelector(".category-toggle")?.classList.remove("hide");
  document.querySelector(".page-content")?.classList.remove("shifted");

  // filter products
  document.querySelectorAll(".product").forEach(product => {
    product.style.display =
      product.dataset.category === category ? "block" : "none";
  });

  // reset budget filter
  document.querySelectorAll(".budget-btn")
    .forEach(b => b.classList.remove("active"));

  document
    .querySelector('.budget-btn[data-range="all"]')
    ?.classList.add("active");

  // 🔥 PERFECT SCROLL (accounts for fixed header)
  const target = document.getElementById("magic-products");
  const headerHeight =
    document.querySelector("header")?.offsetHeight || 0;

  const y =
    target.getBoundingClientRect().top +
    window.pageYOffset -
    headerHeight -
    16; // small breathing space

  window.scrollTo({
    top: y,
    behavior: "smooth"
  });
}

/* ======================================================
   BUDGET FILTER
====================================================== */
document.querySelectorAll(".budget-btn").forEach(btn => {
  btn.addEventListener("click", () => {

    document.querySelectorAll(".budget-btn")
      .forEach(b => b.classList.remove("active"));

    btn.classList.add("active");

    const range = btn.dataset.range;

    document.querySelectorAll(".product").forEach(product => {
      const price = parseInt(product.dataset.price, 10);

      const matchCategory =
        activeCategory === "all" ||
        product.dataset.category === activeCategory;

      let matchPrice = false;

      if (range === "all") matchPrice = true;
      if (range === "low") matchPrice = price < 3000;
      if (range === "mid") matchPrice = price >= 3000 && price <= 6999;
      if (range === "high") matchPrice = price >= 7000;

      product.style.display =
        matchCategory && matchPrice ? "block" : "none";
    });
  });
});

/* ======================================================
   WISHLIST
====================================================== */
function toggleWishlist(el) {
  el.classList.toggle("active");
  el.textContent = el.classList.contains("active") ? "♥" : "♡";
}

/* ======================================================
   INITIAL LOAD
====================================================== */
window.addEventListener("load", () => {
  document.querySelectorAll(".product")
    .forEach(p => p.style.display = "block");

  document
    .querySelector('.budget-btn[data-range="all"]')
    ?.classList.add("active");

  activeCategory = "all";
});

/* ======================================================
   HEADER HEIGHT
====================================================== */
function setHeaderHeight() {
  const header = document.querySelector("header");
  if (header) {
    document.documentElement.style.setProperty(
      "--header-height",
      header.offsetHeight + "px"
    );
  }
}

window.addEventListener("load", setHeaderHeight);
window.addEventListener("resize", setHeaderHeight);






/* =========================================
   FORCE Book Now → book-now1.php
   (override any global modal JS)
========================================= */
document.querySelectorAll('.book-btn').forEach(btn => {
  btn.addEventListener('click', e => {
    // allow normal navigation
    window.location.href = btn.getAttribute('href');
  });
});
















</script>




























<!-- ================= ADD-ONS MODAL ================= -->
<div class="addons-overlay" id="addonsModal">
  <div class="addons-modal">

    <!-- HEADER -->
<div class="addons-header">
  <h3>Enhance Your Celebration</h3>

  <button
    class="addons-close-btn"
    id="closeAddons"
    aria-label="Close add-ons"
  >
    ✕
  </button>
</div>


    <!-- SEARCH -->
    <div class="addons-search-wrap">
      <input type="text" placeholder="Search add-ons…" class="addons-search">
    </div>

    <!-- FILTER TABS -->
    <div class="addons-tabs">
      <button class="tab active" data-filter="all">Popular</button>
      <button class="tab" data-filter="babyshower">Baby Shower</button>
      <button class="tab" data-filter="rosepetals">Rose Petals</button>
      <button class="tab" data-filter="babyshowercake">Baby Shower Cake</button>
    </div>


<div class="addons-content">

  <!-- Baby Shower item -->
  <div class="addon-card" data-category="popular babyshower">
    <img src="../assets/images/addons/u-shape-balloon.jpg">
    <h4>U-Shape Arch</h4>
    <p>₹2499</p>
    <button class="add-btn">ADD</button>
  </div>

  <!-- Rose Petals -->
  <div class="addon-card" data-category="popular rosepetals">
    <img src="../assets/images/addons/rose-petals.jpg">
    <h4>Rose Petals</h4>
    <p>₹499</p>
    <button class="add-btn">ADD</button>
  </div>

  <!-- Fairy Light (popular only) -->
  <div class="addon-card" data-category="popular">
    <img src="../assets/images/addons/fairy-light.jpg">
    <h4>Fairy Light</h4>
    <p>₹249</p>
    <button class="add-btn">ADD</button>
  </div>

  <!-- Rose Path -->
  <div class="addon-card" data-category="popular rosepetals">
    <img src="../assets/images/addons/rose-path.webp">
    <h4>Rose Path</h4>
    <p>₹799</p>
    <button class="add-btn">ADD</button>
  </div>

</div>

    <!-- FOOTER -->
<div class="addons-footer">
  <button class="close-btn" id="skipToCheckout" type="button">
    Skip for now
  </button>

  <a href="/PARTYONE-PHP/public/cart.php" class="proceed-btn">
    Proceed to Cart →
  </a>
</div>

  </div>
</div>



<!-- PAGE END MARKER -->
<div id="pageEndMarker"></div>


</body>
</html>

<?php include '../includes/footer.php'; ?>
