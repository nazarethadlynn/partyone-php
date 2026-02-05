<?php
$productPrice = 3499;
$originalPrice = 4499;
$discountPercent = 22;
?>
<?php include '../includes/header.php'; ?>

<style>


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

/* =========================================================
   ✅ SIMILAR PRODUCTS — STACKED GRID (FIX)
   ========================================================= */

.similar-products {
  margin-top: 40px;
}

.similar-products-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
  gap: 24px;
}

/* ❌ KILL HORIZONTAL BEHAVIOR COMPLETELY */
.similar-scroll {
  display: block !important;
  overflow: visible !important;
}

/* Ensure cards don’t stretch weirdly */
.similar-products .product {
  height: 420px;
}













/* ================= BUY NOW PRIMARY BUTTON (FIX) ================= */

.buy-btn-wrapper {
  margin-top: 16px;
}

.buy-now-btn {
  width: 100%;
  height: 54px;

  background: #e11d48;          /* PartyOne red */
  color: #ffffff;

  border: none;
  border-radius: 999px;         /* pill shape */

  font-size: 16px;
  font-weight: 700;
  letter-spacing: 0.2px;

  cursor: pointer;

  display: flex;
  align-items: center;
  justify-content: center;

  box-shadow: 0 10px 22px rgba(225, 29, 72, 0.28);

  transition: 
    background 0.25s ease,
    transform 0.15s ease,
    box-shadow 0.25s ease;
}

/* Hover */
.buy-now-btn:hover {
  background: #c5163d;
  box-shadow: 0 14px 30px rgba(225, 29, 72, 0.38);
  transform: translateY(-1px);
}

/* Active click */
.buy-now-btn:active {
  transform: scale(0.98);
}

/* Remove focus outline */
/* .buy-now-btn:focus {
  outline: none;
} */

</style>
<div class="product-page-wrap">

<div class="product-layout">



<!-- ================= LEFT: IMAGE GALLERY ================= -->
<div class="product-image-column">
  <div class="product-image-sticky">

    <div class="image-card">

      <!-- MAIN IMAGE + ARROWS (OUTSIDE IMAGE) -->
      <div class="main-image-container">

        <button class="nav-arrow left" onclick="prevImage()">‹</button>

        <div class="main-image-wrapper">
          <img
            id="mainProductImage"
            src="../assets/images/kids/magicshow/princess-anna.webp"
            alt="Product Image"
          />
        </div>

        <button class="nav-arrow right" onclick="nextImage()">›</button>

      </div>

      <!-- THUMBNAILS -->
      
      <div class="thumbnail-strip">
  <img src="../assets/images/kids/magicshow/princess-anna.webp"
       class="active"
       onclick="changeMainImage(this)">
  <img src="../assets/images/kids/magicshow/princess-anna1.jpg"
       onclick="changeMainImage(this)">
  <img src="../assets/images/kids/magicshow/princess-anna2.jpg"
       onclick="changeMainImage(this)">
  <img src="../assets/images/kids/magicshow/princess-anna3.jpg"
       onclick="changeMainImage(this)">
  <img src="../assets/images/kids/magicshow/princess-anna4.jpg"
       onclick="changeMainImage(this)">
</div>


    </div>

  </div>
</div>


<!-- ================= RIGHT: PRODUCT DETAILS ================= -->
<div class="product-details-column clean-details">

  <!-- INFO CARD -->
  <div class="details-card">

    <span class="top-badge">🔥 #1 Decoration Website in India</span>

    <h1 class="product-title">Princess Anna Cartoon Mascot</h1>

    <div class="price-block">
      <span class="main-price">₹<?= number_format($productPrice) ?></span>
      <del class="old-price">₹<?= number_format($originalPrice) ?></del>
      <span class="offer-badge"><?= $discountPercent ?>% OFF</span>
    </div>

    <div class="inclusive-text">Inclusive of all charges</div>

    <div class="rating-row">
      ⭐ <strong>4.9</strong>
      <span class="reviews">114 Reviews</span>
    </div>

    <hr class="details-divider">

    <a href="#" class="view-category-btn">
      View More in this Category →
    </a>

  </div>

  <!-- ✅ BOOKING CARD (FULLY WORKING) -->
