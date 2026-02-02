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

/* ================= BANNER (NEW) ================= */
.kids-banner {
  height: 270px;
  margin: 40px 80px 0;
  border-radius: 22px;
  background:
    linear-gradient(
      rgba(15,23,42,0.65),
      rgba(15,23,42,0.65)
    ),
    url("../assets/images/kids/banner/Kids-Activity-Page.jpg")
    center / cover no-repeat;
  display: flex;
  align-items: center;
  padding: 0 60px;
  color: #fff;
}

.kids-banner h1 {
  font-size: 42px;
  font-weight: 800;
  line-height: 1.2;
}

.kids-banner h1 span {
  color: var(--primary);
}

.kids-banner p {
  margin-top: 14px;
  font-size: 16px;
  color: #e5e7eb;
  max-width: 520px;
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

/* ================= FEATURED PRODUCTS ================= */
.products {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 28px;
}

.product {
  background: #fff;
  border-radius: 18px;
  box-shadow: 0 12px 30px rgba(0,0,0,.08);
  overflow: hidden;
}

.product img {
  width: 100%;
  height: 200px;
  object-fit: cover;
}

.product-body {
  padding: 18px;
}

.product-price {
  color: var(--primary);
  font-weight: 800;
  margin-top: 6px;
}

.product-body button {
  margin-top: 14px;
  width: 100%;
  padding: 12px;
  border-radius: 999px;
  border: none;
  background: #111827;
  color: #fff;
  font-weight: 700;
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




















/* ================= PROFESSIONAL PRODUCT CARD ================= */

.product {
  background: #fff;
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 0 14px 40px rgba(0,0,0,.08);
  transition: transform .35s ease, box-shadow .35s ease;
}

.product:hover {
  transform: translateY(-8px);
  box-shadow: 0 28px 60px rgba(0,0,0,.16);
}

/* IMAGE */
.product-img {
  position: relative;
  overflow: hidden;
}

.product-img img {
  width: 100%;
  height: 230px;
  object-fit: cover;
  transition: transform .45s ease;
}

.product:hover img {
  transform: scale(1.08);
}

/* WISHLIST */
/* .product-wishlist {
  position: absolute;
  top: 14px;
  right: 14px;
  background: rgba(255,255,255,.95);
  width: 38px;
  height: 38px;
  border-radius: 50%;
  display: grid;
  place-items: center;
  font-size: 17px;
  cursor: pointer;
  box-shadow: 0 6px 18px rgba(0,0,0,.15);
} */

/* BADGE */
.product-badge {
  position: absolute;
  bottom: 14px;
  left: 14px;
  background: linear-gradient(135deg, #16a34a, #22c55e);
  color: #fff;
  padding: 6px 14px;
  border-radius: 999px;
  font-size: 12px;
  font-weight: 700;
}

/* BODY */
.product-body {
  padding: 18px;
  text-align: left;
}

.product-title {
  font-size: 16px;
  font-weight: 700;
  margin-bottom: 8px;
}

/* PRICE */
.product-price-row {
  display: flex;
  align-items: center;
  gap: 12px;
}

.product-price {
  font-size: 18px;
  font-weight: 800;
  color: #e11d48;
}

.product-old-price {
  font-size: 13px;
  color: #9ca3af;
  text-decoration: line-through;
}

/* RATING */
.product-rating {
  margin-top: 6px;
  font-size: 14px;
  color: #111;
}

.product-rating span {
  color: #6b7280;
  font-size: 12px;
}

/* FOOTER */
/* .product-footer {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-top: 14px;
} */

/* .product-cart {
  font-size: 20px;
  cursor: pointer;
} */

/* CTA */
/* .book-btn {
  background: #111827;
  color: #fff;
  padding: 10px 18px;
  border-radius: 999px;
  font-weight: 700;
  text-decoration: none;
  transition: background .25s ease;
}

.book-btn:hover {
  background: #000;
} */






/* ================= CART ICON ON IMAGE ================= */

/* .product-cart {
  position: absolute;
  top: 14px;
  right: 58px; 
  background: rgba(255,255,255,.95);
  width: 38px;
  height: 38px;
  border-radius: 50%;
  display: grid;
  place-items: center;
  font-size: 17px;
  cursor: pointer;
  box-shadow: 0 6px 18px rgba(0,0,0,.15);
} */

/* ================= FULL WIDTH BOOK NOW BUTTON ================= */

.product-footer {
  margin-top: 14px;
}

.book-btn {
  display: block;
  width: 100%;
  text-align: center;
  background: #e11d48;
  color: #fff;
  padding: 14px 0;
  border-radius: 999px;
  font-weight: 800;
  text-decoration: none;
  transition: background .25s ease, transform .2s ease;
}

.book-btn:hover {
  background: #be123c;
  transform: translateY(-1px);
}





/* ================= WISHLIST (TOP LEFT ON IMAGE) ================= */

.product-wishlist {
  position: absolute;
  top: 14px;
  left: 14px;
  background: rgba(255,255,255,.95);
  width: 38px;
  height: 38px;
  border-radius: 50%;
  display: grid;
  place-items: center;
  font-size: 17px;
  cursor: pointer;
  box-shadow: 0 6px 18px rgba(0,0,0,.15);
  z-index: 2;
}

/* ================= CART (BOTTOM RIGHT ON IMAGE) ================= */

.product-cart {
  position: absolute;
  bottom: 14px;
  right: 14px;
  background: rgba(255,255,255,.95);
  width: 40px;
  height: 40px;
  border-radius: 50%;
  display: grid;
  place-items: center;
  font-size: 18px;
  cursor: pointer;
  box-shadow: 0 8px 20px rgba(0,0,0,.18);
  z-index: 2;
}


</style>
</head>

<body>

<!-- BANNER (NEW) -->
<section class="kids-banner">
  <div>
    <h1>Create Magical <span>Kids Party Moments</span></h1>
    <p>
      Discover hand-picked entertainment, games, and experiences
      loved by kids and trusted by parents.
    </p>
  </div>
</section>

<!-- ACTIVITIES -->
<section class="section">
  <h2 class="section-title">Most Popular Party Activities</h2>
  <p class="section-sub">The most loved entertainment choices for 2026.</p>

  <div class="cards">
    <div class="card" data-category="magic" onclick="applyCategoryFilter('magic')">
      <img src="../assets/images/kids/categories/magicshow.webp">
      <div class="card-body">
        <div class="card-title"><h2>Professional Magic Shows</h2></div>
      </div>
    </div>

    <div class="card" data-category="face" onclick="applyCategoryFilter('face')">
      <img src="../assets/images/kids/categories/facepainting.webp">
      <div class="card-body">
        <div class="card-title"><h2>Artistic Face Painting</h2></div>
      </div>
    </div>

    <div class="card" data-category="inflatable" onclick="applyCategoryFilter('inflatable')">
      <img src="../assets/images/kids/categories/inflatables.webp">
      <div class="card-body">
        <div class="card-title"><h2>Premium Inflatables</h2></div>
      </div>
    </div>

    <div class="card" data-category="puppet" onclick="applyCategoryFilter('puppet')">
      <img src="../assets/images/kids/categories/Puppet.webp">
      <div class="card-body">
        <div class="card-title"><h2>Classic Puppet Theater</h2></div>
      </div>
    </div>
  </div>
</section>






<!-- FEATURED -->
<!-- <section class="section">
  <h2 class="section-title">Featured Party Products</h2>
  <p class="section-sub">Curated premium party supplies.</p>
 -->

  <!-- BUDGET FILTER -->
<!-- <div class="budget-filter" id="budgetFilter" style="display:none;">
  <label>Budget:</label>
  <select onchange="applyBudgetFilter(this.value)">
    <option value="all">All</option>
    <option value="0-3000">Below ₹3,000</option>
    <option value="3000-6000">₹3,000 – ₹6,000</option>
    <option value="6000-10000">₹6,000 – ₹10,000</option>
    <option value="10000">Above ₹10,000</option>
  </select>
</div>


  <div class="products">
    <div class="product">
      <img src="https://images.unsplash.com/photo-1513151233558-d860c5398176">
      <div class="product-body">
        <strong>Explorer Theme Kit</strong>
        <div class="product-price">3000</div>
        <button>Add to Cart</button>
      </div>
    </div>

    <div class="product">
      <img src="https://images.unsplash.com/photo-1541696432-82c6da8ce7bf">
      <div class="product-body">
        <strong>Pro Artist Palette</strong>
        <div class="product-price">5000</div>
        <button>Add to Cart</button>
      </div>
    </div>

    <div class="product">
      <img src="https://images.unsplash.com/photo-1565120130285-97b86c3b9fdc">
      <div class="product-body">
        <strong>Deluxe Balloon Arch</strong>
        <div class="product-price">8000</div>
        <button>Add to Cart</button>
      </div>
    </div>
  </div>
</section> -->
<!-- FEATURED -->
<section class="section">
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
    <div class="product-wishlist">♡</div>
    <div class="product-cart">🛒</div>
    <div class="product-badge">22% OFF</div>
  </div>

  <div class="product-body">
    <div class="product-title">Princess Anna Cartoon Mascot</div>

    <div class="product-price-row">
      <div class="product-price">₹3,499</div>
      <div class="product-old-price">₹4,499</div>
    </div>

    <div class="product-rating">⭐ 4.9 <span>(120+ bookings)</span></div>

    <div class="product-footer">
      <a href="book-now.php" class="book-btn">Book Now</a>
    </div>
  </div>
</div>

<!-- MAGIC PRODUCT 2 -->
<div class="product" data-category="magic" data-price="4999">
  <div class="product-img">
    <img src="../assets/images/kids/magicshow/clown.webp" alt="Clown Magic Show">
    <div class="product-wishlist">♡</div>
    <div class="product-cart">🛒</div>
    <div class="product-badge">18% OFF</div>
  </div>

  <div class="product-body">
    <div class="product-title">Funny Clown Magic Show</div>

    <div class="product-price-row">
      <div class="product-price">₹4,999</div>
      <div class="product-old-price">₹6,099</div>
    </div>

    <div class="product-rating">⭐ 4.8 <span>(95+ bookings)</span></div>

    <div class="product-footer">
      <a href="book-now.php" class="book-btn">Book Now</a>
    </div>
  </div>
</div>

<!-- MAGIC PRODUCT 3 -->
<div class="product" data-category="magic" data-price="6999">
  <div class="product-img">
    <img src="../assets/images/kids/magicshow/elsa.webp" alt="Grand Illusion Magic Show">
    <div class="product-wishlist">♡</div>
    <div class="product-cart">🛒</div>
    <div class="product-badge">25% OFF</div>
  </div>

  <div class="product-body">
    <div class="product-title">Grand Illusion Magic Show</div>

    <div class="product-price-row">
      <div class="product-price">₹6,999</div>
      <div class="product-old-price">₹9,299</div>
    </div>

    <div class="product-rating">⭐ 5.0 <span>(210+ bookings)</span></div>

    <div class="product-footer">
      <a href="book-now.php" class="book-btn">Book Now</a>
    </div>
  </div>
</div>

<!-- MAGIC PRODUCT 4 -->
<div class="product" data-category="magic" data-price="8999">
  <div class="product-img">
    <img src="../assets/images/kids/magicshow/anchor.jpg" alt="Stage Magician Show">
    <div class="product-wishlist">♡</div>
    <div class="product-cart">🛒</div>
    <div class="product-badge">20% OFF</div>
  </div>

  <div class="product-body">
    <div class="product-title">Premium Stage Magician</div>

    <div class="product-price-row">
      <div class="product-price">₹8,999</div>
      <div class="product-old-price">₹11,299</div>
    </div>

    <div class="product-rating">⭐ 4.9 <span>(180+ bookings)</span></div>

    <div class="product-footer">
      <a href="book-now.php" class="book-btn">Book Now</a>
    </div>
  </div>
</div>

<!-- MAGIC PRODUCT 5 -->
<div class="product" data-category="magic" data-price="5999">
  <div class="product-img">
    <img src="../assets/images/kids/magicshow/kids-anchor.jpg" alt="Kids Party Anchor">
    <div class="product-wishlist">♡</div>
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
      ⭐ 4.8 <span>(140+ bookings)</span>
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
    <div class="product-wishlist">♡</div>
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
      ⭐ 5.0 <span>(220+ bookings)</span>
    </div>

    <div class="product-footer">
      <a href="book-now.php" class="book-btn">Book Now</a>
    </div>
  </div>
</div>

</div>



    <!-- FACE PAINTING -->
    <div class="product"
         data-category="face"
         data-price="5000">
      <img src="https://images.unsplash.com/photo-1541696432-82c6da8ce7bf">
      <div class="product-body">
        <strong>Pro Artist Palette</strong>
        <div class="product-price">₹5000</div>
        <button>Add to Cart</button>
      </div>
    </div>

    <!-- INFLATABLE -->
    <div class="product"
         data-category="inflatable"
         data-price="8000">
      <img src="https://images.unsplash.com/photo-1565120130285-97b86c3b9fdc">
      <div class="product-body">
        <strong>Deluxe Balloon Arch</strong>
        <div class="product-price">₹8000</div>
        <button>Add to Cart</button>
      </div>
    </div>

  </div>
</section>

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

function applyCategoryFilter(category) {
  activeCategory = category;

  // Show budget filter
  document.getElementById("budgetFilter").style.display = "flex";

  // Scroll to product section
  document.querySelector(".products").scrollIntoView({
    behavior: "smooth"
  });

  // Filter by category
  document.querySelectorAll(".product").forEach(product => {
    product.style.display =
      product.dataset.category === category ? "block" : "none";
  });
}

function applyBudgetFilter(range) {
  document.querySelectorAll(".product").forEach(product => {

    // Skip products from other categories
    if (product.dataset.category !== activeCategory) return;

    const price = parseInt(product.dataset.price);
    let show = false;

    if (range === "all") show = true;
    else if (range === "0-3000") show = price < 3000;
    else if (range === "3000-6000") show = price >= 3000 && price <= 6000;
    else if (range === "6000-10000") show = price >= 6000 && price <= 10000;
    else if (range === "10000") show = price > 10000;

    product.style.display = show ? "block" : "none";
  });
}












const filterButtons = document.querySelectorAll(".budget-btn");
const products = document.querySelectorAll(".product");

filterButtons.forEach(btn => {
  btn.addEventListener("click", () => {

    filterButtons.forEach(b => b.classList.remove("active"));
    btn.classList.add("active");

    const range = btn.dataset.range;

    products.forEach(product => {
      if (range === "all") {
        product.style.display = "block";
      } else {
        product.style.display =
          product.dataset.price === range ? "block" : "none";
      }
    });
  });
});
</script>

</body>
</html>

<?php include '../includes/footer.php'; ?>
