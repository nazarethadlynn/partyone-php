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
  margin-top: 32px;
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
















/* ================= KIDS BANNER (LARGE GRID – IMAGE 1 STYLE) ================= */
.kids-banner {
  position: relative;
  width: 100%;
  height: 340px;              /* ✅ Desktop height exactly like reference */
  border-radius: 22px;
  overflow: hidden;
  margin-bottom: 42px;
  background: #000;
}

/* IMAGE – FULL WIDTH, FULL HEIGHT */
.kids-banner-img {
  position: absolute;
  inset: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;          /* fills banner perfectly */
  object-position: center;
  display: block;
}

/* MOBILE */
@media (max-width: 768px) {
  .kids-banner {
    height: 260px;            /* ✅ Mobile proportion */
    border-radius: 16px;
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











/* ================= CATEGORY FILTER CARDS (PROFESSIONAL) ================= */
.category-cards {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 28px;
  margin-bottom: 42px;
}

.category-card {
  position: relative;
  height: 230px;
  border-radius: 24px;
  overflow: hidden;
  cursor: pointer;
  background: #000;
  box-shadow: 0 10px 30px rgba(0,0,0,.18);
  transition: transform .25s ease, box-shadow .25s ease;
}

/* IMAGE */
.category-card img {
  position: absolute;
  inset: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform .4s ease;
}

/* DARK OVERLAY */
.category-card::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    to top,
    rgba(0,0,0,.75),
    rgba(0,0,0,.15)
  );
  z-index: 1;
}

/* TITLE BADGE */
.category-card span {
  position: absolute;
  left: 16px;
  bottom: 16px;
  z-index: 2;
  background: rgba(0,0,0,.55);
  backdrop-filter: blur(6px);
  padding: 10px 16px;
  border-radius: 999px;
  color: #fff;
  font-size: 16px;
  font-weight: 800;
  letter-spacing: .3px;
}

/* HOVER EFFECT */
.category-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 22px 45px rgba(0,0,0,.35);
}

.category-card:hover img {
  transform: scale(1.05);
}

/* ACTIVE (WHEN FILTERED) */
.category-card.active {
  outline: 3px solid #e11d48;
  outline-offset: -3px;
}

/* MOBILE */
@media (max-width: 900px) {
  .category-cards {
    grid-template-columns: repeat(2, 1fr);
  }

  .category-card {
    height: 200px;
  }
}


/* ================= CATEGORY CARD – PREMIUM EDITORIAL BORDER ================= */

.category-card {
  position: relative;
  border-radius: 24px;
  overflow: hidden;

  /* outer precision border */
  border: 1px solid rgba(17,24,39,0.12);

  /* calm depth */
  box-shadow:
    0 8px 20px rgba(0,0,0,0.18);

  transition:
    transform .25s ease,
    box-shadow .25s ease,
    border-color .25s ease;
}

/* inner soft border ring */
.category-card::after {
  content: '';
  position: absolute;
  inset: 6px;
  border-radius: 18px;
  border: 1px solid rgba(255,255,255,0.35);
  pointer-events: none;
}

/* hover — restrained lift */
.category-card:hover {
  transform: translateY(-5px);
  border-color: rgba(17,24,39,0.22);
  box-shadow:
    0 14px 34px rgba(0,0,0,0.26);
}

/* active — professional focus (no glow) */
.category-card.active {
  border-color: #e11d48;
  box-shadow:
    0 0 0 1px #e11d48,
    0 16px 36px rgba(0,0,0,0.32);
}


















/* ================= IMAGE-1 STYLE PRODUCT CARDS ================= */

/* Horizontal scroll row */
.products-grid {
  display: flex;
  gap: 24px;
  overflow-x: auto;
  padding-bottom: 10px;
  scroll-snap-type: x mandatory;
}

/* Hide scrollbar (clean look) */
.products-grid::-webkit-scrollbar {
  display: none;
}
.products-grid {
  -ms-overflow-style: none;
  scrollbar-width: none;
}

/* Card sizing */
.product {
  min-width: 260px;
  max-width: 260px;
  flex-direction: column;
  scroll-snap-align: start;
}

/* Image on top */
.product-img {
  width: 100%;
  height: 200px;
}

/* Body below image */
.product-body {
  padding: 14px 16px 16px;
}

/* Book Now button same as Image-1 */
.product-footer a {
  padding: 14px 0;
  font-size: 15px;
}

/* Desktop – allow wrap if needed */
@media (min-width: 1200px) {
  .products-grid {
    flex-wrap: wrap;
    overflow-x: visible;
  }
}

