<div class="booking-card">

  <div class="price-row">
    <span class="price">₹<?= number_format($productPrice) ?></span>
    <span class="per-text">/ decoration</span>
  </div>

  <!-- PINCODE -->
  <div class="input-group">
    <i class="fa-solid fa-location-dot"></i>
    <input
      type="text"
      id="pincodeInput"
      placeholder="Enter pincode"
      maxlength="6"
    />
  </div>

  <div
    class="forgot-pincode"
    id="forgotPincode"
    style="display:none;"
  >
    Forgot Pincode?
  </div>
<!-- MOBILE NUMBER -->
<div class="input-group">
  <i class="fa-solid fa-phone"></i>
  <input
    type="tel"
    id="mobileInput"
    placeholder="Enter mobile number"
    maxlength="10"
  />
</div>

<div
  class="mobile-error"
  id="mobileError"
  style="display:none;"
>
  Please enter a valid 10-digit mobile number
</div>


<!-- DATE & TIME FIELD -->
<div class="input-group datetime-wrapper">
  <i class="fa-regular fa-calendar"></i>

  <input
    type="text"
    id="dateTimeDisplay"
    placeholder="Select Date & Time"
    readonly
  />

  <!-- Native pickers (in DOM, invisible, anchored) -->
  <input type="date" id="hiddenDate" class="native-picker" />
  <input type="time" id="hiddenTime" class="native-picker" />
</div>


  <p class="info-text">
    Our decorator will come and complete the decoration
    <strong>anytime between the selected time range</strong>
  </p>

  <div class="delivery-row">
    <span>Delivery Charges</span>
    <span class="free">₹0</span>
  </div>


<div class="buy-btn-wrapper">
  <button id="openAddonsModal" class="buy-now-btn">
  Buy Now →
</button>

</div>


  <div class="trust-row">
    <div class="trust-item">🔒 Secured Transactions</div>
    <div class="trust-item">⭐ 100% Service Guaranteed</div>
    <div class="trust-item">🖼 Original Photos</div>
    <div class="trust-item">👥 Expert Decorators</div>
  </div>

</div>


<!-- ================= TRUSTED BRAND CARD ================= -->
<div class="trust-brand-card">

  <div class="trust-left">
    <h3>India's Most Trusted</h3>
    <h2>Home Decor Brand</h2>
  </div>

  <div class="trust-right">
    <ul>
      <li>✅ Same Day Service</li>
      <li>✅ Professional Decorators</li>
      <li>✅ Lowest Price Guaranteed</li>
      <li>✅ 10 Lacs+ Trusted Users</li>
    </ul>
  </div>

  <a href="#" class="recent-work-btn">
    View Our Recent Works →
  </a>

</div>




<!-- ================= RATINGS & REVIEWS ================= -->
<div class="ratings-card">

  <!-- HEADER -->
  <div class="ratings-header">
    <div class="ratings-summary">
      <h2>Ratings & Reviews</h2>

      <div class="rating-line">
        <span class="rating-value">4.9</span>
        <span class="rating-star">★</span>
        <span class="rating-count">313 Ratings</span>
      </div>
    </div>

    <a href="#" class="write-review">
      Write a review <span class="edit-icon">✎</span>
    </a>
  </div>

  <!-- IMAGE PREVIEWS -->
  <div class="review-thumbs">
    <img src="../assets/images/kids/magicshow/princess-anna1.jpg">
    <img src="../assets/images/kids/magicshow/princess-anna2.jpg">
    <img src="../assets/images/kids/magicshow/princess-anna3.jpg">
    <img src="../assets/images/kids/magicshow/princess-anna4.jpg">
  </div>

  <!-- REVIEWS WRAPPER -->
  <div id="reviewsWrapper">

    <!-- REVIEW 1 -->
    <div class="review-item">
      <div class="avatar">
        <svg viewBox="0 0 24 24">
          <circle cx="12" cy="8" r="4"></circle>
          <path d="M4 20c0-4 4-6 8-6s8 2 8 6"></path>
        </svg>
      </div>

      <div class="review-body">
        <div class="review-top">
          <div class="review-name">
            Arjun Raj <span class="verified">✔</span>
            <span class="user-rating">4.6 ★</span>
          </div>
          <div class="review-location">📍 Ahmedabad, India</div>
        </div>
        <p>
          I had such a wonderful experience with this balloon decoration service!
          The setup was absolutely beautiful and exceeded my expectations.
        </p>
      </div>
    </div>

    <hr>

    <!-- REVIEW 2 -->
    <div class="review-item">
      <div class="avatar">
        <svg viewBox="0 0 24 24">
          <circle cx="12" cy="8" r="4"></circle>
          <path d="M4 20c0-4 4-6 8-6s8 2 8 6"></path>
        </svg>
      </div>

      <div class="review-body">
        <div class="review-top">
          <div class="review-name">
            Vikas Jariwala <span class="verified">✔</span>
            <span class="user-rating">4.9 ★</span>
          </div>
          <div class="review-location">📍 Delhi, India</div>
        </div>
        <p>
          Very good decoration work done by Vansh who visited our place.
          Beautiful and very professional. Definitely recommend.
        </p>
      </div>
    </div>

    <!-- HIDDEN REVIEWS -->
    <div class="extra-reviews">

      <hr>

      <div class="review-item">
        <div class="avatar">
          <svg viewBox="0 0 24 24">
            <circle cx="12" cy="8" r="4"></circle>
            <path d="M4 20c0-4 4-6 8-6s8 2 8 6"></path>
          </svg>
        </div>

        <div class="review-body">
          <div class="review-top">
            <div class="review-name">
              Neha Sharma <span class="verified">✔</span>
              <span class="user-rating">5.0 ★</span>
            </div>
            <div class="review-location">📍 Mumbai, India</div>
          </div>
          <p>
            Excellent service and very polite decorators.
            Everything was done on time and looked stunning.
          </p>
        </div>
      </div>

      <hr>

      <div class="review-item">
        <div class="avatar">
          <svg viewBox="0 0 24 24">
            <circle cx="12" cy="8" r="4"></circle>
            <path d="M4 20c0-4 4-6 8-6s8 2 8 6"></path>
          </svg>
        </div>

        <div class="review-body">
          <div class="review-top">
            <div class="review-name">
              Rohit Mehta <span class="verified">✔</span>
              <span class="user-rating">4.8 ★</span>
            </div>
            <div class="review-location">📍 Pune, India</div>
          </div>
          <p>
            Decorations were classy and elegant.
            Guests loved it. Will surely book again.
          </p>
        </div>
      </div>

    </div>
  </div>

  <!-- READ MORE -->
  <button id="toggleReviews" class="read-more-reviews">
    Read More Reviews
  </button>

</div>


</div>


</div>










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





<!-- ================= SIMILAR PRODUCTS ================= -->
<section class="similar-products">

  <div class="similar-header">
    <h2>Similar Products</h2>
    <a href="/PARTYONE-PHP/public/kids.php" class="view-all">View All</a>
  </div>

  <div class="products similar-products-grid">

    <!-- PRODUCT 1 -->
    <div class="product">
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
          <a href="book-now.php" class="book-btn">Book Now</a>
        </div>
      </div>
    </div>

    <!-- PRODUCT 2 -->
    <div class="product">
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
          <a href="book-now.php" class="book-btn">Book Now</a>
        </div>
      </div>
    </div>

    <!-- PRODUCT 3 -->
    <div class="product">
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
          <a href="book-now.php" class="book-btn">Book Now</a>
        </div>
      </div>
    </div>

    <!-- PRODUCT 4 -->
    <div class="product">
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
          <a href="book-now.php" class="book-btn">Book Now</a>
        </div>
      </div>
    </div>

    <!-- PRODUCT 5 -->
    <div class="product">
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
          <a href="book-now.php" class="book-btn">Book Now</a>
        </div>
      </div>
    </div>

  </div>
</section>