/* ================= FORCE GRID VIEW (IMAGE-2 MODE) ================= */
.products-grid.grid-view {
  display: grid !important;
  grid-template-columns: repeat(auto-fill, minmax(260px, 1fr)) !important;
  gap: 26px;
  overflow: visible !important;
  scroll-snap-type: none !important;
}

.products-grid.grid-view .product {
  min-width: unset !important;
  max-width: unset !important;
}
















/* =========================================================
   🎉 KIDS HERO SECTION – PREMIUM VISUAL UPGRADE
   (NO STRUCTURE / LOGIC CHANGES)
========================================================= */

/* ---------- HERO BANNER POLISH ---------- */
.kids-banner {
  box-shadow:
    0 30px 60px rgba(0,0,0,0.25),
    inset 0 -120px 120px rgba(0,0,0,0.35);
}

/* subtle glow edge */
.kids-banner::after {
  content: '';
  position: absolute;
  inset: 0;
  border-radius: 22px;
  background: linear-gradient(
    135deg,
    rgba(255,255,255,0.15),
    rgba(255,255,255,0)
  );
  pointer-events: none;
}

/* ---------- CATEGORY CARDS – PRO UPGRADE ---------- */
.category-cards {
  margin-top: -20px; /* pulls cards closer to banner */
}

/* base card enhancement */
.category-card {
  box-shadow:
    0 18px 45px rgba(0,0,0,0.28);
}

/* stronger hover = premium feel */
.category-card:hover {
  transform: translateY(-10px);
  box-shadow:
    0 30px 70px rgba(0,0,0,0.45);
}

/* overlay refinement */
.category-card::before {
  background: linear-gradient(
    to top,
    rgba(0,0,0,0.82),
    rgba(0,0,0,0.35),
    rgba(0,0,0,0.15)
  );
}

/* category label – more elegant */
.category-card span {
  font-size: 17px;
  padding: 12px 20px;
  backdrop-filter: blur(10px);
  background: rgba(0,0,0,0.6);
  box-shadow: 0 6px 18px rgba(0,0,0,0.4);
}

/* glowing border on hover */
.category-card:hover::after {
  filter: brightness(1.3);
}

/* ACTIVE STATE – more visible */
.category-card.active {
  transform: translateY(-6px);
  box-shadow:
    0 0 0 3px rgba(225,29,72,0.6),
    0 28px 65px rgba(0,0,0,0.5);
}

/* ---------- MOBILE REFINEMENT ---------- */
@media (max-width: 900px) {
  .category-cards {
    margin-top: 0;
  }

  .category-card span {
    font-size: 15px;
    padding: 10px 16px;
  }
}


















/* ================= FLOATING EDGE CATEGORY TOGGLE (PRO VERSION) ================= */
.category-toggle-btn {
  position: fixed;
  top: 190px;
  right: 0;
  z-index: 990;

  height: 50px;
  width: 48px;                 /* icon-only default */
  padding: 0 14px;

  background: #ffffff;
  color: #111827;

  border-radius: 12px 0 0 12px;
  border: 1px solid #e5e7eb;
  border-right: none;

  display: flex;
  align-items: center;
  gap: 12px;

  font-size: 14px;
  font-weight: 600;
  letter-spacing: .2px;
  cursor: pointer;

  overflow: hidden;
  white-space: nowrap;

  box-shadow: -8px 10px 26px rgba(0,0,0,.12);
  transition: width .28s ease, box-shadow .28s ease;
}

/* Icon — flat, professional */
.category-toggle-btn .icon {
  font-size: 18px;
  color: #e11d48;     /* accent only */
  line-height: 1;
}

/* Text — calm, not shouty */
.category-toggle-btn .label {
  opacity: 0;
  color: #374151;
  transition: opacity .18s ease;
}

/* Hover — slide out gently */
.category-toggle-btn:hover {
  width: 150px;
  box-shadow: -12px 14px 32px rgba(0,0,0,.18);
}

.category-toggle-btn:hover .label {
  opacity: 1;
}

/* Mobile — keep compact */
@media (max-width: 768px) {
  .category-toggle-btn {
    top: 160px;
  }
}











/* Overlay */
.category-overlay {
  position: fixed;
  inset: 0;
  background: rgba(0,0,0,.45);
  z-index: 998;
  opacity: 0;
  pointer-events: none;
  transition: .3s ease;
}

.category-overlay.open {
  opacity: 1;
  pointer-events: all;
}

/* Drawer panel */

.category-panel {
  position: fixed;
  top: 160px;                     /* ✅ REAL HEADER HEIGHT */
  right: -380px;
  width: 360px;
  height: calc(100vh - 160px);    /* ✅ FULL VIEWPORT BELOW HEADER */
  background: #ffffff;
  z-index: 999;
  box-shadow: -25px 0 50px rgba(0,0,0,.25);
  transition: .35s ease;
  display: flex;
  flex-direction: column;
}