<!-- ================= PROMO IMAGE BANNERS ================= -->
<section class="promo-banners">

  <!-- LEFT IMAGE BANNER -->
  <a href="#" class="promo-image-banner">
    <img
      src="../assets/images/anniversarybanner.jpg"
      alt="Celebrate Birthday Banner"
    />
  </a>

  <!-- RIGHT IMAGE BANNER -->
  <a href="#" class="promo-image-banner">
    <img
      src="../assets/images/kidsbanner.png"
      alt="Extraordinary Birthday Banner"
    />
  </a>

</section>












<script src="../assets/js/wishlist.js"></script>


<script>
document.addEventListener("DOMContentLoaded", () => {

  const modal = document.getElementById("addonsModal");
  const closeBtn = document.getElementById("closeAddons");
  const buyNowBtn = document.getElementById("openAddonsModal");

  /* OPEN ADD-ONS FROM BUY NOW */
  if (buyNowBtn && modal) {
    buyNowBtn.addEventListener("click", e => {
      e.preventDefault();
      modal.style.display = "flex";
      document.body.style.overflow = "hidden";
    });
  }

  /* CLOSE MODAL */
  closeBtn?.addEventListener("click", () => {
    modal.style.display = "none";
    document.body.style.overflow = "";
  });

  /* CLICK OUTSIDE TO CLOSE */
  modal?.addEventListener("click", e => {
    if (e.target === modal) {
      modal.style.display = "none";
      document.body.style.overflow = "";
    }
  });

});

  /* ⭐ SKIP FOR NOW → REDIRECT TO CHECKOUT */
  const skipBtn = document.getElementById("skipToCheckout");
  if (skipBtn) {
    skipBtn.addEventListener("click", () => {
      window.location.href = "/PARTYONE-PHP/public/checkout.php";
    });
  }


  /* ADDONS */
let selectedAddons = JSON.parse(localStorage.getItem("selectedAddons")) || [];

document.querySelectorAll(".addon-card").forEach(card => {
  const btn = card.querySelector(".add-btn");
  if (!btn) return;

  btn.addEventListener("click", () => {
    const addon = {
      name: card.querySelector("h4").innerText,
      price: parseInt(card.querySelector("p").innerText.replace("₹","")),
      image: card.querySelector("img").src
    };

    const exists = selectedAddons.find(a => a.name === addon.name);

    if (exists) {
      selectedAddons = selectedAddons.filter(a => a.name !== addon.name);
      btn.textContent = "ADD";
    } else {
      selectedAddons.push(addon);
      btn.textContent = "ADDED ✓";
    }

    localStorage.setItem("selectedAddons", JSON.stringify(selectedAddons));
  });
});







/* Prevent background scroll when modal is open (mobile fix) */
const addonsModal = document.getElementById('addonsModal');
const openAddonsBtn = document.getElementById('openAddonsModal');
const closeAddonsBtn = document.getElementById('closeAddons');

if (openAddonsBtn) {
  openAddonsBtn.addEventListener('click', () => {
    document.body.style.overflow = 'hidden';
  });
}

if (closeAddonsBtn) {
  closeAddonsBtn.addEventListener('click', () => {
    document.body.style.overflow = '';
  });
}




document.getElementById("openAddonsModal")?.addEventListener("click", e => {
  e.preventDefault();
  document.getElementById("addonsModal").style.display = "flex";
});

document.getElementById("closeAddons")?.addEventListener("click", () => {
  document.getElementById("addonsModal").style.display = "none";
});



document.addEventListener("DOMContentLoaded", () => {

  const tabs = document.querySelectorAll(".addons-tabs .tab");
  const cards = document.querySelectorAll(".addon-card");
  

  if (!tabs.length || !cards.length) return;

  // Save original display (important for flex/grid)
  cards.forEach(card => {
    card.dataset.originalDisplay = getComputedStyle(card).display;
  });

  tabs.forEach(tab => {
    tab.addEventListener("click", () => {

      // Active state
      tabs.forEach(t => t.classList.remove("active"));
      tab.classList.add("active");

      const filter = tab.dataset.filter;

      cards.forEach(card => {
        const categories = (card.dataset.category || "").split(" ");

        // Popular = show all
        if (filter === "all") {
          card.style.display = card.dataset.originalDisplay;
        }
        // Match exact category tag
        else if (categories.includes(filter)) {
          card.style.display = card.dataset.originalDisplay;
        }
        // Hide others
        else {
          card.style.display = "none";
        }
      });

    });
  });

  // ✅ Auto-trigger Popular on open
  document.querySelector('.addons-tabs .tab[data-filter="all"]')?.click();

});


