.category-panel.open {
  right: 0;
}

/* Header */

.category-panel-header {
  position: sticky;
  top: 0;
  background: #ffffff;
  z-index: 2;
}

.category-panel-header h3 {
  font-size: 18px;
  font-weight: 800;
  color: #111827;
}

.category-close {
  font-size: 22px;
  cursor: pointer;
  color: #6b7280;
}

/* List */
/* .category-panel ul {
  list-style: none;
  padding: 18px 24px;
  margin: 0;
} */

.category-panel ul {
  list-style: none;
  padding: 18px 24px 28px;
  margin: 0;
  overflow-y: auto;      /* ✅ allows scrolling */
  flex: 1;               /* ✅ fills remaining space */
}


.category-panel li {
  padding: 14px 12px;
  border-radius: 10px;
  font-size: 15px;
  font-weight: 600;
  color: #374151;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.category-panel li:hover {
  background: #fdf2f8;
  color: #e11d48;
}

.category-panel li.active {
  background: #fee2e2;
  color: #e11d48;
  font-weight: 700;
}



















/* ================= CATEGORY DRAWER HEADING ================= */

.category-panel-header {
  padding: 22px 24px 18px;
  border-bottom: 1px solid #e5e7eb;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.category-title {
  display: flex;
  align-items: center;
  gap: 10px;
  font-size: 20px;
  font-weight: 800;
  color: #111827;
  letter-spacing: .3px;
}

.category-icon {
  width: 36px;
  height: 36px;
  border-radius: 10px;
  background: #fee2e2;
  color: #e11d48;
  display: grid;
  place-items: center;
  font-size: 18px;
}

.category-close {
  font-size: 22px;
  cursor: pointer;
  color: #6b7280;
  transition: .2s ease;
}

.category-close:hover {
  color: #e11d48;
}


















/* =========================================================
   FINAL OVERRIDE — PRODUCT CARDS (MATCH IMAGE-2 EXACTLY)
   This MUST stay at the bottom of CSS
========================================================= */

/* GRID — no slider look */
.products-grid {
  display: grid !important;
  grid-template-columns: repeat(auto-fill, minmax(260px, 1fr)) !important;
  gap: 28px;
  overflow: visible !important;
}

/* CARD */
.product {
  width: 100%;
  background: #ffffff;
  border-radius: 18px;
  box-shadow: 0 6px 18px rgba(0,0,0,0.08);
  overflow: hidden;
  display: flex;
  flex-direction: column;
  transform: none !important;
  transition: none !important;
}

/* IMAGE */
.product-img {
  height: 190px;
  border-radius: 18px 18px 0 0;
  overflow: hidden;
}

.product-img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

/* HEART */
.product-wishlist {
  top: 12px;
  left: 12px;
  width: 34px;
  height: 34px;
  background: #fff;
  border-radius: 50%;
  box-shadow: 0 3px 8px rgba(0,0,0,0.12);
  font-size: 15px;
}

/* OFFER BADGE */
.product-badge {
  top: 12px;
  right: 12px;
  padding: 6px 12px;
  font-size: 12px;
  font-weight: 700;
  border-radius: 999px;
}

/* BODY */
.product-body {
  padding: 14px 16px 18px;
  display: flex;
  flex-direction: column;
  gap: 6px;
}

/* TITLE */
.product-title {
  font-size: 15px;
  font-weight: 700;
  color: #111827;
  line-height: 1.35;
}

/* PRICE */
.product-price-row {
  display: flex;
  align-items: center;
  gap: 8px;
}

.product-price {
  font-size: 17px;
  font-weight: 800;
}

.product-old-price {
  font-size: 14px;
  color: #9ca3af;
  text-decoration: line-through;
}

/* RATING */
.product-rating {
  font-size: 14px;
  font-weight: 600;
  color: #f59e0b;
  display: flex;
  align-items: center;
  gap: 6px;
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
  width: 42px;
  height: 42px;
  border-radius: 50%;
  background: #f3f4f6;
  display: grid;
  place-items: center;
  font-size: 17px;
}

/* BOOK NOW */
.product-footer a {
  flex: 1;
  height: 42px;
  border-radius: 999px;
  background: #e11d48;
  color: #ffffff;
  font-size: 14px;
  font-weight: 700;
  display: flex;
  align-items: center;
  justify-content: center;
  text-decoration: none;
}



</style>

<div class="kids-wrap">




<div class="category-toggle-btn" id="openCategories">
  <span class="icon">☰</span>
  <span class="label">Categories</span>