document.addEventListener("DOMContentLoaded", function () {

  const categories = [
    { name:"Birthday Decorations", icon:"🎂" },
    { name:"Party Decorations", icon:"🏛️" },
    { name:"Candlelight Dinner", icon:"🕯️" },
    { name:"Personalised Gifts", icon:"🎁" },
    { name:"Party Entertainment", icon:"🎤" },
    { name:"Corporate Events", icon:"🏢" },
    { name:"Photography Services", icon:"📸" },
    { name:"Anniversary Decorations", icon:"❤️" },
    { name:"Baby Shower Celebration", icon:"👶" },
    { name:"Show More", icon:"➕" }
  ];

  const partyLinks = document.getElementById("partyLinks");
  const cityTabs = document.querySelectorAll(".party-city-tabs button");

  if (!partyLinks || !cityTabs.length) return;

  function renderLinks(city) {
    partyLinks.innerHTML = "";
    categories.forEach(cat => {
      partyLinks.innerHTML += `
        <a class="party-card" href="/services/${cat.name.toLowerCase().replace(/ /g,'-')}-${city.toLowerCase().replace(/ /g,'-')}">
          
          <div class="party-icon">${cat.icon}</div>

          <div class="party-text">
            <strong>${cat.name}</strong>
            ${cat.name !== "Show More" ? `<span>in ${city}</span>` : ``}
          </div>

        </a>
      `;
    });
  }

  /* Initial */
  renderLinks("Delhi NCR");

  /* Tabs */
  cityTabs.forEach(btn => {
    btn.addEventListener("click", () => {
      cityTabs.forEach(b => b.classList.remove("active"));
      btn.classList.add("active");
      renderLinks(btn.dataset.city);
    });
  });

});


























function changeMainImage(el) {
  const mainImage = document.getElementById("mainProductImage");

  // Change main image
  mainImage.src = el.src;

  // Remove active class from all thumbnails
  document.querySelectorAll(".thumbnail-strip img")
    .forEach(img => img.classList.remove("active"));

  // Add active class to clicked thumbnail
  el.classList.add("active");
}

let currentIndex = 0;
const thumbs = document.querySelectorAll(".thumbnail-strip img");
const mainImage = document.getElementById("mainProductImage");

function changeMainImage(el) {
  thumbs.forEach((img, i) => {
    img.classList.remove("active");
    if (img === el) currentIndex = i;
  });

  el.classList.add("active");
  mainImage.src = el.src;
}

function nextImage() {
  currentIndex = (currentIndex + 1) % thumbs.length;
  changeMainImage(thumbs[currentIndex]);
}

function prevImage() {
  currentIndex =
    (currentIndex - 1 + thumbs.length) % thumbs.length;
  changeMainImage(thumbs[currentIndex]);
}







































</script>



<!-- ================= PARTY LINKS SECTION ================= -->
<section class="party-links-section">
  <h2>Host Your Next Party With Ease</h2>

  <!-- CITY TABS -->
  <div class="party-city-tabs">
    <button class="active" data-city="Delhi NCR">Delhi NCR</button>
    <button data-city="Gurugram/Gurgaon">Gurugram/Gurgaon</button>
    <button data-city="Noida">Noida</button>
    <button data-city="Bangalore">Bangalore</button>
    <button data-city="Hyderabad">Hyderabad</button>
    <button data-city="Mumbai">Mumbai</button>
    <button data-city="Pune">Pune</button>
    <button data-city="Ahmedabad">Ahmedabad</button>
    <button data-city="Lucknow">Lucknow</button>
    <button data-city="Chennai">Chennai</button>
  </div>

  <!-- LINKS GRID -->
  <div class="party-links-grid" id="partyLinks"></div>
</section>


<?php include '../includes/footer.php'; ?>