</div>

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

  <div class="category-card" data-type="decor">
    <img src="../assets/images/kids/categories/decors.jpg" />
    <span>Decorations</span>
  </div>

  <div class="category-card" data-type="games">
    <img src="../assets/images/kids/categories/games.webp" />
    <span>Arcade Games</span>
  </div>

</div>



<div class="filters-box modern-filters">
  <div class="filter-row" id="priceFilters">
    <span class="filter-label">Filter by Budget</span>

    <button class="filter-pill active" data-price="">All</button>
    <button class="filter-pill" data-price="low">Below ₹2999</button>
    <button class="filter-pill" data-price="mid">₹3000 – 6999</button>
    <button class="filter-pill" data-price="high">₹7000 Above</button>
  </div>
  <!-- HIDDEN TYPE FILTER (LOGIC ONLY – DO NOT STYLE OR SHOW) -->
<div class="filter-row" id="typeFilters" style="display:none">
  <button class="filter-pill" data-type="">All</button>
  <button class="filter-pill" data-type="magic">Magic</button>
  <button class="filter-pill" data-type="games">Games</button>
  <button class="filter-pill" data-type="decor">Decor</button>
  <button class="filter-pill" data-type="eatables">Eatables</button>
</div>

</div> <!-- ✅ THIS WAS MISSING -->

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




<!-- OVERLAY -->
<div class="category-overlay" id="categoryOverlay"></div>

<!-- SLIDE PANEL -->
<div class="category-panel" id="categoryPanel">

 
<div class="category-panel-header">
  <div class="category-title">
    <!-- <span class="category-icon">📂</span> -->
    Categories
  </div>
  <div class="category-close" id="closeCategories">✕</div>
</div>

  <ul>
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


<script>
let activePrice = '';
let activeType  = '';

const productsGrid = document.querySelector('.products-grid');
const filtersBox   = document.querySelector('.filters-box');

/* 🔧 HEADER + BREATHING SPACE (IMPORTANT) */
const HEADER_OFFSET = 140;   // sticky header
const EXTRA_OFFSET  = 40;    // visual spacing like Image-2

/* ================= PRICE FILTER ================= */
document.querySelectorAll('#priceFilters .filter-pill').forEach(btn => {
  btn.addEventListener('click', () => {

    document.querySelectorAll('#priceFilters .filter-pill')
      .forEach(b => b.classList.remove('active'));

    btn.classList.add('active');
    activePrice = btn.dataset.price || '';

    /* Price-only browsing = slider */
    productsGrid.classList.remove('grid-view');

    filterProducts();
    scrollPerfectly();
  });
});

/* ================= FILTER LOGIC ================= */
function filterProducts() {
  document.querySelectorAll('.product').forEach(card => {
    const priceMatch = !activePrice || card.dataset.price === activePrice;
    const typeMatch  = !activeType  || card.dataset.type === activeType;
    card.style.display = (priceMatch && typeMatch) ? 'block' : 'none';
  });
}

/* ================= CATEGORY CARD CLICK ================= */
document.querySelectorAll('.category-card').forEach(card => {
  card.addEventListener('click', () => {
    const type = card.dataset.type;

    /* Active state */
    document.querySelectorAll('.category-card')
      .forEach(c => c.classList.remove('active'));
    card.classList.add('active');

    /* Set type */
    activeType = type;

    /* Reset price */
    activePrice = '';
    document.querySelectorAll('#priceFilters .filter-pill')
      .forEach(b => b.classList.remove('active'));
    document.querySelector('#priceFilters .filter-pill[data-price=""]')
      .classList.add('active');

    /* 🔥 Force Image-2 layout */
    productsGrid.classList.add('grid-view');

    filterProducts();
    scrollPerfectly();
  });
});

/* ================= PERFECT SCROLL (IMAGE-2 FEEL) ================= */
function scrollPerfectly() {
  const y =
    filtersBox.getBoundingClientRect().top +
    window.pageYOffset -
    HEADER_OFFSET -
    EXTRA_OFFSET;

  window.scrollTo({
    top: y,
    behavior: 'smooth'
  });
}



















const openBtn = document.getElementById('openCategories');
const closeBtn = document.getElementById('closeCategories');
const panel = document.getElementById('categoryPanel');
const overlay = document.getElementById('categoryOverlay');

openBtn.addEventListener('click', () => {
  panel.classList.add('open');
  overlay.classList.add('open');
});

closeBtn.addEventListener('click', closePanel);
overlay.addEventListener('click', closePanel);

function closePanel() {
  panel.classList.remove('open');
  overlay.classList.remove('open');
}

</script>



<?php include '../includes/footer.php'; ?>
